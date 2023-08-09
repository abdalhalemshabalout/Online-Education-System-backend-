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
        $teachers = [
            [
                'class_room_id'     => 1,
                'branch_id'         => 1,
                'name'              => 'Emilia',
                'surname'           => 'Teacher',
                'phone_number'      => '+49 1575 8021123',
                'email'             => 'emilia@teacher.com',
                'password'          =>  Hash::make('123456'),
                'identity_number'   => '11122233344',
                'gender'            => 'female',
                'birth_date'        => '1997-01-01',
                'address'           => 'Germany',
                'is_active'         => true
            ],

            [
                'class_room_id'     => 2,
                'branch_id'         => 6,
                'name'              => 'Elias',
                'surname'           => 'Teacher',
                'phone_number'      => '+49 1575 8021126',
                'email'             => 'elians@teacher.com',
                'password'          =>  Hash::make('123456'),
                'identity_number'   => '11122233355',
                'gender'            => 'male',
                'birth_date'        => '1995-01-01',
                'address'           => 'Germany',
                'is_active'         => true
            ],
            [
                'class_room_id'     => 3,
                'branch_id'         => 9,
                'name'              => 'Finn',
                'surname'           => 'Teacher',
                'phone_number'      => '+49 1575 8021125',
                'email'             => 'finn@teacher.com',
                'password'          =>  Hash::make('123456'),
                'identity_number'   => '11122233366',
                'gender'            => 'male',
                'birth_date'        => '1992-01-01',
                'address'           => 'Germany',
                'is_active'         => true
            ],
            [
                'class_room_id'     => 1,
                'branch_id'         => 2,
                'name'              => 'Matteo',
                'surname'           => 'Teacher',
                'phone_number'      => '+49 1575 8021124',
                'email'             => 'matteo@teacher.com',
                'password'          =>  Hash::make('123456'),
                'identity_number'   => '11122233377',
                'gender'            => 'male',
                'birth_date'        => '1990-01-01',
                'address'           => 'Germany',
                'is_active'         => true
            ],
           
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
