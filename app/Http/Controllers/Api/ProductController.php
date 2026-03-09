<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Nette\Utils\Json;

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

        return response()->json($products, 200);
    }

    public function store(Request $request) : JsonResponse 
    {   
        $product = $this->productService->createProduct($request);
        return response()->json($product, 201);
    }

    public function update(Request $request, int $id) : JsonResponse
    {
        $product = $this->productService->getProductById($id);
        $product = $this->productService->updateProduct($request, $id);
        return response()->json($product, 200);
    }
}
