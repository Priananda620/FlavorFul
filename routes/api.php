<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SavedRecipeController;
use App\Http\Controllers\UserController;
use App\Models\Collection;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'Login'])->name('loginApi');
Route::post('/register', [UserController::class, 'register'])->name('registerApi');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/get/comments', [CommentController::class, 'getComments']);

    Route::get('/get/collections', [CollectionController::class, 'get']);

    Route::get('/get/popular_recipe', [RecipeController::class, 'getPopular']);

    Route::get('/get/collection/recipes', [RecipeController::class, 'getRecipeCollection']);

    Route::post('/create/collections', [CollectionController::class, 'create']);

    Route::post('/add/recipe', [RecipeController::class, 'addRecipe']);

    Route::post('/add/comment', [CommentController::class, 'putComment']);

    Route::post('/add/collection', [CollectionController::class, 'add']);

    Route::post('/delete/comment', [CommentController::class, 'delete']);

    Route::post('/toggle/comment-like', [CommentController::class, 'toggleCommentLike']);

    Route::post('/toggle/recipe-like', [RecipeController::class, 'toggleRecipeLike']);

    Route::post('/toggle/saved-recipe', [SavedRecipeController::class, 'add']);

    Route::post('/change-password', [UserController::class, 'changePassword']);

    Route::post('/update-profile', [UserController::class, 'updateProfile']);
});