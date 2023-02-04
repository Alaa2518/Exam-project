<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([

            OptionSeeder::class,
            QuestionSeeder::class,
            ExamSeeder::class,

        ]);
            // delete all data first

        \App\Models\Exam::factory(50)->create();
        \App\Models\Question::factory(500)->create();
        \App\Models\Option::factory(1250)->create();

        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
        ]);

    }
}
