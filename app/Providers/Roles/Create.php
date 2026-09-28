<?php

namespace App\Providers\Roles;

use App\Models\Role;
use Illuminate\Http\Request;

class Create
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
        ]);

        try {
            $role = new Role;
            $role->name = $request->name;
            $role->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Rol kon niet worden aangemaakt.');
        }

        return redirect()
            ->route('roles.index')
            ->with('success', 'Rol aangemaakt.');
    }
}
