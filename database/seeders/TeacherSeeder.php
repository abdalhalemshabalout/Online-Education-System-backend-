<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'class_room_id'     => 1,
            'branch_id'         => 1,
            'name'              => 'Teacher',
            'surname'           => 'Teacher',
            'phone_number'      => '11122233344',
            'email'             => 'teacher@school.com',
            'password'          =>  Hash::make('123456'),
            'identity_number'   => '1112223334',
            'gender'            => 'male',
            'birth_date'        => '1999-01-01',
            'address'           => 'Germany',
            'is_active'         => 1
        ]);
    }
}
