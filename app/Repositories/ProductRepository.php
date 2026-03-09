<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Category;
use Illuminate\Http\Request;

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

    public function createProduct(Request $request) : Product
    {
        $validatedData = $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'name' => 'required|string|max:255|unique:products,name',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|string',
        ]);
        return Product::create($validatedData);
    }

    public function updateProduct(Request $request, int $id) : Product
    {
        $validatedData = $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'name' => 'required|string|max:255|unique:products,name,' . $id,
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);
        return $product;
    }

    public function getAllCategories() : Collection
    {
        return Category::all();
    }

    public function createCategory(Request $request) : Category
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        return Category::create($validatedData);
    }

    public function updateCategory(Request $request, int $id) : Category
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        $category = Category::findOrFail($id);
        $category->update($validatedData);
        return $category;
    }
}