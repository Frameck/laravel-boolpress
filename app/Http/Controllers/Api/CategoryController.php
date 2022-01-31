<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CategoryController extends Controller
{
    function index()
    {
        $categories = Category::orderBy('name')->get();
        return response()->json($categories);
    }

    function show($category_id)
    {
        $category = Category::where('id', $category_id)
                        ->with(['posts', 'posts.category', 'posts.tags'])
                        ->first();

        if (!$category) {
            throw new HttpException('Post not found');
        }

        return response()->json($category);
    }
}
