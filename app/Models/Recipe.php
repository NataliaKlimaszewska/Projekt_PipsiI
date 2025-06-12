<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recipe extends Model
{
    protected $connection = 'recipes';
    protected $table = 'przepisy';

    public function ingredients()
    {
        return $this->hasMany(Ingredients::class, 'id_przepisu', 'id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'przepis_tag', 'przepis_id', 'tag_id');
    }


}


