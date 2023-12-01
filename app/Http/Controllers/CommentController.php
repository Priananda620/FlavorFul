<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\User;
use App\Models\Recipe;
use Illuminate\Validation\ValidationException;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\PersonalAccessToken;

class CommentController extends Controller
{
    public function delete(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'comment_id' => 'required|exists:comments,id'
            ]);
            
            $comment = Comment::where('id', $request->input('comment_id'))->first();
            
            if($comment->user_id === Auth::user()->id){
                CommentLike::where('comment_id', $request->input('comment_id'))->delete();
                $comment->delete();

                return response()->json([
                    'status' => 'ok'
                ]);
            }else{
                return response()->json([
                    'message' => 'The given data was invalid.'
                ], 422);
            }
        } catch (\Throwable $th) {
            throw $th;
        } catch (ValidationException $exception) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $exception->errors(),
            ], 422);
        }
    }

    public function putComment(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'recipeId' => 'required|exists:recipes,edamamId',
                'comment_text' => 'required|string',
                'rating_numeric' => 'required|integer|min:1|max:5'
            ]);

            $newComment = new Comment();

            $newComment->comment = $request->input('comment_text');

            $newComment->rating = $request->input('rating_numeric');

            $newComment->user_id = Auth::user()->id;

            $newComment->recipe_id = Recipe::where('edamamId', $request->input('recipeId'))->first()->id;

            $newComment->save();

            return response()->json([
                'status' => 'ok',
                'recipeId' => $request->input('recipeId'),
                'user_id' => Auth::user()->id,
                'commentId' => $newComment->id
            ]);

        } catch (\Throwable $th) {
            throw $th;
        } catch (ValidationException $exception) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $exception->errors(),
            ], 422);
        }
    }

    public function toggleCommentLike(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'commentId' => 'required|exists:comments,id'
            ]);

            $commentLike = CommentLike::where('comment_id', $request->input('commentId'))->where('user_id', Auth::user()->id)->first();
            if ($commentLike) {
                $likeStatus = !$commentLike->like;
                $commentLike->like = $likeStatus;
                $commentLike->save();
            } else {
                $newLike = new CommentLike();
                $newLike->comment_id = $request->input('commentId');
                $newLike->user_id = Auth::user()->id;
                $likeStatus = true;
                $newLike->like = $likeStatus;
                $newLike->save();
            }

            $totalLikes = CommentLike::where('comment_id', $request->input('commentId'))->where('like', 1)->count();

            return response()->json([
                'username' => Auth::user()->username,
                'likeStatus' => $likeStatus,
                'commentId' => $request->input('commentId'),
                'totalLikes' => $totalLikes
            ]);
        } catch (\Throwable $th) {
            throw $th;
        } catch (ValidationException $exception) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $exception->errors(),
            ], 422);
        }
    }

    public function getComments(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'edamamId' => 'required|string|exists:recipes,edamamId'
            ]);

            $recipe = Recipe::where('edamamId', $request->input('edamamId'))->first();

            if ($recipe) {
                $recipeId = $recipe->id;
                $comments = Comment::with('commentlike', 'user')->where('recipe_id', $recipeId)->orderBy('created_at', 'desc')->get();

                $comments = $comments->map(function ($comment) {

                    $user_is_liked = $comment->commentlike->contains(function ($like) {
                        if ($like->user_id == auth()->user()->id && $like->like) {
                            $current_user_is_liked = true;
                        } else {
                            $current_user_is_liked = false;
                        }

                        return $current_user_is_liked;
                    });

                    $curr_user_owner = $comment->user->id == auth()->user()->id ? true : false;

                    $comment->user_is_liked = $user_is_liked;
                    $comment->total_likes = CommentLike::where('comment_id', $comment->id)->where('like', 1)->count();
                    $comment->user_owner = $curr_user_owner;

                    $createdAt = Carbon::parse($comment->created_at);
                    $comment->elapsed_time = $createdAt->diffForHumans();


                    return $comment;
                });

                $avg_rating = round(Comment::where('recipe_id', $recipeId)->avg('rating'));

                return response()->json([
                    'edamamId' => $request->input('edamamId'),
                    'avg_rating' => $avg_rating,
                    'total' => $comments->count(),
                    'comments' => $comments
                ]);
            } else {
                return response()->json([
                    'message' => 'The given data was invalid.'
                ], 422);
            }
        } catch (\Throwable $th) {
            throw $th;
        } catch (ValidationException $exception) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $exception->errors(),
            ], 422);
        }
    }
}
