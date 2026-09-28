<?php

namespace App\Http\Controllers;

use App\Providers\Orders\Index;

class OrderController extends Controller
{
    public function index()
    {
        $index = new Index();

        return $index->index();
    }
}