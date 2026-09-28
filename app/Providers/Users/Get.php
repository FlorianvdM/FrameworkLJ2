<?php

namespace App\Providers\Users;

use App\Models\Role;
use App\Models\User;
use Illuminate\Validation\Rule;

class Get
{
    public function get(int $id)
    {
        $user = User::findOrFail($id);

        return view('users.get', [
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }
}
