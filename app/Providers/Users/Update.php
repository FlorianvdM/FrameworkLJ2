<?php

namespace App\Providers\Users;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Update
{
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($id),
            ],
            'role_id' => 'nullable|exists:roles,id',
        ]);

        $user = User::findOrFail($id);

        try {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role_id = $request->role_id;
            $user->save();
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', 'Gebruiker kon niet worden bijgewerkt.');
        }

        return redirect()
            ->route('users.get', $user->id)
            ->with('success', 'Gebruiker bijgewerkt.');
    }
}
