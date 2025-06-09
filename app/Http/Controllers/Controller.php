<?php

namespace App\Http\Controllers;

use App\Models\Ingredients as IngredientsModel;
use App\Http\Controllers\Ingredients as IngredientsController;


use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function home()
    {
        $ingredientsController = new IngredientsController();
        $products = IngredientsModel::all();
        $recipes = Recipe::all();
        return view('home',[
            'products' => $products,
            'recipes' => $recipes,
            'ingredientsGroups' => $ingredientsController,
        ]);
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

