<?php

namespace App\Providers\Prices;

use App\Models\Price;

class Index
{
    public function index()
    {
        $prices = Price::with('product')->get();

        return view('prices.index', compact('prices'));
    }
}