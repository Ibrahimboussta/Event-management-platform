<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::create([
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);
        
        Role::create([
            'name' => 'Organisateur',
            'guard_name' => 'web',
        ]);
        
        Role::create([
            'name' => 'Attends',
            'guard_name' => 'web',
        ]);
    }
}
