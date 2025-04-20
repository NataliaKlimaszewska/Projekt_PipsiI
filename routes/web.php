<?php
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'home']);
Route::post('/store', [Controller::class, 'store']);
Route::get('/about', [Controller::class, 'about']);
Route::get('/login', [Controller::class, 'logIn']);
Route::post('/logout', [Controller::class, 'logOut']);
Route::get('/register', [Controller::class, 'register']);
Route::get('/ideas', [Controller::class, 'ideas']);
Route::get('/quiz', [Controller::class, 'quiz']);
Route::get('/create-recipe', [Controller::class, 'createrRecipe']);

?>
