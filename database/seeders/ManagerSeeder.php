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
            'name'              => 'Matteo',
            'surname'           => 'Manager',
            'phone_number'      => '+49 1575 8021121',
            'email'             => 'matteo@manager.com',
            'password'          =>  Hash::make('123456'),
            'address'           => 'Germany',
            'is_active'         => true
        ]);
    }
}
