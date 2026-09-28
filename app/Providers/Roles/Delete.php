<?php

namespace App\Providers\Roles;

use App\Models\Role;

class Delete
{
    public function delete(int $id)
    {
        $role = Role::findOrFail($id);

        if (! $role->canDelete()) {
            return redirect()
                ->route('roles.index')
                ->with('error', 'Rol kan niet worden verwijderd omdat er nog gebruikers aan gekoppeld zijn.');
        }

        try {
            $role->delete();
        } catch (\Exception $exception) {
            return redirect()
                ->route('roles.index')
                ->with('error', 'Rol kon niet worden verwijderd.');
        }

        return redirect()
            ->route('roles.index')
            ->with('success', 'Rol verwijderd.');
    }
}
