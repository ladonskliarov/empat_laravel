<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Models\Product;
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
}