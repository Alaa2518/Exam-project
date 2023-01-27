<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Symfony\Component\Console\Question\Question;
use App\Models\Question;

class OptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'question_id' => $this->faker->randomElement(Question::all()->pluck('id')->toArray()),
                'option' => function (array $attributes) {
                    return Question::find($attributes['question_id'])->question_type ==='MCQ' ?
                    $this->faker->realText($maxNbChars = 255, $indexSize = 2) : $this->faker->randomElement(['true','false']);
                },
                'isTrue' => $this->faker->randomElement(['True', 'False']) ,
                'created_at' => now(),
        ];
    }
}
