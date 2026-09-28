<?php

namespace App\Providers\Orders;

use App\Models\Order;
use App\Models\User;

class Get
{
    public function get(int $id)
    {
        $order = Order::findOrFail($id);

        return view('orders.get', [
            'order' => $order,
            'users' => User::all(),
        ]);
    }
}
