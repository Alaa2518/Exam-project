<?php

namespace Database\Seeders;

use App\Models\Option;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Option::factory(1250)->create();

    }
}
