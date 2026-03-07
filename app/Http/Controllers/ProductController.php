<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index(Request $request)
    {
        $categoryId = $request->query('category');

        $products = $categoryId 
            ? $this->productService->getProductsByCategory($categoryId)
            : $this->productService->getAllProducts();

        $categories = $this->productService->getCategories();

        return view('products.index', compact('products', 'categories'));
    }
}

