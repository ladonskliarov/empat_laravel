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

    public function getProductById(int $id) : Product
    {
        return Product::findOrFail($id);
    }

    public function createProduct(array $data) : Product
    {
        return Product::create($data);
    }

    public function updateProduct(int $id, array $data) : Product
    {
        $product = Product::findOrFail($id);
        $product->update($data);
        return $product;
    }

    public function getAllCategories() : Collection
    {
        return Category::all();
    }

    public function createCategory(array $data) : Category
    {
        return Category::create($data);
    }

    public function updateCategory(int $id, array $data) : Category
    {
        $category = Category::findOrFail($id);
        $category->update($data);
        return $category;
    }
}