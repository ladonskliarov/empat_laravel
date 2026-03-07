<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Сумки', 'Патчі', 'Піни'];

        foreach ($categories as $category) {
            Category::updateOrCreate(['name' => $category]);
        }

        Category::factory()->count(4)->create();
    }
}
