<?php

namespace App\Http\Controllers;
use App\Models\Ingredients as IngredientsModel;
use App\Http\Controllers\IngredientsController;


use App\Models\Ingredients;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index(Request $request)
    {
        $query = Recipe::with('ingredients');

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('nazwa', 'like', '%' . $request->search . '%')
                    ->orWhere('opis', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('tags') && is_array($request->tags)) {
            $selectedTags = $request->tags; // To jest tablica slugów tagów, np. ['sernik', 'szybkie']

            // Używamy whereHas, aby znaleźć przepisy, które mają WSZYSTKIE wybrane tagi.
            $query->whereHas('tags', function ($q) use ($selectedTags) {
                $q->whereIn('slug', $selectedTags); // Musi mieć tag, którego slug jest w naszej tablicy
            }, '=', count($selectedTags)); // I liczba pasujących tagów musi być równa liczbie wybranych tagów
        }

        $recipes = $query->get();
        $allTags = Tag::all();
        $products = Ingredients::all();
        $ingredientsGroups = (new IngredientsController())->getGroups();

        return view('home', [
            'recipes' => $recipes,
            'products' => $products,
            'ingredientsGroups' => $ingredientsGroups,
            'allTags' => $allTags,
            'selectedTags' => $request->tags ?? [],
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


