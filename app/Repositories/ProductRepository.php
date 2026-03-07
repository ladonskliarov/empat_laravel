<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Category;

class ProductRepository
{
    public function getAllProducts() : Collection
    {
        return Product::all();
    }

    public function getCategories() : Collection {
        return Category::all();
    }

    public function getProductsByCategory(int $id) : Collection
    {
        return Product::where('category_id', $id)->get();
    }
}