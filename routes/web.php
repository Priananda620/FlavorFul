<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/login',  [AuthController::class, 'loginWeb'])->name('loginWeb');

    Route::post('/register',  [AuthController::class, 'loginWeb'])->name('registerWeb');
    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::get('/forgot-password', function () {
        return view('reset.password.forgotPassword');
    })->name('forgotPassword');

    Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
});

Route::middleware(['loggedIn'])->group(function () {

    Route::get('/test', function () {
        return view('landing');
    })->name('landing');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');



    Route::get('/explore', function () {
        return view('explore');
    })->name('explore');

    Route::get('/recipe-details/{recipeId}', [RecipeController::class, 'getRecipeDetails'])->name('recipeDetails');


    Route::get('/popular', function () {
        return view('popular');
    })->name('popular');


    Route::get('/home', function () {
        return view('landingPage');
    })->name('landingHome');
});
// Route::get('/categories', function () {
//     return view('categories');
// })->name('categories');

Route::get('/', function () {
    return view('landing');
})->name('landing');
