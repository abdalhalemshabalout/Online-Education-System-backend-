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
                'email'        => 'matteo@manager.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
            // Staff user
            [
                'role_id'      => 2,
                'user_id'      => 202020,
                'email'        => 'elias@staff.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
            // Teacher user
            [
                'role_id'      => 3,
                'user_id'      => 303030,
                'email'        => 'emilia@teacher.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
            [
                'role_id'      => 3,
                'user_id'      => 303031,
                'email'        => 'elians@teacher.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
            [
                'role_id'      => 3,
                'user_id'      => 303032,
                'email'        => 'finn@teacher.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
            [
                'role_id'      => 3,
                'user_id'      => 303033,
                'email'        => 'matteo@teacher.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
            // Student user
            [
                'role_id'      => 4,
                'user_id'      => 404040,
                'email'        => 'finn@student.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
            [
                'role_id'      => 4,
                'user_id'      => 404041,
                'email'        => 'elians@student.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
            [
                'role_id'      => 4,
                'user_id'      => 404042,
                'email'        => 'emilia@student.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
            [
                'role_id'      => 4,
                'user_id'      => 404043,
                'email'        => 'matteo@student.com',
                'password'     => Hash::make('123456'),
                'is_active'    => true
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
