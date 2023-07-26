<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branchs = [
            [
                'class_room_id'        =>  1,
                'name'   =>             'First',
            ],
            [
                'class_room_id'        =>  1,
                'name'   =>             'Second',
            ],
            [
                'class_room_id'        =>  1,
                'name'   =>             'Third',
            ],
            [
                'class_room_id'        =>  1,
                'name'   =>             'Fourth',
            ],
            [
                'class_room_id'        =>  2,
                'name'   =>             'First',
            ],
            [
                'class_room_id'        =>  2,
                'name'   =>             'Second',
            ],
            [
                'class_room_id'        =>  2,
                'name'   =>             'Third',
            ],
            [
                'class_room_id'        =>  2,
                'name'   =>             'Fourth',
            ],
            [
                'class_room_id'        =>  3,
                'name'   =>             'First',
            ],
            [
                'class_room_id'        =>  3,
                'name'   =>             'Second',
            ],
            [
                'class_room_id'        =>  3,
                'name'   =>             'Third',
            ],
            [
                'class_room_id'        =>  3,
                'name'   =>             'Fourth',
            ],
            [
                'class_room_id'        =>  4,
                'name'   =>             'First',
            ],
            [
                'class_room_id'        =>  4,
                'name'   =>             'Second',
            ],
            [
                'class_room_id'        =>  4,
                'name'   =>             'Third',
            ],
            [
                'class_room_id'        =>  5,
                'name'   =>             'Fourth',
            ],
            [
                'class_room_id'        =>  5,
                'name'   =>             'First',
            ],
            [
                'class_room_id'        =>  5,
                'name'   =>             'Second',
            ],
            [
                'class_room_id'        =>  5,
                'name'   =>             'Third',
            ],
            [
                'class_room_id'        =>  5,
                'name'   =>             'Fourth',
            ],
            [
                'class_room_id'        =>  6,
                'name'   =>             'First',
            ],
            [
                'class_room_id'        =>  6,
                'name'   =>             'Second',
            ],
            [
                'class_room_id'        =>  6,
                'name'   =>             'Third',
            ],
            [
                'class_room_id'        =>  6,
                'name'   =>             'Fourth',
            ],
            [
                'class_room_id'        =>  7,
                'name'   =>             'First',
            ],
            [
                'class_room_id'        =>  7,
                'name'   =>             'Second',
            ],
            [
                'class_room_id'        =>  7,
                'name'   =>             'Third',
            ],
            [
                'class_room_id'        =>  7,
                'name'   =>             'Fourth',
            ],
            [
                'class_room_id'        =>  8,
                'name'   =>             'First',
            ],
            [
                'class_room_id'        =>  8,
                'name'   =>             'Second',
            ],
            [
                'class_room_id'        =>  8,
                'name'   =>             'Third',
            ],
            [
                'class_room_id'        =>  8,
                'name'   =>             'Fourth',
            ],
               [
                'class_room_id'        =>  9,
                'name'   =>             'First',
            ],
            [
                'class_room_id'        =>  9,
                'name'   =>             'Second',
            ],
            [
                'class_room_id'        =>  9,
                'name'   =>             'Third',
            ],
            [
                'class_room_id'        =>  9,
                'name'   =>             'Fourth',
            ],
            [
                'class_room_id'        =>  10,
                'name'   =>             'First',
            ],
            [
                'class_room_id'        =>  10,
                'name'   =>             'Second',
            ],
            [
                'class_room_id'        =>  10,
                'name'   =>             'Third',
            ],
            [
                'class_room_id'        =>  10,
                'name'   =>             'Fourth',
            ],
            [
                'class_room_id'        =>  11,
                'name'   =>             'First',
            ],
            [
                'class_room_id'        =>  11,
                'name'   =>             'Second',
            ],
            [
                'class_room_id'        =>  11,
                'name'   =>             'Third',
            ],
            [
                'class_room_id'        =>  11,
                'name'   =>             'Fourth',
            ],
            [
                'class_room_id'        =>  12,
                'name'   =>             'First',
            ],
            [
                'class_room_id'        =>  12,
                'name'   =>             'Second',
            ],
            [
                'class_room_id'        =>  12,
                'name'   =>             'Third',
            ],
            [
                'class_room_id'        =>  12,
                'name'   =>             'Fourth',
            ],

           
        ];

        foreach ($branchs as $branch) {
            Branch::create($branch);
        }
    }
}
