<?php

namespace App\Http\Controllers;
use App\Models\Ingredients as IngredientsModel;
use App\Http\Controllers\IngredientsController;


use App\Models\Ingredients;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function home()
    {
        $recipes = Recipe::with('ingredients')->get();
        $products = Ingredients::all();
        $ingredientsGroups = (new IngredientsController())->getGroups();

        return view('home', [
            'recipes' => $recipes,
            'products' => $products,
            'ingredientsGroups' => $ingredientsGroups,
        ]);
    }


    public function store(Request $request)
    {

        return back()->with('success', 'Ingredients added');
    }

    public function about()
    {
        return view('about');
    }

    public function quiz()
    {
        return view('quiz')->with("hello", rand(1, 100));
    }
}


