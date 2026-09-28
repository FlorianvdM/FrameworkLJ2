<?php

namespace App\Providers\OrderRows;

use App\Models\OrderRow;

class Index
{
    public function index()
    {
        $orderRows = OrderRow::with(['order', 'product'])->get();

        return view('orderrows.index', compact('orderRows'));
    }
}