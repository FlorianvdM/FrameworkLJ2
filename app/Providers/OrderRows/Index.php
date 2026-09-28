<?php

namespace App\Providers\OrderRows;

use App\Models\Order;
use App\Models\OrderRow;
use App\Models\Product;

class Index
{
    public function index()
    {
        $orderRows = OrderRow::with(['order', 'product'])->get();

        return view('orderrows.index', [
            'orderRows' => $orderRows,
            'orders' => Order::all(),
            'products' => Product::all(),
        ]);
    }
}
