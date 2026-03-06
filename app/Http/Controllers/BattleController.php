<?php

namespace App\Http\Controllers;

use App\Services\BattleService;

class BattleController extends Controller
{
    protected BattleService $battleService;

    public function __construct(BattleService $battleService)
    {
        $this->battleService = $battleService;
    }

    public function index()
    {
        $battles = $this->battleService->getAllBattles();
        return view('battles.index', [
            'battles' => $battles
        ]);
    }

    public function show($id)
    {
        $battle = $this->battleService->getBattleById($id);
        return view('battles.show', ['battle' => $battle]);
    }
}
