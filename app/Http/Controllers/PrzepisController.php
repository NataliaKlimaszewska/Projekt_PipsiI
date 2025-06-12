<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class PrzepisController extends Controller
{
    public function show($id)
    {
        $recipe = Recipe::with('tags')->findOrFail($id);
        return view('recipes.show', compact('recipe'));
    }
}

