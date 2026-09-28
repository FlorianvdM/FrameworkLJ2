<?php

namespace App\Providers\Reviews;

use App\Models\Review;

class Delete
{
    public function delete(int $id)
    {
        $review = Review::findOrFail($id);

        if (! $review->canDelete()) {
            return redirect()
                ->route('reviews.index')
                ->with('error', 'Review kan niet worden verwijderd.');
        }

        try {
            $review->delete();
        } catch (\Exception $exception) {
            return redirect()
                ->route('reviews.index')
                ->with('error', 'Review kon niet worden verwijderd.');
        }

        return redirect()
            ->route('reviews.index')
            ->with('success', 'Review verwijderd.');
    }
}
