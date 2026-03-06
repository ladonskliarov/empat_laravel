<?php
namespace App\Repositories;

use App\Models\Brigade;
use Illuminate\Database\Eloquent\Collection;

class BrigadeRepository
{
    public function getAllBrigades() : Collection
    {
        return Brigade::with('battles', 'formation')->get();
    }

    public function getBrigadeById(int $id) : Brigade
    {
        return Brigade::with('battles', 'formation')->findOrFail($id);
    }
}
