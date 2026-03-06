<?php
namespace App\Services;

use App\Repositories\FormationRepository;
use Illuminate\Database\Eloquent\Collection;

class FormationService
{
    protected $formationRepository;

    public function __construct(FormationRepository $formationRepository)
    {
        $this->formationRepository = $formationRepository;
    }

    public function getAllFormations() : Collection
    {
        return $this->formationRepository->getAllFormations();
    }
}