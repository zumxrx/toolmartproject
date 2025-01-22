<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add specific admin account
        User::updateOrCreate(
            ['email' => 'admin@yahoo.com'], // Check by email to avoid duplicates
            [
                'name' => 'Admin User',
                'usertype' => 'admin',
                'phone' => '1234567890',
                'address' => 'Admin Address',
                'email_verified_at' => now(),
                'password' => bcrypt('123456789'), // Password
            ]
        );

        // Add specific user account
        User::updateOrCreate(
            ['email' => 'user@yahoo.com'], // Check by email to avoid duplicates
            [
                'name' => 'Regular User',
                'usertype' => 'user',
                'phone' => '0987654321',
                'address' => 'User Address',
                'email_verified_at' => now(),
                'password' => bcrypt('123456789'), // Password
            ]
        );
    }
}