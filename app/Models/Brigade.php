<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Brigade extends Model
{
    protected $fillable = ['image', 'name', 'description'];

    public function formation() : BelongsTo {
        return $this->belongsTo(Formation::class);
    }

    public function battles() : BelongsToMany {
        return $this->belongsToMany(Battle::class);
    }
}
