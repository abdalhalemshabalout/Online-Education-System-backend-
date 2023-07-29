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
                'name'              => 'Teacher',
                'surname'           => 'Teacher',
                'phone_number'      => '11122233344',
                'email'             => 'teacher@school.com',
                'password'          =>  Hash::make('123456'),
                'identity_number'   => '1112223334',
                'gender'            => 'male',
                'birth_date'        => '1999-01-01',
                'address'           => 'Germany',
                'is_active'         => true
            ],
            [
                'class_room_id'     => 1,
                'branch_id'         => 2,
                'name'              => 'Teacher 2',
                'surname'           => 'Teacher 2',
                'phone_number'      => '11122233311',
                'email'             => 'teacher2@school.com',
                'password'          =>  Hash::make('123456'),
                'identity_number'   => '1112223331',
                'gender'            => 'male',
                'birth_date'        => '1999-01-01',
                'address'           => 'Germany',
                'is_active'         => true
            ],
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
