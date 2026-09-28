<?php

namespace App\Providers\Roles;

use App\Models\Role;

class Index
{
    public function index()
    {
        $roles = Role::all();

        return view('roles.index', compact('roles'));
    }
}