<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Battle extends Model
{
    protected $fillable = ['title', 'description', 'image_map', 'image_battle'];

    public function brigades() {
        return $this->belongsToMany(Brigade::class);
    }
}
