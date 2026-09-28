<?php

namespace App\Providers\Users;

use App\Models\User;

class Delete
{
    public function delete(int $id)
    {
        $user = User::findOrFail($id);

        if (! $user->canDelete()) {
            return redirect()
                ->route('users.index')
                ->with('error', 'Gebruiker kan niet worden verwijderd omdat er nog reviews of orders aan gekoppeld zijn.');
        }

        try {
            $user->delete();
        } catch (\Exception $exception) {
            return redirect()
                ->route('users.index')
                ->with('error', 'Gebruiker kon niet worden verwijderd.');
        }

        return redirect()
            ->route('users.index')
            ->with('success', 'Gebruiker verwijderd.');
    }
}
