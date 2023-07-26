<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'class_room_id'     => 1,
            'branch_id'         => 1,
            'name'              => 'Student',
            'surname'           => 'Student',
            'phone_number'      => '22233344455',
            'email'             => 'student@school.com',
            'password'          =>  Hash::make('123456'),
            'identity_number'   => '2223334445',
            'gender'            => 'male',
            'birth_date'        => '2009-01-01',
            'address'           => 'Germany',
            'is_active'         => true
        ]);
    }
}
