<?php

namespace Database\Seeders;

use App\Models\Exam;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete all data
        Exam::truncate();



    }
}
