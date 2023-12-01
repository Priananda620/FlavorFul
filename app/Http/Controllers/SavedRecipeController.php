<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\User;
use App\Models\Recipe;
use App\Models\SavedRecipe;
use Illuminate\Validation\ValidationException;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\PersonalAccessToken;


class SavedRecipeController extends Controller
{
    function add(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'recipe_id' => 'required|string|exists:recipes,edamamId',
                'collection_id' => 'integer|exists:collections,id',
                'toggle' => 'required|boolean'
            ]);

            $recipeId = Recipe::where('edamamId', $request->input('recipe_id'))->first();

            if (!$recipeId) {
                return response()->json([
                    'message' => 'The given data was invalid.'
                ], 422);
            }

            $savedRecipe = SavedRecipe::where('recipe_id', $recipeId->id)->where('user_id', Auth::user()->id)->get();


            if ($savedRecipe->isEmpty()) {
                if ($request->input('toggle') == true) {
                    $newSaved = new SavedRecipe();
                    $newSaved->user_id = Auth::user()->id;
                    $newSaved->recipe_id = $recipeId->id;
                    $newSaved->save();
                    $saveToggle = true;
                }else{
                    if(!empty($request->input('collection_id'))){
                        return response()->json([
                            'message' => 'The recipe must be saved first.'
                        ], 422);
                    }
                    $saveToggle = false;
                }
            } else if ($savedRecipe->isNotEmpty()) {
                if ($request->input('toggle') == true) {
                    // $savedRecipe->delete();
                    foreach ($savedRecipe as $model) {
                        $model->delete();
                    }

                    $saveToggle = false;
                }else{
                    $collectionAdded = false;
                    $saveToggle = true;
                    if(!empty($request->input('collection_id'))){
                        $collection = Collection::where('id', $request->input('collection_id'))->where('user_id', Auth::user()->id)->first();

                        if(!$collection){
                            return response()->json([
                                'message' => 'The collection data was invalid.'
                            ], 422);
                        }
                        $savedRecipe->collection_id = $savedRecipe->collection_id == null ? $collection->id : null;
                        
                        $collectionAdded = $savedRecipe->collection_id == null ? false : true;

                        $savedRecipe->save();
                    }

                    return response()->json([
                        'status' => 'ok',
                        'recipeId' => $request->input('recipe_id'),
                        'saveToggle' => $saveToggle,
                        'collection' => $collectionAdded
                    ]);
                }
                
            }

            return response()->json([
                'status' => 'ok',
                'recipeId' => $request->input('recipe_id'),
                'saveToggle' => $saveToggle
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
}
