<?php

namespace App\Http\Controllers;

use App\Services\BrigadeService;

class BrigadeController extends Controller
{
    protected BrigadeService $service;

    public function __construct(BrigadeService $service)
    {
        $this->service = $service;
    }

    public function index() {
        $brigades = $this->service->getAllBrigades();
        return view('brigades.index', [
            'brigades' => $brigades
        ]);
    }

    public function show($id) {
        $brigade = $this->service->getBrigadeById($id);
        return view('brigades.show', ['brigade' => $brigade]);
    }
}
