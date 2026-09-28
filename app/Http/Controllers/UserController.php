<?php

namespace App\Http\Controllers;

use App\Providers\Users\Index;

class UserController extends Controller
{
    public function index()
    {
        $index = new Index();

        return $index->index();
    }
}