<?php
namespace App\Repositories;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Collection;

class FormationRepository
{
    public function getAllFormations() : Collection
    {
        return Formation::with('brigades')->get();
    }
}