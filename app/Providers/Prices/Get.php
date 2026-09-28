<?php

namespace App\Providers\Prices;

use App\Models\Price;
use App\Models\Product;

class Get
{
    public function get(int $id)
    {
        $price = Price::findOrFail($id);

        return view('prices.get', [
            'price' => $price,
            'products' => Product::all(),
        ]);
    }
}
