<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});
Route::get('/OurTeam', function () {
    return view('OurTeam');

});Route::get('/LoggingPage', function () {
    return view('LoggingPage');
});

Route::get('/SignInPage', function () {
    return 'Sign In Page';
});
Route::get('/CreateRecipe', function () {
    return 'Create Your Own Recipe Page';
});
Route::get('/Ideas', function () {
    return 'Ideas Page';
});
Route::get('/Quiz', function () {
    return 'Quiz Page';
});

Route::get('/DatabaseConnection', function () {
    return view('DatabaseConnection');
});

use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'home']);
Route::post('/save-ingredients', [Controller::class, 'store'])->name('save.ingredients');


