<?php

namespace App\Providers\Roles;

use App\Models\Role;

class Index
{
    public function index()
    {
        $roles = Role::withCount('users')->get();

        return view('roles.index', compact('roles'));
    }
}
