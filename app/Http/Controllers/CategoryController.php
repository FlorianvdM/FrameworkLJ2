<?php

namespace App\Http\Controllers;

use App\Providers\Categories\Get;
use App\Providers\Categories\Index;
use App\Providers\Categories\Update;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $index = new Index();

        return $index->index();
    }

    public function get(int $id)
    {
        $get = new Get();

        return $get->get($id);
    }

    public function update(Request $request, int $id)
    {
        $update = new Update();

        return $update->update($request, $id);
    }
}