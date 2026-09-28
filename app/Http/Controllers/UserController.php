<?php

namespace App\Http\Controllers;

use App\Providers\Users\Get;
use App\Providers\Users\Index;
use App\Providers\Users\Update;
use Illuminate\Http\Request;

class UserController extends Controller
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