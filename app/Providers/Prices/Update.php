<?php

namespace App\Providers\Prices;

use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Carbon;

class Update
{
    public function update(Request $request, int $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'price' => 'required|numeric|min:0',
            'effdate' => 'required|date',
        ]);

        $price = Price::findOrFail($id);

        try {
            $price->product_id = $request->product_id;
            $price->price = $request->price;
            $price->effdate = Carbon::parse($request->effdate)->format('Y-m-d H:i:s');
            $price->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Prijs kon niet worden bijgewerkt.');
        }

        return redirect()
            ->route('prices.get', $price->id)
            ->with('success', 'Prijs bijgewerkt.');
    }
}
