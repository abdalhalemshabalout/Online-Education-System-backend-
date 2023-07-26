<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Illuminate\Database\Seeder;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $class_rooms = [
            [
                'id'     =>  1,
                'name'   => 'First',
            ],
            [
                'id'     =>  2,
                'name'   => 'Second',
            ],
            [
                'id'     =>  3,
                'name'   => 'Third',
            ],
            [
                'id'     =>  4,
                'name'   => 'Fourth',
            ],
            [
                'id'     =>  5,
                'name'   => 'Fifth',
            ],
            [
                'id'     =>  6,
                'name'   => 'Sixth',
            ],
            [
                'id'     =>  7,
                'name'   => 'Seventh',
            ],
            [
                'id'     =>  8,
                'name'   => 'Eighth',
            ],
            [
                'id'     =>  9,
                'name'   => 'Ninth',
            ],
            [
                'id'     =>  10,
                'name'   => 'Tenth',
            ],
            [
                'id'     =>  11,
                'name'   => 'Eleventh',
            ],
            [
                'id'     =>  12,
                'name'   => 'Twelveth',
            ],   
        ];

        foreach ($class_rooms as $class_room) {
            ClassRoom::create($class_room);
        }
    }
}
