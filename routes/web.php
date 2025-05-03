<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Controller::class, 'home']);
Route::get('/about', [\App\Http\Controllers\Controller::class, 'about']);
Route::get('/logIn', [\App\Http\Controllers\Controller::class, 'logIn']);
Route::get('/register', [\App\Http\Controllers\Controller::class, 'register']);
Route::get('/ideas', [\App\Http\Controllers\Ingredients::class, 'newIdeas']);
Route::get('/createRecipe', [\App\Http\Controllers\Ingredients::class, 'addNewRecipe']);
Route::get('/quiz', [\App\Http\Controllers\Controller::class, 'quiz']);
Route::post('/ingredients/save', [\App\Http\Controllers\Controller::class, 'save'])->name('save.ingredients');

