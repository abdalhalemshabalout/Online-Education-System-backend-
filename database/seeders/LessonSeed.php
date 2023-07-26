<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lessons = [
            [
                'class_room_id'         => 1,
                'branch_id'             => 1,
                'name'                  => 'English Language',
                'code'                  =>  'EN',
                'timer'                 =>  60,
                'detaily'               =>  'new lesson',
            ],
        ];

        foreach ($lessons as $lesson) {
            Lesson::create($lesson);
        }
    }
}
