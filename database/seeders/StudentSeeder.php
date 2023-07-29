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
        $students = [
            [
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
            ],
            [
                'class_room_id'     => 1,
                'branch_id'         => 2,
                'name'              => 'Student 2',
                'surname'           => 'Student 2',
                'phone_number'      => '22233344422',
                'email'             => 'student2@school.com',
                'password'          =>  Hash::make('123456'),
                'identity_number'   => '2223334442',
                'gender'            => 'male',
                'birth_date'        => '2009-01-01',
                'address'           => 'Germany',
                'is_active'         => true
            ],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
