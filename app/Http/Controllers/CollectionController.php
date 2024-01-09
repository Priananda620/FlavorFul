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


class CollectionController extends Controller
{
    function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'recipeId' => 'required|exists:recipes,edamamId',
                'collectionName' => 'required|string'
                // unique:collections,name
            ]);

            $recipeId = $request->input('recipeId', 0);

            $recipeId = Recipe::where('edamamId', $recipeId)->first();

            if (!$recipeId) {
                return response()->json([
                    'message' => 'The given data was invalid.2'
                ], 422);
            }

            $recipeId = $recipeId->id;

            $newCollection = new Collection();

            $newCollection->name = $request->input('collectionName');
            $newCollection->user_id = Auth::user()->id;
            $newCollection->save();

            $newCollectionRecipe = new SavedRecipe();
            $newCollectionRecipe->collection_id = $newCollection->id;
            $newCollectionRecipe->recipe_id = $recipeId;
            $newCollectionRecipe->user_id = Auth::user()->id;
            $newCollectionRecipe->save();

            return response()->json([
                'status' => 'ok',
                'collection_id' => $newCollection->id,
                'recipeId' => $request->input('recipeId', 0),
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


    function delete(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'collectionId' => 'required|exists:collections,id'
                // unique:collections,name
            ]);

            $collection = Collection::find($validatedData['collectionId']);

            if (!$collection) {
                return response()->json([
                    'message' => 'The given data was invalid'
                ], 422);
            }

            if($collection->user_id != Auth::user()->id) {
                return response()->json([
                    'message' => 'The given data was invalid'
                ], 422);
            }

            $collection->delete();

            return response()->json([
                'status' => 'deleted',
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

    function add(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'recipeId' => 'required|exists:recipes,edamamId',
                'collectionId' => 'required|exists:collections,id'
            ]);

            $collection = Collection::where('id', $request->input('collectionId', 0))->where('user_id', Auth::user()->id)->first();

            if (!$collection) {
                return response()->json([
                    'message' => 'The given data was invalid.1'
                ], 422);
            }

            $recipeId = $request->input('recipeId', 0);

            $recipeId = Recipe::where('edamamId', $recipeId)->first();

            if (!$recipeId) {
                return response()->json([
                    'message' => 'The given data was invalid.2'
                ], 422);
            }

            $recipeId = $recipeId->id;

            $savedrecipe = SavedRecipe::where('recipe_id', $recipeId)->where('user_id', Auth::user()->id)->first();

            if (!$savedrecipe) {
                return response()->json([
                    'message' => 'Recipe currently not saved.3'
                ], 422);
            }

            $savedrecipeWithCollection = SavedRecipe::with('collection')->where('collection_id', $collection->id)->where('recipe_id', $recipeId)->where('user_id', Auth::user()->id)->first();

            $aaaa = "dfefe";
            if ($savedrecipeWithCollection) {
                if ($savedrecipeWithCollection->collection_id === $collection->id) {
                    $savedrecipeWithCollection->collection_id = null;
                    $savedrecipeWithCollection->save();
                    $collectionAdded = false;

                    $records = SavedRecipe::where('recipe_id', $recipeId)->where('user_id', Auth::user()->id)->whereNull('collection_id')->get();

                    if ($records->count() > 1) {
                        $firstRecord = $records->shift();
                        foreach ($records as $record) {
                            $record->delete();
                        }
                    }

                    $aaaa = "AAAAAAAAA";
                } else {

                    $aaaa = "BBBBBBBBb";
                }
            } else {
                if ($savedrecipe->collection_id === null) {
                    $savedrecipe->collection_id = $collection->id;
                    $savedrecipe->recipe_id = $recipeId;
                    $savedrecipe->save();
                    $collectionAdded = true;
                    $aaaa = "CCCCCC";
                } else {
                    $newCollectionRecipe = new SavedRecipe();
                    $newCollectionRecipe->collection_id = $collection->id;
                    $newCollectionRecipe->recipe_id = $recipeId;
                    $newCollectionRecipe->user_id = Auth::user()->id;
                    $newCollectionRecipe->save();
                    $collectionAdded = true;
                    $aaaa = "DDDDDD";
                }
            }

            return response()->json([
                'recipeId' => $request->input('recipeId', 0),
                'collection' => $collection->name,
                'collectionAdded' => $collectionAdded,
                'collectionMultipleSaved' => $aaaa
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

    function get(Request $request)
    {
        try {
            $limit = $request->input('limit', 5);
            $offset = $request->input('offset', 0);


            $recipeId = $request->input('recipeId', 0);


            if ($recipeId !== 0) {
                $collections = Collection::with('savedrecipe')->where('user_id', Auth::user()->id)
                    ->skip($offset)
                    ->take($limit)
                    ->orderBy('created_at', 'desc')->get();

                $recipeId = Recipe::where('edamamId', $recipeId)->first();

                if (!$recipeId) {
                    return response()->json([
                        'message' => 'The given data was invalid.'
                    ], 422);
                }

                $recipeId = $recipeId->id;

                $collections = $collections->map(function ($collection) use ($recipeId) {

                    $current_is_added = $collection->savedrecipe->contains(function ($savedrecipe) use ($recipeId) {
                        if ($savedrecipe->recipe_id == $recipeId) {
                            $current_is_added = true;
                        } else {
                            $current_is_added = false;
                        }
                        return $current_is_added;
                    });


                    $collection->current_is_added = $current_is_added;

                    $collectionImages = [];
                    $collection->savedrecipe->map(function ($savedRecipe) use (&$collectionImages) {

                        $limitedRecipes = $savedRecipe->recipe;
                        $collectionImages[] = $limitedRecipes->image;

                        // $limitedRecipes->each(function ($recipe) use (&$collectionImages) {
                        //     $collectionImages[] = $recipe->title; // Replace 'image' with your actual image column name.
                        // });


                        // $collectionImages = array_merge($collectionImages, $limitedRecipes->toArray());

                    });

                    $collection->collectionImages = $collectionImages;

                    return $collection;
                });

                // $collections = $collections->map(function ($collection) use ($recipeId) {
                //     $collection->AAA = true; // Add the "AAA" key with the value "true"
                //     return $collection;
                // });
            } else {
                $collections = Collection::where('user_id', Auth::user()->id)
                    ->skip($offset)
                    ->take($limit)
                    ->get();

                $collections = $collections->map(function ($collection) {

                    $collectionImages = [];
                    $collection->savedrecipe->map(function ($savedRecipe) use (&$collectionImages) {

                        $limitedRecipes = $savedRecipe->recipe;
                        $collectionImages[] = $limitedRecipes->image;
                    });

                    $collection->collectionImages = $collectionImages;

                    return $collection;
                });
            }

            $totalCollections = Collection::where('user_id', Auth::user()->id)->count();

            return response()->json([
                'total' => $collections->count(),
                'status' => 'ok',
                'pagination' => [
                    'total' => $totalCollections,
                    'per_page' => (int)$limit,
                    'current_page' => ceil($offset / $limit) + 1,
                    'last_page' => ceil($totalCollections / $limit),
                ],
                'collections' => $collections,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
