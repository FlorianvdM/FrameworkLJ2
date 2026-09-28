<?php

namespace App\Providers\Orders;

use App\Models\Order;

class Delete
{
    public function delete(int $id)
    {
        $order = Order::findOrFail($id);

        if (! $order->canDelete()) {
            return redirect()
                ->route('orders.index')
                ->with('error', 'Order kan niet worden verwijderd omdat er nog orderregels aan gekoppeld zijn.');
        }

        try {
            $order->delete();
        } catch (\Exception $exception) {
            return redirect()
                ->route('orders.index')
                ->with('error', 'Order kon niet worden verwijderd.');
        }

        return redirect()
            ->route('orders.index')
            ->with('success', 'Order verwijderd.');
    }
}
