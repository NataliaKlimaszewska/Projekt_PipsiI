<?php

namespace App\Http\Controllers;

class Ingredients extends Controller

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

    private function renderViewWithIngredients($viewName, $additionalData = [])
    {
        $ingredientsGroups = $this->getGroups();
        return view($viewName, array_merge([
            'ingredientsGroups' => $ingredientsGroups,
        ], $additionalData));
    }
    public function newIdeas()
    {
        return $this->renderViewWithIngredients('ideas', [
            'showList' => false
        ]);
    }
    public function addNewRecipe()
    {
        return $this->renderViewWithIngredients('createRecipe', [
            'showList' => false
        ]);
    }
    public function home()
    {
        $ingredientsGroups = $this->getGroups();
        return view('home', [
            'ingredientsGroups' => $ingredientsGroups,
            'showList' => true
        ]);
    }






}

