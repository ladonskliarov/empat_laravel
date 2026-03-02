<?php

namespace App\Http\Controllers;

use App\Services\FormationService;

class FormationController extends Controller
{
    protected FormationService $service;

    public function __construct(FormationService $service)
    {
        $this->service = $service;
    }

    public function index() {
        $formations = $this->service->getAllFormations();
        return view('formations.index', [
            'formations' => $formations
        ]);
    }
}
