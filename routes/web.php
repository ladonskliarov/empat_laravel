<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome.index');
})->name('welcome.index');

Route::get('/notes', [NotesController::class, 'index'])->name('notes.index');
Route::get('/notes/{note}', [NotesController::class, 'show'])->name('notes.show');
Route::post('/notes', [NotesController::class, 'store'])->name('notes.store');
Route::get('/notes/create', [NotesController::class, 'create'])->name('notes.create');
Route::get('/notes/{note}/edit', [NotesController::class, 'edit'])->name('notes.edit');
Route::put('/notes/{note}', [NotesController::class, 'update'])->name('notes.update');
Route::delete('/notes/{note}', [NotesController::class, 'destroy'])->name('notes.destroy');
