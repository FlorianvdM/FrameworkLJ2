<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Providers\Products\Index;

class ProductController extends Controller
{
    public function index()
    {
        $index = new Index();

        return $index->index();
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}