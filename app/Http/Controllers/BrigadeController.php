<?php

namespace App\Http\Controllers;

use App\Services\BrigadeService;

class BrigadeController extends Controller
{
    protected BrigadeService $brigadeService;

    public function __construct(BrigadeService $brigadeService)
    {
        $this->brigadeService = $brigadeService;
    }

    public function index() {
        $brigades = $this->brigadeService->getAllBrigades();
        return view('brigades.index', [
            'brigades' => $brigades
        ]);
    }

    public function show(int $id) {
        $brigade = $this->brigadeService->getBrigadeById($id);
        return view('brigades.show', ['brigade' => $brigade]);
    }
}
