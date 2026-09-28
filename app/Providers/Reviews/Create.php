<?php

namespace App\Providers\Reviews;

use App\Models\Review;
use Illuminate\Http\Request;

class Create
{
    public function create(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
            'comment' => 'required|string',
        ]);

        try {
            $review = new Review;
            $review->product_id = $request->product_id;
            $review->user_id = $request->user_id;
            $review->comment = $request->comment;
            $review->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Review kon niet worden aangemaakt.');
        }

        return redirect()
            ->route('reviews.index')
            ->with('success', 'Review aangemaakt.');
    }
}
