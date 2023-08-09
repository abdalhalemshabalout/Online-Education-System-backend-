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
                'name'              => 'Finn',
                'surname'           => 'Student',
                'phone_number'      => '+49 1535 8021125',
                'email'             => 'finn@student.com',
                'password'          =>  Hash::make('123456'),
                'identity_number'   => '23122233366',
                'gender'            => 'male',
                'birth_date'        => '1992-01-01',
                'address'           => 'Germany',
                'is_active'         => true
            ],
            [
                'class_room_id'     => 1,
                'branch_id'         => 1,
                'name'              => 'Elias',
                'surname'           => 'Student',
                'phone_number'      => '+49 1565 8021126',
                'email'             => 'elians@student.com',
                'password'          =>  Hash::make('123456'),
                'identity_number'   => '54122233355',
                'gender'            => 'male',
                'birth_date'        => '1995-01-01',
                'address'           => 'Germany',
                'is_active'         => true
            ],
            [
                'class_room_id'     => 1,
                'branch_id'         => 1,
                'name'              => 'Emilia',
                'surname'           => 'Student',
                'phone_number'      => '+49 1522 8021123',
                'email'             => 'emilia@student.com',
                'password'          =>  Hash::make('123456'),
                'identity_number'   => '67122233344',
                'gender'            => 'female',
                'birth_date'        => '1997-01-01',
                'address'           => 'Germany',
                'is_active'         => true
            ],
            [
                'class_room_id'     => 1,
                'branch_id'         => 1,
                'name'              => 'Matteo',
                'surname'           => 'Student',
                'phone_number'      => '+49 1135 8021124',
                'email'             => 'matteo@student.com',
                'password'          =>  Hash::make('123456'),
                'identity_number'   => '70122233377',
                'gender'            => 'male',
                'birth_date'        => '1990-01-01',
                'address'           => 'Germany',
                'is_active'         => true
            ],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
