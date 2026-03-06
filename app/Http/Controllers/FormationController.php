<?php

namespace App\Http\Controllers;

use App\Services\FormationService;

class FormationController extends Controller
{
    protected FormationService $formationService;

    public function __construct(FormationService $formationService)
    {
        $this->formationService = $formationService;
    }

    public function index() {
        $formations = $this->formationService->getAllFormations();
        return view('formations.index', [
            'formations' => $formations
        ]);
    }
}
