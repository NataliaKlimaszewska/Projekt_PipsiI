<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $connection = 'recipes';
    protected $table = 'tagi';

    public function recipes(): BelongsToMany{
        return $this->belongsToMany(Recipe::class, 'przepis_tag', 'tag_id', 'przepis_id');
    }
}
