<?php

namespace App\Providers\Users;

use App\Models\User;
use Illuminate\Http\Request;

class Create
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role_id' => 'nullable|exists:roles,id',
        ]);

        try {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->role_id = $request->role_id;
            $user->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Gebruiker kon niet worden aangemaakt.');
        }

        return redirect()
            ->route('users.index')
            ->with('success', 'Gebruiker aangemaakt.');
    }
}
