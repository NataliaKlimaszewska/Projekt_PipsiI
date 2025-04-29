<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller
{
    public function home(){
        $ingredientsController = new Ingredients();
        return view('home', ['ingredientsGroups' => $ingredientsController->getGroups()]);
    }

    public function store(Request $request)
    {
        $ingredients = $request->input('ingredients', []);
        return back()->with('success', 'Ingredients added');
    }

    public function about()
    {
        return view('about');
    }

    public function logIn()
    {
        return view('logIn');
    }

    public function logOut() {
        auth()->logout();
        return redirect('/');
    }

    public function register() {
        return view('register');
    }

    public function ideas() {
        return view('ideas')->with("hello");
    }

    public function quiz()
    {
        $hello = rand(1, 100);
        return view('quiz')->with("hello", $hello);
    }

    public function createRecipe() {
        $hello = rand(1, 100);
        return view('createRecipe')->with("hello", $hello);
    }
}

