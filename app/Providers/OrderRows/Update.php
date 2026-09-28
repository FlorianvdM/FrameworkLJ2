<?php

namespace App\Providers\OrderRows;

use App\Models\OrderRow;
use Illuminate\Http\Request;

class Update
{
    public function update(Request $request, int $id)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
        ]);

        $orderRow = OrderRow::findOrFail($id);

        try {
            $orderRow->order_id = $request->order_id;
            $orderRow->product_id = $request->product_id;
            $orderRow->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Orderregel kon niet worden bijgewerkt.');
        }

        return redirect()
            ->route('orderrows.get', $orderRow->id)
            ->with('success', 'Orderregel bijgewerkt.');
    }
}
