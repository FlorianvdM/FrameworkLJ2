<?php

namespace App\Providers\Categories;

use App\Models\Category;

class Get
{
    public function get(int $id)
    {
        $category = Category::with('products')->findOrFail($id);

        return view('categories.get', [
            'category' => $category,
        ]);
    }
}
