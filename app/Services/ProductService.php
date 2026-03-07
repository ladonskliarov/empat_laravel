<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Models\Product;
use App\Models\Category;
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

    public function createProduct(array $data) : Product
    {
        return $this->productRepository->createProduct($data);
    }
    
    public function updateProduct(int $id, array $data) : Product
    {
        return $this->productRepository->updateProduct($id, $data);
    }

    public function getAllCategories() : Collection
    {
        return $this->productRepository->getCategories();
    }

    public function createCategory(array $data) : Category
    {
        return $this->productRepository->createCategory($data);
    }

    public function updateCategory(int $id, array $data) : Category
    {
        return $this->productRepository->updateCategory($id, $data);
    }
}