<?php

use Illuminate\Support\Facades\Route;

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

    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::get('/forgot-password', function () {
        return view('forgotPassword');
    })->name('forgotPassword');


    Route::get('/reset-password', function () {
        return view('resetPassword');
    })->name('resetPassword');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/landing', function () {
    return view('landingPage');
})->name('landingPage');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/recipeDetails', function () {
    return view('recipeDetails');
})->name('recipeDetails');

Route::middleware(['loggedIn'])->group(function () {

    Route::get('/test', function () {
        return view('landing');
    })->name('landing');









    Route::get('/popular', function () {
        return view('popular');
    })->name('popular');
});
Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/', function () {
    return view('landing');
})->name('landing');

