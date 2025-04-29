<?php

namespace App\Http\Controllers;

class Ingredients
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
}

