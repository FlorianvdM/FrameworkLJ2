<?php

namespace App\Http\Controllers;

use App\Providers\Reviews\Index;

class ReviewController extends Controller
{
    public function index()
    {
        $index = new Index();

        return $index->index();
    }
}