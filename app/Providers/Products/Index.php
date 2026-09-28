<?php

namespace App\Providers\Products;

use App\Models\Product;

class Index
{
    public function index()
    {
        $products = Product::with('category')->get();

        return view('products.index', compact('products'));
    }
}