<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $connection = 'recipes';
    protected $table = 'przepisy';

    public function ingredients()
    {
        return $this->hasMany(Ingredients::class, 'id_przepisu', 'id');
    }


}


