<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Announcements = [
            [
                'title'                  => 'English Language',
                'text'                   =>  'Why English language is so important?
                Why is it important to learn English? | ETS Global
                English is the Language of International Communication
                
                Therefore, it is highly likely that if you meet someone from another country, you will both be able to speak English. It gives you an open door to the world and helps you communicate with global citizens.',
            ],
            [
                'title'                  => 'Angular Framework',
                'text'                   =>  'Angular is a TypeScript-based, free and open-source single-page web application framework led by the Angular Team at Google and by a community of individuals and corporations. Angular is a complete rewrite from the same team that built AngularJS.',
            ],
            [
                'title'                  => 'React Library',
                'text'                   =>  'React is a free and open-source front-end JavaScript library for building user interfaces based on components. It is maintained by Meta and a community of individual developers and companies. React can be used to develop single-page, mobile, or server-rendered applications with frameworks like Next.js',
            ],
            [
                'title'                  => 'Vue Framework',
                'text'                   =>  'Vue.js is an open-source model–view–viewmodel front end JavaScript library for building user interfaces and single-page applications. It was created by Evan You, and is maintained by him and the rest of the active core team members',
            ],
            [
                'title'                  => 'German Language',
                'text'                   =>  'German is a West Germanic language mainly spoken in Western Europe and Central Europe. It is the most widely spoken and official or co-official language in Germany, Austria, Switzerland, Liechtenstein, and the Italian province of South Tyrol. ',
            ],
            [
                'title'                  => 'Arabic Language',
                'text'                   =>  'What language do Arabic speak?
                The Arabic language is a Semitic language spoken by people in North Africa, the Arabian Peninsula, and the Middle East',
            ],
        ];

        foreach ($Announcements as $Announcement) {
            Announcement::create($Announcement);
        }
    }
}
