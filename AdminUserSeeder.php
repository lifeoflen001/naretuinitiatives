<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'System Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'), // Change in production!
            'is_active' => true,
        ]);

        $adminRole = Role::where('slug', 'admin')->first();
        $admin->assignRole($adminRole);

        // Create sample manager
        $manager = User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('password123'),
            'is_active' => true,
        ]);
        $manager->assignRole('manager');

        // Create sample regular user
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password123'),
            'is_active' => true,
        ]);
        $user->assignRole('user');
    }
}