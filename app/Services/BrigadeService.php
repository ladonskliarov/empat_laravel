<?php
namespace App\Services;

use App\Repositories\BrigadeRepository;

class BrigadeService
{
    protected $brigadeRepository;

    public function __construct(BrigadeRepository $brigadeRepository)
    {
        $this->brigadeRepository = $brigadeRepository;
    }

    public function getAllBrigades()
    {
        return $this->brigadeRepository->getAllBrigades();
    }

    public function getBrigadeById($id)
    {
        return $this->brigadeRepository->getBrigadeById($id);
    }
}