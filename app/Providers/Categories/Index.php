<?php

namespace App\Providers\Categories;

use App\Models\Category;

class Index
{
    public function index()
    {
        $categories = Category::withCount('products')->get();

        return view('categories.index', compact('categories'));
    }
}