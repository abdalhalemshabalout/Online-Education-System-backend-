<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ini_set('memory_limit', '-1');

        $this->call([
            ManagerSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
            UserSeeder::class,
            ClassRoomSeeder::class,
            BranchSeeder::class,
            LessonSeed::class,
            RoleSeeder::class,
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
