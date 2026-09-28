<?php

namespace App\Providers\Users;

use App\Models\User;

class Index
{
    public function index()
    {
        $users = User::with('role')->get();

        return view('users.index', compact('users'));
    }
}