<?php
namespace App\Services;

use App\Repositories\FormationRepository;

class FormationService
{
    protected $formationRepository;

    public function __construct(FormationRepository $formationRepository)
    {
        $this->formationRepository = $formationRepository;
    }

    public function getAllFormations()
    {
        return $this->formationRepository->getAllFormations();
    }
}