<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Comment;
use App\Models\User;
use App\Models\Recipe;
use App\Models\RecipeLike;
use App\Models\SavedRecipe;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Validation\ValidationException;

class RecipeController extends Controller
{
    public function toggleRecipeLike(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'recipeId' => 'required|exists:recipes,edamamId',
                'toggle' => 'required|boolean'
            ]);

            $recipeId = Recipe::where('edamamId', $request->input('recipeId'))->first();
            if ($recipeId) {
                $recipeId = $recipeId->id;

                if ($request->input('toggle') == false) {
                    $recipeLike = RecipeLike::where('recipe_id', $recipeId)->where('user_id', Auth::user()->id)->first();
                    if ($recipeLike) {
                        $likeStatus = $recipeLike->like ? true : false;
                        $totalLikes = RecipeLike::where('recipe_id', $recipeId)->where('like', 1)->count();
                    } else {
                        $likeStatus = false;
                        $totalLikes = 0;
                    }

                    return response()->json([
                        'username' => Auth::user()->username,
                        'likeStatus' => $likeStatus,
                        'recipeId' => $request->input('recipeId'),
                        'totalLikes' => $totalLikes,
                        'toggle' => false
                    ]);
                } else {
                    $recipeLike = RecipeLike::where('recipe_id', $recipeId)->where('user_id', Auth::user()->id)->first();
                    if ($recipeLike) {
                        $likeStatus = !$recipeLike->like;
                        $recipeLike->like = $likeStatus;
                        $recipeLike->save();
                    } else {
                        $newLike = new RecipeLike();
                        $newLike->recipe_id = $recipeId;
                        $newLike->user_id = Auth::user()->id;
                        $likeStatus = true;
                        $newLike->like = $likeStatus;
                        $newLike->save();
                    }

                    $totalLikes = RecipeLike::where('recipe_id', $recipeId)->where('like', 1)->count();

                    return response()->json([
                        'username' => Auth::user()->username,
                        'likeStatus' => $likeStatus,
                        'recipeId' => $request->input('recipeId'),
                        'totalLikes' => $totalLikes,
                        'toggle' => true
                    ]);
                }
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

    private function retrieveNewImage(&$recipe)
    {
        $client = new Client();
        $uri = 'http://www.edamam.com/ontologies/edamam.owl#' . $recipe->edamamId;
        $url = 'https://api.edamam.com/api/recipes/v2/by-uri';
        $app_id = '18f6495e';
        $app_key = '8bb396da11d4832a439ea25f315c827f';

        try {
            $response2 = $client->request('GET', $url, [
                'query' => [
                    'app_id' => $app_id,
                    'app_key' => $app_key,
                    'uri' => $uri,
                    'type' => 'public',
                ],
            ]);

            $data = $response2->getBody()->getContents();
            $responseData = json_decode($data, true);

            $recipe->update(['image' => $responseData['hits'][0]['recipe']['image']]);
        } catch (\Exception $e) {
            $recipe->update(['image' => 'invalid xhr']);
        }
    }

    private function renewImage(&$recipes)
    {

        foreach ($recipes as $recipe) {
            $imageUrl = $recipe->image;

            // if(Carbon::now()->diffInDays($recipe->updated_at) > 1){
                try {
                    $response = Http::get($imageUrl);
    
                    if ($response->status() !== 200 || $response->status() !== 201) {
                        $this->retrieveNewImage($recipe);
                    }
                } catch (\Exception $e) {
                    $this->retrieveNewImage($recipe);
                }
            // }   
        }
    }

    public function getPopular()
    {
        try {
            $popular_recipes = Recipe::withCount('recipeLike')->withCount('savedRecipe')->with('comment')->orderBy('popularity_score', 'desc')->get();

            $this->renewImage($popular_recipes);

            return response()->json([
                'total' => $popular_recipes->count(),
                'recipes' => $popular_recipes
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getRecipeCollection(Request $request){
        try {  
            $validatedData = $request->validate([
                'collectionId' => 'exists:collections,id'
            ]);

            $collection = Collection::where('id', $request->input('collectionId'))->first();
            if($collection->user_id != auth()->user()->id){
                $response = [
                    'message' => 'Unauthorized action.',
                    'error' => 'You are not allowed to perform this action on the specified collection.',
                ];
            
                return response()->json($response, JsonResponse::HTTP_UNAUTHORIZED);
            }
            
            // $recipes = SavedRecipe::with('recipe')->withCount('recipeLike')->withCount('savedRecipe')->with('comment')->where('collection_id', $collection->id)->get()->pluck('recipe');
            
            $recipeIds = SavedRecipe::where('collection_id', $collection->id)->get()->pluck('recipe_id');

            $recipes = Recipe::whereIn('id', $recipeIds)->withCount('recipeLike')->withCount('savedRecipe')->with('comment')->orderBy('popularity_score', 'desc')->get();



            return response()->json([
                'total' => $recipes->count(),
                'recipes' => $recipes
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

    public function addRecipe(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'recipeId' => 'required|string',
                'recipeTitle' => 'required|string',
                'recipeImage' => 'required|string'
            ]);

            $isExist = Recipe::where('edamamId', $request->input('recipeId'))->first();

            if (!$isExist) {
                $newRecipe = new Recipe();
                $newRecipe->title = $request->input('recipeTitle'); // Set the title here
                $newRecipe->edamamId = $request->input('recipeId');
                $newRecipe->image = $request->input('recipeImage');
                $newRecipe->popularity_score = 1; // Set the popularity_score here
                $newRecipe->view_count = 1;

                $newRecipe->save();
            } else {
                //redis
                $isExist->view_count = ++$isExist->view_count;
                // $totalUser = User::count();

                // if ($isExist->view_count > $totalUser) {
                //     $isExist->view_count = $totalUser;
                // }

                $commentRatings = Comment::where('recipe_id', $isExist->id)->get();

                $totalScore = $commentRatings->map(function ($commentRating) {
                    return $commentRating->rating - 3;
                })->sum();

                $recipeLike = RecipeLike::where('recipe_id', $isExist->id)->where('like', 1)->count();

                $popularity_score = $totalScore + (++$recipeLike) + $isExist->view_count + $commentRatings->count();

                $isExist->popularity_score = $popularity_score;

                $isExist->save();
            }


            return response()->json([
                'status' => 'ok',
                'edamamId' => $request->input('recipeId'),
                'isExist' => $isExist
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

    public function getRecipeDetails(Request $request, $recipeId)
    {
        // echo $recipeId;

        try {

            // if (env('APP_ENV', 'local') === 'local') {
            if (false) {
                $client = new Client();

                $uri = 'http://www.edamam.com/ontologies/edamam.owl#recipe_' . $recipeId;

                $url = 'https://api.edamam.com/api/recipes/v2/by-uri';
                $app_id = '18f6495e';
                $app_key = '8bb396da11d4832a439ea25f315c827f';

                $response = $client->request('GET', $url, [
                    'query' => [
                        'app_id' => $app_id,
                        'app_key' => $app_key,
                        'uri' => $uri,
                        'type' => 'public',
                    ],
                ]);

                $statusCode = $response->getStatusCode();
                $data = $response->getBody()->getContents();
                $responseData = json_decode($data, true);

                if (
                    $statusCode === 200 && isset($responseData['to']) && $responseData['to'] > 0 && isset($responseData['hits']) &&
                    is_array($responseData['hits']) &&
                    count($responseData['hits']) > 0
                ) {
                    $recipeData = $responseData['hits'][0]['recipe'];
                    $uri = $recipeData['uri'];
                    $parts = explode("#", $uri);

                    if (count($parts) === 2) {
                        $recipeIdExp = $parts[1];

                        if (!Recipe::where('edamamId', $recipeIdExp)->exists()) {
                            $newRecipe = new Recipe();
                            $newRecipe->title = $recipeData['label']; // Set the title here
                            $newRecipe->edamamId = $recipeIdExp;
                            $newRecipe->popularity_score = 0; // Set the popularity_score here

                            $newRecipe->save();
                        }

                        return view('recipeDetails', compact('recipeData'));
                    } else {
                        return redirect()->to('/');
                    }
                } else {
                    return redirect()->to('/');
                }
            } else {
                return view('recipeDetails_prod', compact('recipeId'));
            }
        } catch (\Exception $e) {
            // echo $e;
            return redirect()->to('/');
        }
    }
}
