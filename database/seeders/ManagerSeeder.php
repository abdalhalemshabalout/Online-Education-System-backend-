<?php

namespace Database\Seeders;

use App\Models\Manager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Manager::create([
            'name'              => 'Manager',
            'surname'           => 'Manager',
            'phone_number'      => '00011122233',
            'email'             => 'manager@school.com',
            'password'          =>  Hash::make('123456'),
            'address'           => 'Germany',
            'is_active'         => true
        ]);
    }
}
