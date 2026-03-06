<?php
namespace App\Repositories;

use App\Models\Battle;
use Illuminate\Database\Eloquent\Collection;

class BattleRepository
{
    public function getAllBattles() : Collection
    {
        return Battle::with('brigades')->get();
    }

    public function getBattleById(int $id) : Battle
    {
        return Battle::with('brigades')->findOrFail($id);
    }
}