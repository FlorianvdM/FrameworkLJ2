<?php

namespace App\Http\Controllers;

use App\Providers\OrderRows\Create;
use App\Providers\OrderRows\Delete;
use App\Providers\OrderRows\Get;
use App\Providers\OrderRows\Index;
use App\Providers\OrderRows\Update;
use Illuminate\Http\Request;

class OrderRowController extends Controller
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
