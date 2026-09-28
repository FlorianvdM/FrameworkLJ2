<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $hardware = Category::where('name', 'Hardware')->first();
        $accessories = Category::where('name', 'Accessories')->first();

        Product::create([
            'name' => 'Game Console',
            'description' => 'Een krachtige spelcomputer.',
            'category_id' => $hardware->id,
        ]);

        Product::create([
            'name' => 'Controller',
            'description' => 'Een draadloze controller.',
            'category_id' => $accessories->id,
        ]);
    }
}