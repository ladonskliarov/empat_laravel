<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brigade extends Model
{
    protected $fillable = ['image', 'name', 'description'];

    public function formation() {
        return $this->belongsTo(Formation::class);
    }

    public function battles() {
        return $this->belongsToMany(Battle::class);
    }
}
