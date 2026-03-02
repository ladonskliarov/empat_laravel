<?php
namespace App\Services;

use App\Repositories\BattleRepository;

class BattleService
{
    protected $battleRepository;

    public function __construct(BattleRepository $battleRepository)
    {
        $this->battleRepository = $battleRepository;
    }

    public function getAllBattles()
    {
        return $this->battleRepository->getAllBattles();
    }

    public function getBattleById($id)
    {
        return $this->battleRepository->getBattleById($id);
    }
}