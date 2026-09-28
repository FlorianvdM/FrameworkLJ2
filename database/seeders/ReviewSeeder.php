<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'klant@example.com')->first();
        $console = Product::where('name', 'Game Console')->first();

        Review::create([
            'comment' => 'Geweldige console, werkt perfect!',
            'user_id' => $user->id,
            'product_id' => $console->id,
        ]);
    }
}