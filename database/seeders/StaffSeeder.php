<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        Staff::create([
            'name'              => 'Elias',
            'surname'           => 'Staff',
            'phone_number'      => '+49 1575 8021122',
            'email'             => 'elias@staff.com',
            'password'          =>  Hash::make('123456'),
            'address'           => 'Germany',
            'is_active'         => true
        ]);
    }
}
