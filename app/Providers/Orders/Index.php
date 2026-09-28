<?php

namespace App\Providers\Orders;

use App\Models\Order;
use App\Models\User;

class Index
{
    public function index()
    {
        $orders = Order::with('user')
            ->withCount('orderRows')
            ->get();

        return view('orders.index', [
            'orders' => $orders,
            'users' => User::all(),
        ]);
    }
}
