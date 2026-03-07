<?php
namespace App\Services;

use App\Repositories\BrigadeRepository;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Brigade;

class BrigadeService
{
    protected $brigadeRepository;

    public function __construct(BrigadeRepository $brigadeRepository)
    {
        $this->brigadeRepository = $brigadeRepository;
    }

    public function getAllBrigades() : Collection
    {
        return $this->brigadeRepository->getAllBrigades();
    }

    public function getBrigadeById(int $id) : Brigade
    {
        return $this->brigadeRepository->getBrigadeById($id);
    }
}