<?php

namespace App\Providers\Reviews;

use App\Models\Review;
use Illuminate\Http\Request;

class Update
{
    public function update(Request $request, int $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
            'comment' => 'required|string',
        ]);

        $review = Review::findOrFail($id);

        try {
            $review->product_id = $request->product_id;
            $review->user_id = $request->user_id;
            $review->comment = $request->comment;
            $review->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Review kon niet worden bijgewerkt.');
        }

        return redirect()
            ->route('reviews.get', $review->id)
            ->with('success', 'Review bijgewerkt.');
    }
}
