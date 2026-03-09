<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Administrator',
                'slug' => 'admin',
                'description' => 'Full system access with all permissions'
            ],
            [
                'name' => 'Manager',
                'slug' => 'manager',
                'description' => 'Can manage users and view reports'
            ],
            [
                'name' => 'User',
                'slug' => 'user',
                'description' => 'Standard user with limited access'
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}