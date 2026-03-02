<?php
namespace App\Repositories;

use App\Models\Brigade;

class BrigadeRepository
{
    public function getAllBrigades()
    {
        return Brigade::with('battles', 'formation')->get();
    }

    public function getBrigadeById($id)
    {
        return Brigade::with('battles', 'formation')->findOrFail($id);
    }
}
