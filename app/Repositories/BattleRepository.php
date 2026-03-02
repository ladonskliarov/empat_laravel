<?php
namespace App\Repositories;

use App\Models\Battle;

class BattleRepository
{
    public function getAllBattles()
    {
        return Battle::with('brigades')->get();
    }

    public function getBattleById($id)
    {
        return Battle::with('brigades')->findOrFail($id);
    }
}