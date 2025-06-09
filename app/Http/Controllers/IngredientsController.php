<?php

namespace App\Http\Controllers;

class IngredientsController extends Controller
{
    private $groups = [
        "Dairy" => ["Milk", "Butter", "Yoghurt", "Cream Cheese"],
        "Fruits" => ["Apple", "Plum", "Banana", "Lemon"],
        "Vegetables" => ["Zucchini", "Carrot"],
        "Powdery Products" => ["Flour", "Rice Flour", "Almond Flour"],
        "Sweeteners" => ["Sugar", "Erythritol", "Xylitol", "Stevia"],
        "Other" => ["Eggs", "Oil", "Coconut oil"],
    ];

    public function getGroups()
    {
        return $this->groups;
    }

    public function newIdeas()
    {
        return view('ideas', ['ingredientsGroups' => $this->getGroups(), 'showList' => false]);
    }

    public function addNewRecipe()
    {
        return view('createRecipe', ['ingredientsGroups' => $this->getGroups(), 'showList' => false]);
    }

    public function home()
    {
        return view('home', ['ingredientsGroups' => $this->getGroups(), 'showList' => true]);
    }
}


