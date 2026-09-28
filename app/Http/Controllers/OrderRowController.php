<?php

namespace App\Http\Controllers;

use App\Providers\OrderRows\Index;

class OrderRowController extends Controller
{
    public function index()
    {
        $index = new Index();

        return $index->index();
    }
}