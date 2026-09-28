<?php

namespace App\Providers\Orders;

use App\Models\Order;

class Index
{
    public function index()
    {
        $orders = Order::with('user')->get();

        return view('orders.index', compact('orders'));
    }
}