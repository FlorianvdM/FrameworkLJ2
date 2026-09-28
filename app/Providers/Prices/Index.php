<?php

namespace App\Providers\Prices;

use App\Models\Price;
use App\Models\Product;

class Index
{
    public function index()
    {
        $prices = Price::with('product')->get();

        return view('prices.index', [
            'prices' => $prices,
            'products' => Product::all(),
        ]);
    }
}
