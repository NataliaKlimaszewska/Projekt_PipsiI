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

