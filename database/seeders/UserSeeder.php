<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // //
        // $admin = User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@fmail.com',
        //     'password' => 'admin',
        //     'role' => 'admin',
        // ]);

        // $adminRole = Role::where('name', 'admin')->first();
        // $admin->assignRole($adminRole);
    }
}
