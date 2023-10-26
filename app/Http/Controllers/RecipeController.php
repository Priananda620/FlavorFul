<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Recipe;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\PersonalAccessToken;

class RecipeController extends Controller
{
    public function getRecipeDetails(Request $request, $recipeId)
    {
        // echo $recipeId;

        try {
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
        } catch (\Exception $e) {
            // echo $e;
            return redirect()->to('/');
        }
    }
}
