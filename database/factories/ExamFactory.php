<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>  $this->faker->text($max=50),
            'created_at' => $this->faker->dateTime($max = 'now', $timezone = null) ,
        ];
    }
}
