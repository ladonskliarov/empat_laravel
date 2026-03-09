<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrigadeController;
use App\Http\Controllers\BattleController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', [FormationController::class, 'index'])->name('formations.index');

Route::get('/brigades', [BrigadeController::class, 'index'])->name('brigades.index');
Route::get('/brigades/{id}', [BrigadeController::class, 'show'])->name('brigades.show');

Route::get('/battles', [BattleController::class, 'index'])->name('battles.index');
Route::get('/battles/{id}', [BattleController::class, 'show'])->name('battles.show');

Route::get('/formations', [FormationController::class, 'index'])->name('formations.index');

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/registration', [AuthController::class, 'showRegistration'])->name('auth.registration');
    Route::post('/registration', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::post('/account/logout', [AccountController::class, 'logout'])->name('account.logout');
});
