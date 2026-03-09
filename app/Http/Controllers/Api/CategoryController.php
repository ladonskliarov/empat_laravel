<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Services\ProductService;

class CategoryController extends Controller
{   
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index() : JsonResponse
    {
        $categories = $this->productService->getAllCategories();
        return response()->json($categories, 200);
    }

    public function store(Request $request) : JsonResponse
    {
        $category = $this->productService->createCategory($request);
        return response()->json($category, 201);
    }

    public function update(Request $request, int $id) : JsonResponse
    {
        $category = $this->productService->updateCategory($request, $id);
        return response()->json($category, 200);
    }
}
