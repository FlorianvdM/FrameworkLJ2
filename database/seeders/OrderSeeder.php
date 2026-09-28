<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderRow;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'klant@example.com')->first();
        $console = Product::where('name', 'Game Console')->first();
        $controller = Product::where('name', 'Controller')->first();

        $order = Order::create([
            'order_date' => now(),
            'status' => 1,
            'user_id' => $user->id,
        ]);

        OrderRow::create([
            'order_id' => $order->id,
            'product_id' => $console->id,
        ]);

        OrderRow::create([
            'order_id' => $order->id,
            'product_id' => $controller->id,
        ]);
    }
}