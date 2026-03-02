<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = ['image', 'name', 'abbreviation', 'description'];

    public function brigades() {
        return $this->hasMany(Brigade::class);
    }
}
