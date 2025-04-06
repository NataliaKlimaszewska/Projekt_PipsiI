<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;

Route::get('/', [\App\Http\Controllers\Controller::class, "home"]);
Route::get('/log-in', [\App\Http\Controllers\Controller::class, "logIn"]);
Route::get('/log-out', [\App\Http\Controllers\Controller::class, "logOut"]);
Route::get('/register', [\App\Http\Controllers\Controller::class, "register"]);
Route::get('/ideas', [\App\Http\Controllers\Controller::class, "ideas"]);
Route::get('/about', [\App\Http\Controllers\Controller::class, "about"]); // tutaj damy o projekcie i o nas :)
Route::get('/quiz', [\App\Http\Controllers\Controller::class, "quiz"]);
Route::get('/create-recipe',[\App\Http\Controllers\Controller::class, "createrRecipe"]);
Route::get('/DatabaseConnection', function () {
    return view('DatabaseConnection');
});

Route::post('/log-in', [Auth::class, "logIn"])->name('logIn');
