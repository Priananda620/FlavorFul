<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use App\Models\Recipe;
use Illuminate\Validation\ValidationException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\PersonalAccessToken;

class CommentController extends Controller
{

    public function getComments(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'edamamId' => 'required|string|exists:recipes,edamamId'
            ]);

            $recipe = Recipe::where('edamamId', $request->input('edamamId'))->first();

            if ($recipe) {
                $recipeId = $recipe->id;
                $comments = Comment::with('commentlike', 'user')->where('recipe_id', $recipeId)->get();

                $comments = $comments->map(function ($comment) {

                    $user_is_liked = $comment->commentlike->contains(function ($like) {
                        if ($like->user_id == auth()->user()->id) {
                            $current_user_is_liked = true;
                        } else {
                            $current_user_is_liked = false;
                        }

                        return $current_user_is_liked;
                    });

                    $curr_user_owner = $comment->user->id == auth()->user()->id ? true : false;

                    $comment->user_is_liked = $user_is_liked;
                    $comment->total_likes = $comment->commentlike->count();
                    $comment->user_owner = $curr_user_owner;


                    return $comment;
                });

                return response()->json([
                    'edamamId' => $request->input('edamamId'),
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
