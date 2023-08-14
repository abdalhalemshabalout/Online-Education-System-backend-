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
                'name'                  => 'German Language',
                'code'                  =>  'GE',
                'timer'                 =>  120,
                'detaily'               =>  'German is a West Germanic language mainly spoken in Western Europe and Central Europe. It is the most widely spoken and official or co-official language in Germany, Austria, Switzerland, Liechtenstein, and the Italian province of South Tyrol. ',
            ],
            [
                'class_room_id'         => 1,
                'branch_id'             => 1,
                'name'                  => 'Arabic Language',
                'code'                  =>  'AR',
                'timer'                 =>  180,
                'detaily'               =>  'What language do Arabic speak?
                The Arabic language is a Semitic language spoken by people in North Africa, the Arabian Peninsula, and the Middle East',
            ],
            [
                'class_room_id'         => 1,
                'branch_id'             => 1,
                'name'                  => 'English Language',
                'code'                  =>  'EN',
                'timer'                 =>  90,
                'detaily'               =>  'Why English language is so important?
                Why is it important to learn English? | ETS Global
                English is the Language of International Communication
                
                Therefore, it is highly likely that if you meet someone from another country, you will both be able to speak English. It gives you an open door to the world and helps you communicate with global citizens.',
            ],
            [
                'class_room_id'         => 1,
                'branch_id'             => 1,
                'name'                  => 'Angular Framework',
                'code'                  =>  'GE',
                'timer'                 =>  120,
                'detaily'               =>  'Angular is a TypeScript-based, free and open-source single-page web application framework led by the Angular Team at Google and by a community of individuals and corporations. Angular is a complete rewrite from the same team that built AngularJS.',
            ],
            [
                'class_room_id'         => 1,
                'branch_id'             => 1,
                'name'                  => 'React Library',
                'code'                  =>  'AR',
                'timer'                 =>  90,
                'detaily'               =>  'React is a free and open-source front-end JavaScript library for building user interfaces based on components. It is maintained by Meta and a community of individual developers and companies. React can be used to develop single-page, mobile, or server-rendered applications with frameworks like Next.js',
            ],
            [
                'class_room_id'         => 1,
                'branch_id'             => 1,
                'name'                  => 'Vue Framework',
                'code'                  =>  'EN',
                'timer'                 =>  60,
                'detaily'               =>  'Vue.js is an open-source model–view–viewmodel front end JavaScript library for building user interfaces and single-page applications. It was created by Evan You, and is maintained by him and the rest of the active core team members',
            ],
        ];

        foreach ($lessons as $lesson) {
            Lesson::create($lesson);
        }
    }
}
