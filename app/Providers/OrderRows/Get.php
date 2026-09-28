<?php

namespace App\Providers\OrderRows;

use App\Models\Order;
use App\Models\OrderRow;
use App\Models\Product;

class Get
{
    public function get(int $id)
    {
        $orderRow = OrderRow::findOrFail($id);

        return view('orderrows.get', [
            'orderRow' => $orderRow,
            'orders' => Order::all(),
            'products' => Product::all(),
        ]);
    }
}
