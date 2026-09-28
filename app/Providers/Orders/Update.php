<?php

namespace App\Providers\Orders;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Carbon;

class Update
{
    public function update(Request $request, int $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'order_date' => 'required|date',
            'status' => 'required|integer|min:0|max:255',
        ]);

        $order = Order::findOrFail($id);

        try {
            $order->user_id = $request->user_id;
            $order->order_date = Carbon::parse($request->order_date)->format('Y-m-d H:i:s');
            $order->status = $request->status;
            $order->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Order kon niet worden bijgewerkt.');
        }

        return redirect()
            ->route('orders.get', $order->id)
            ->with('success', 'Order bijgewerkt.');
    }
}
