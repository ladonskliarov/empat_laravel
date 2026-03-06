<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Formation extends Model
{
    protected $fillable = ['image', 'name', 'abbreviation', 'description'];

    public function brigades() : HasMany {
        return $this->hasMany(Brigade::class);
    }
}
