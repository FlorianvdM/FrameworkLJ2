<?php

namespace App\Providers\Reviews;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;

class Index
{
    public function index()
    {
        $reviews = Review::with(['user', 'product'])->get();

        return view('reviews.index', [
            'reviews' => $reviews,
            'products' => Product::all(),
            'users' => User::all(),
        ]);
    }
}
