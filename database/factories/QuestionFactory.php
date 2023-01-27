<?php

namespace Database\Factories;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'question_type' => $this->faker->randomElement(['MCQ', 'trueOrFalse']),
                'body' => $this->faker->unique()->realText($maxNbChars = 255, $indexSize = 2) ,
                'exam_id' =>$this->faker->randomElement(Exam::all()->pluck('id')->toArray()) ,
                'created_at' => now(),
        ];
    }
}
