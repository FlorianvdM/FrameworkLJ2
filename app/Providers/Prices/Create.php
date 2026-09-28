<?php

namespace App\Providers\Prices;

use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Carbon;

class Create
{
    public function create(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'price' => 'required|numeric|min:0',
            'effdate' => 'required|date',
        ]);

        try {
            $price = new Price;
            $price->product_id = $request->product_id;
            $price->price = $request->price;
            $price->effdate = Carbon::parse($request->effdate)->format('Y-m-d H:i:s');
            $price->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Prijs kon niet worden aangemaakt.');
        }

        return redirect()
            ->route('prices.index')
            ->with('success', 'Prijs aangemaakt.');
    }
}
