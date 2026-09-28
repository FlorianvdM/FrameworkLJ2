<?php

namespace App\Providers\Products;

use App\Models\Category;
use App\Models\Product;

class Index
{
    public function index()
    {
        $products = Product::with('category')
            ->withCount(['reviews', 'prices', 'orderRows'])
            ->get();

        return view('products.index', [
            'products' => $products,
            'categories' => Category::all(),
        ]);
    }
}
