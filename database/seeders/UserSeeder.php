<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = Role::where('name', 'Admin')->first();
        $klant = Role::where('name', 'Klant')->first();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'password',
            'role_id' => $admin->id,
        ]);

        User::create([
            'name' => 'Test Klant',
            'email' => 'klant@example.com',
            'password' => 'password',
            'role_id' => $klant->id,
        ]);
    }
}