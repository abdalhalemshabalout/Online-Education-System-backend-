<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            // Manager user
            [
                'role_id'      => 1,
                'user_id'      => 101010,
                'email'        => 'manager@school.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
            // Teacher user
            [
                'role_id'      => 2,
                'user_id'      => 202020,
                'email'        => 'teacher@school.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
            // Student user
            [
                'role_id'      => 3,
                'user_id'      => 303030,
                'email'        => 'student@school.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
