<?php

namespace App\Providers\Reviews;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;

class Get
{
    public function get(int $id)
    {
        $review = Review::findOrFail($id);

        return view('reviews.get', [
            'review' => $review,
            'products' => Product::all(),
            'users' => User::all(),
        ]);
    }
}
