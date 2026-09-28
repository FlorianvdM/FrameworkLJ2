<?php

namespace App\Providers\OrderRows;

use App\Models\OrderRow;
use Illuminate\Http\Request;

class Create
{
    public function create(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
        ]);

        try {
            $orderRow = new OrderRow;
            $orderRow->order_id = $request->order_id;
            $orderRow->product_id = $request->product_id;
            $orderRow->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Orderregel kon niet worden aangemaakt.');
        }

        return redirect()
            ->route('orderrows.index')
            ->with('success', 'Orderregel aangemaakt.');
    }
}
