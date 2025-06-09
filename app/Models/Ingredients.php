<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model

{

    protected $connection = 'recipes';
    protected $table = 'produkty';

}
