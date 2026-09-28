<?php

namespace App\Http\Controllers;

use App\Providers\Orders\Create;
use App\Providers\Orders\Delete;
use App\Providers\Orders\Get;
use App\Providers\Orders\Index;
use App\Providers\Orders\Update;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $index = new Index;

        return $index->index();
    }

    public function get(int $id)
    {
        $get = new Get;

        return $get->get($id);
    }

    public function update(Request $request, int $id)
    {
        $update = new Update;

        return $update->update($request, $id);
    }

    public function create(Request $request)
    {
        $create = new Create;

        return $create->create($request);
    }

    public function delete(int $id)
    {
        $delete = new Delete;

        return $delete->delete($id);
    }
}
