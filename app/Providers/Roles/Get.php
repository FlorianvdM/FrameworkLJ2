<?php

namespace App\Providers\Roles;

use App\Models\Role;

class Get
{
    public function get(int $id)
    {
        $role = Role::findOrFail($id);

        return view('roles.get', [
            'role' => $role,
        ]);
    }
}
