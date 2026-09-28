<?php

namespace App\Providers\Prices;

use App\Models\Price;

class Delete
{
    public function delete(int $id)
    {
        $price = Price::findOrFail($id);

        if (! $price->canDelete()) {
            return redirect()
                ->route('prices.index')
                ->with('error', 'Prijs kan niet worden verwijderd.');
        }

        try {
            $price->delete();
        } catch (\Exception $exception) {
            return redirect()
                ->route('prices.index')
                ->with('error', 'Prijs kon niet worden verwijderd.');
        }

        return redirect()
            ->route('prices.index')
            ->with('success', 'Prijs verwijderd.');
    }
}
