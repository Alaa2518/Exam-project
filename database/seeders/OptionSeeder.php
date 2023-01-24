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
        //delete all data first
        Option::truncate();

        //Exam 1 Question MCQ 1
                            // option 1
        Option::create([
            'option' => 'to live',
            'isTrue' => 'True',
            'quetion_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
                            // option 2
        Option::create([
            'option' => 'to have lived',
            'isTrue' => 'False',
            'quetion_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
                            // option 3
        Option::create([
            'option' => 'to be living',
            'isTrue' => 'False',
            'quetion_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 1 Question MCQ 2
                            // option 1
        Option::create([
            'option' => 'on account of',
            'isTrue' => 'False',
            'quetion_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
                            // option 2
        Option::create([
            'option' => 'because',
            'isTrue' => 'True',
            'quetion_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
                            // option 3
        Option::create([
            'option' => 'due',
            'isTrue' => 'False',
            'quetion_id' =>2,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 1 Question TrueOrFalse 3
                            // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 3,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 1 Question TrueOrFalse 4
                            // option 1
        Option::create([
            'option' => 'Talse',
            'isTrue' => 'True',
            'quetion_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 1 Question TrueOrFalse 5
                            // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 5,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);



        //Exam 2 Question MCQ 1
        // option 1
        Option::create([
            'option' => 'have never said',
            'isTrue' => 'True',
            'quetion_id' => 6,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'never said',
            'isTrue' => 'False',
            'quetion_id' => 6,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'not having said',
            'isTrue' => 'False',
            'quetion_id' => 6,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 2 Question MCQ 2
        // option 1
        Option::create([
            'option' => 'to be abducted',
            'isTrue' => 'False',
            'quetion_id' => 7,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'to have been abducted',
            'isTrue' => 'True',
            'quetion_id' => 7,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'to have been abducting',
            'isTrue' => 'False',
            'quetion_id' => 7,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 2 Question TrueOrFalse 3
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 8,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 2 Question TrueOrFalse 4
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 9,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 2 Question TrueOrFalse 5
        // option 1
        Option::create([
            'option' => 'False',
            'isTrue' => 'True',
            'quetion_id' => 10,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);




        //Exam 3 Question MCQ 1
        // option 1
        Option::create([
            'option' => 'have never said',
            'isTrue' => 'False',
            'quetion_id' => 11,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'By whom has pen been taken away',
            'isTrue' => 'True',
            'quetion_id' => 11,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'not having said',
            'isTrue' => 'False',
            'quetion_id' => 11,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 3 Question MCQ 2
        // option 1
        Option::create([
            'option' => 'He wishes he had eaten his burger when he had the chance',
            'isTrue' => 'False',
            'quetion_id' => 12,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'He wished he had had eaten his burger when he had the chance',
            'isTrue' => 'True',
            'quetion_id' => 12,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'to have been abducting',
            'isTrue' => 'False',
            'quetion_id' => 12,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 3 Question TrueOrFalse 3
        // option 1
        Option::create([
            'option' => 'False',
            'isTrue' => 'True',
            'quetion_id' => 13,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 3 Question TrueOrFalse 4
        // option 1
        Option::create([
            'option' => 'False',
            'isTrue' => 'True',
            'quetion_id' => 13,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 3 Question TrueOrFalse 5
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 15,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);




        //Exam 4 Question MCQ 1
        // option 1
        Option::create([
            'option' => ' just as lucky',
            'isTrue' => 'False',
            'quetion_id' => 16,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'By whom has pen been taken away',
            'isTrue' => 'False',
            'quetion_id' => 16,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'just as well',
            'isTrue' => 'True',
            'quetion_id' => 16,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 4 Question MCQ 2
        // option 1
        Option::create([
            'option' => 'see that I may do',
            'isTrue' => 'True',
            'quetion_id' => 17,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'see what I will do',
            'isTrue' => 'False',
            'quetion_id' => 17,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'see what I can do ',
            'isTrue' => 'False',
            'quetion_id' => 17,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 4 Question TrueOrFalse 3
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 18,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 4 Question TrueOrFalse 4
        // option 1
        Option::create([
            'option' => 'False',
            'isTrue' => 'True',
            'quetion_id' => 19,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 4 Question TrueOrFalse 5
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 20,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);




        //Exam 5 Question MCQ 1
        // option 1
        Option::create([
            'option' => 'a large letter ',
            'isTrue' => 'True',
            'quetion_id' => 21,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'a capital letter',
            'isTrue' => 'False',
            'quetion_id' => 21,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'just as well',
            'isTrue' => 'False',
            'quetion_id' => 21,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 5 Question MCQ 2
        // option 1
        Option::create([
            'option' => 'Subject-Verb-Object',
            'isTrue' => 'True',
            'quetion_id' => 22,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'see what I will do',
            'isTrue' => 'False',
            'quetion_id' => 22,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'Verb-Object-Subject ',
            'isTrue' => 'False',
            'quetion_id' => 22,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 5 Question TrueOrFalse 3
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 23,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 5 Question TrueOrFalse 4
        // option 1
        Option::create([
            'option' => 'False',
            'isTrue' => 'True',
            'quetion_id' => 24,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 5 Question TrueOrFalse 5
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 25,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);




        //Exam 6 Question MCQ 1
        // option 1
        Option::create([
            'option' => 'a fact-adjective',
            'isTrue' => 'True',
            'quetion_id' => 26,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'a capital letter',
            'isTrue' => 'False',
            'quetion_id' => 26,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'an opinion-adjective',
            'isTrue' => 'False',
            'quetion_id' => 26,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 6 Question MCQ 2
        // option 1
        Option::create([
            'option' => 'Subject-Verb-Object',
            'isTrue' => 'True',
            'quetion_id' => 27,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'see what I will do',
            'isTrue' => 'False',
            'quetion_id' => 27,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'Verb-Object-Subject ',
            'isTrue' => 'False',
            'quetion_id' => 27,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 6 Question TrueOrFalse 3
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 28,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 6 Question TrueOrFalse 4
        // option 1
        Option::create([
            'option' => 'False',
            'isTrue' => 'True',
            'quetion_id' => 29,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 6 Question TrueOrFalse 5
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 30,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        //Exam 7 Question MCQ 1
        // option 1
        Option::create([
            'option' => 'a fact-adjective',
            'isTrue' => 'True',
            'quetion_id' => 35,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'a capital letter',
            'isTrue' => 'False',
            'quetion_id' => 35,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'an opinion-adjective',
            'isTrue' => 'False',
            'quetion_id' => 35,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 7 Question MCQ 2
        // option 1
        Option::create([
            'option' => 'Subject-Verb-Object',
            'isTrue' => 'True',
            'quetion_id' => 31,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'see what I will do',
            'isTrue' => 'False',
            'quetion_id' => 31,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'Verb-Object-Subject ',
            'isTrue' => 'False',
            'quetion_id' => 31,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 7 Question TrueOrFalse 3
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 32,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 7 Question TrueOrFalse 4
        // option 1
        Option::create([
            'option' => 'False',
            'isTrue' => 'True',
            'quetion_id' => 33,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 7 Question TrueOrFalse 5
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 34,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);


        //Exam 8 Question MCQ 1
        // option 1
        Option::create([
            'option' => 'adjective',
            'isTrue' => 'True',
            'quetion_id' => 36,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'preposition',
            'isTrue' => 'False',
            'quetion_id' => 36,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'noun',
            'isTrue' => 'False',
            'quetion_id' => 36,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 8 Question MCQ 2
        // option 1
        Option::create([
            'option' => 'verb',
            'isTrue' => 'True',
            'quetion_id' => 37,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 2
        Option::create([
            'option' => 'preposition',
            'isTrue' => 'False',
            'quetion_id' => 37,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // option 3
        Option::create([
            'option' => 'interjection',
            'isTrue' => 'False',
            'quetion_id' => 37,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 8 Question TrueOrFalse 3
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 38,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 8 Question TrueOrFalse 4
        // option 1
        Option::create([
            'option' => 'False',
            'isTrue' => 'True',
            'quetion_id' => 39,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        //Exam 8 Question TrueOrFalse 5
        // option 1
        Option::create([
            'option' => 'True',
            'isTrue' => 'True',
            'quetion_id' => 40,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

    }
}
