<?php

namespace App\Providers\Roles;

use App\Models\Role;
use Illuminate\Http\Request;

class Update
{
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
        ]);

        $role = Role::findOrFail($id);

        try {
            $role->name = $request->name;
            $role->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Rol kon niet worden bijgewerkt.');
        }

        return redirect()
            ->route('roles.get', $role->id)
            ->with('success', 'Rol bijgewerkt.');
    }
}
