<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Symfony\Component\HttpFoundation\JsonResponse;

class CategoryController extends Controller
{
    public function index() : JsonResponse
    {
        $categories = Category::all();
        return response()->json($categories);
    }
}
