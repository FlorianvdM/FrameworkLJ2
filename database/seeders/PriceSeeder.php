<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Product;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run(): void
    {
        $console = Product::where('name', 'Game Console')->first();
        $controller = Product::where('name', 'Controller')->first();

        Price::create([
            'price' => 499.99,
            'effdate' => now(),
            'product_id' => $console->id,
        ]);

        Price::create([
            'price' => 59.99,
            'effdate' => now(),
            'product_id' => $controller->id,
        ]);
    }
}