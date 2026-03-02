<?php
namespace App\Repositories;

use App\Models\Formation;

class FormationRepository
{
    public function getAllFormations()
    {
        return Formation::with('brigades')->get();
    }
}