<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the RoleSeeder first to create roles
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            EventSeeder::class,
        ]);

        // Then create the admin user and assign the 'admin' role
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => '123456789',
            'role' => 'admin'
        ]);

        // Find the 'admin' role and assign it to the admin user
        $adminRole = Role::where('name', 'Admin')->first();
        $admin->assignRole($adminRole);
    }
}
