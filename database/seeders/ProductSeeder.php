<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $bags = Category::where('name', 'Сумки')->first();
        Product::create([
            'category_id' => $bags->id,
            'name' => 'Тактична сумка через плече',
            'description' => 'Зручна сумка з системою MOLLE для повсякденного носіння.',
            'price' => 2500.00,
            'image' => 'images/ford_bag.png'
        ]);

        $patches = Category::where('name', 'Патчі')->first();
        Product::create([
            'category_id' => $patches->id,
            'name' => 'Патч "Азов.One"',
            'description' => 'Відображає підтримку підрозділу Azov, разом із спільнотою Azov One.',
            'price' => 600.00,
            'image' => 'images/patch_azov_one.png'
        ]);

        $pins = Category::where('name', 'Піни')->first();
        Product::create([
            'category_id' => $pins->id,
            'name' => 'Набір піни "Азов.One"',
            'description' => 'Набір з 5 пінів, що символізують різні аспекти підрозділу Azov та спільноти Azov One.',
            'price' => 900.00,
            'image' => 'images/pins.png'
        ]);

        Product::factory()->count(2)->create();
    }
}
