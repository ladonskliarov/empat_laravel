<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ProductService
{
    protected ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getCategories() : Collection
    {
        return $this->productRepository->getCategories();
    }

    public function getAllProducts() : Collection
    {
        return $this->productRepository->getAllProducts();
    }

    public function getProductsByCategory(int $id) : Collection
    {
        return $this->productRepository->getProductsByCategory($id);
    }

    public function getProductById(int $id) : Product
    {
        return $this->productRepository->getProductById($id);
    }

    public function createProduct(Request $request) : Product
    {
        return $this->productRepository->createProduct($request);
    }
    
    public function updateProduct(Request $request, int $id) : Product
    {
        return $this->productRepository->updateProduct($request, $id);
    }

    public function getAllCategories() : Collection
    {
        return $this->productRepository->getCategories();
    }

    public function createCategory(Request $request) : Category
    {
        return $this->productRepository->createCategory($request);
    }

    public function updateCategory(Request $request, int $id) : Category
    {
        return $this->productRepository->updateCategory($request, $id);
    }
}