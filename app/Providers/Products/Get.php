<?php

namespace App\Providers\Products;

use App\Models\Category;
use App\Models\Product;

class Get
{
    public function get(int $id)
    {
        $product = Product::findOrFail($id);

        return view('products.get', [
            'product' => $product,
            'categories' => Category::all(),
        ]);
    }
}
