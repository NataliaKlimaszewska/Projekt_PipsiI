<?php

namespace App\Http\Controllers;

use App\Models\Ingrerdients;
use App\Models\Recipe;
use Illuminate\Http\Request;

class Controller
{
    public function home()
    {
        $ingredientsController = new Ingredients();
        $products = Ingrerdients::all();
        $recipes = Recipe::all();
        return view('home', compact('products'), compact('recipes'), ['ingredientsGroups' => $ingredientsController->getGroups()]);
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

    public function quiz()
    {
        $hello = rand(1, 100);
        return view('quiz')->with("hello", $hello);
    }
}

