<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

     public function index(int $id) : JsonResponse
    {
        $products = $id 
            ? $this->productService->getProductsByCategory($id)
            : $this->productService->getAllProducts();

        return response()->json($products);
    }
}
