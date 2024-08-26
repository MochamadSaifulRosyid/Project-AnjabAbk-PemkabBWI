<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin user
        User::create([
            'user_id' => '111',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'Super Admin',
            'username' => 'Super Admin'
        ]);

        // Create admin SKPD user
        User::create([
            'user_id' => '222',
            'email' => 'adminskpd@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'Admin Skpd',
            'username' => 'Admin SKPD'
        ]);
    }
}