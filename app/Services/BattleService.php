<?php
namespace App\Services;

use App\Repositories\BattleRepository;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Battle;

class BattleService
{
    protected $battleRepository;

    public function __construct(BattleRepository $battleRepository)
    {
        $this->battleRepository = $battleRepository;
    }

    public function getAllBattles() : Collection
    {
        return $this->battleRepository->getAllBattles();
    }

    public function getBattleById(int $id) : Battle
    {
        return $this->battleRepository->getBattleById($id);
    }
}