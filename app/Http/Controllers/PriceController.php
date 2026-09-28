<?php

namespace App\Http\Controllers;

use App\Providers\Prices\Index;

class PriceController extends Controller
{
    public function index()
    {
        $index = new Index();

        return $index->index();
    }
}