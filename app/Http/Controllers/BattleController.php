<?php

namespace App\Http\Controllers;

use App\Services\BattleService;

class BattleController extends Controller
{
    protected BattleService $service;

    public function __construct(BattleService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $battles = $this->service->getAllBattles();
        return view('battles.index', [
            'battles' => $battles
        ]);
    }

    public function show($id)
    {
        $battle = $this->service->getBattleById($id);
        return view('battles.show', ['battle' => $battle]);
    }
}
