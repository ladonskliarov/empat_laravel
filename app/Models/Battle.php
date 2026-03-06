<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Battle extends Model
{
    protected $fillable = ['title', 'description', 'image_map', 'image_battle'];

    public function brigades() : BelongsToMany {
        return $this->belongsToMany(Brigade::class);
    }
}
