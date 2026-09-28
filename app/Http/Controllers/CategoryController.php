<?php

namespace App\Http\Controllers;

use App\Providers\Categories\Index;

class CategoryController extends Controller
{
    public function index()
    {
        $index = new Index();

        return $index->index();
    }

    public function show(\App\Models\Category $category)
    {
        return view('categories.show', compact('category'));
    }
}