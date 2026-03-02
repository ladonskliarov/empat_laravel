<?php

use App\Http\Controllers\FormationController;
use App\Http\Controllers\BrigadeController;
use App\Http\Controllers\BattleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormationController::class, 'index'])->name('formations.index');

Route::get('/brigades', [BrigadeController::class, 'index'])->name('brigades.index');
Route::get('/brigades/{id}', [BrigadeController::class, 'show'])->name('brigades.show');

Route::get('/battles', [BattleController::class, 'index'])->name('battles.index');
Route::get('/battles/{id}', [BattleController::class, 'show'])->name('battles.show');
