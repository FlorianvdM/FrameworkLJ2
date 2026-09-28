<?php

namespace App\Http\Controllers;

use App\Providers\Roles\Index;

class RoleController extends Controller
{
    public function index()
    {
        $index = new Index();

        return $index->index();
    }
}