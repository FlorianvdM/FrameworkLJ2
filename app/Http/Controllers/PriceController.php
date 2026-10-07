<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\ControllerInterface;
use App\Providers\Prices\Create;
use App\Providers\Prices\Delete;
use App\Providers\Prices\Get;
use App\Providers\Prices\Index;
use App\Providers\Prices\Update;
use Illuminate\Http\Request;

class PriceController extends Controller implements ControllerInterface
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
