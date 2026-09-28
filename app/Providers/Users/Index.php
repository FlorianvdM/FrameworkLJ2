<?php

namespace App\Providers\Users;

use App\Models\Role;
use App\Models\User;

class Index
{
    public function index()
    {
        $users = User::with('role')
            ->withCount(['reviews', 'orders'])
            ->get();

        return view('users.index', [
            'users' => $users,
            'roles' => Role::all(),
        ]);
    }
}
