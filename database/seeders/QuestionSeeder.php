<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Question\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete all data first
        Question::truncate();

        // Questions of Exam 1
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => 'I am very happy _____ in India. I really miss being there',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => 'They didnot reach an agreement ______ their differences.',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'A RIVER is bigger than a STREAM',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'There are one thousand years in a CENTURY',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'FOUNDED is the past tense of FOUND',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 2
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => 'I wish I _____ those words. But now it\'s too late',
            'exam_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => 'The woman, who has been missing for 10 days, is believed_____',
            'exam_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'ANSWER can be used as a noun and a verb.',
            'exam_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'SCARLET is a brilliant red colour.',
            'exam_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => ' USED TO DOING and USED TO DO mean the same thing.',
            'exam_id' => 2,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 3
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => 'who has taken away my pen?',
            'exam_id' => 3,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => 'I wish had eaten my burger when I had the chance, he said',
            'exam_id' => 3,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'You can use IMPROVE as a noun and as a verb.',
            'exam_id' => 3,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => ' DOZEN is equivalent to 20.',
            'exam_id' => 3,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => ' The past tense of FIND is FOUND.',
            'exam_id' => 3,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 4
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => ' My daughter said I should take my umbrella, and__too. While I was out it started pouring with rain.',
            'exam_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => 'I can\'t promise he\'ll listen to me and change his mind, but I\'ll',
            'exam_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => ' EQUIVALENT TO is (more or less) the same as EQUAL TO.',
            'exam_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'He say it\'s two o\'clock',
            'exam_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'The dog has hurt its leg.',
            'exam_id' => 4,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 5
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => 'The first letter of the first word in a sentence should be',
            'exam_id' => 5,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => 'The order of a basic positive sentence is',
            'exam_id' => 5,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'Every sentence must have a subject and an object',
            'exam_id' => 5,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'A plural subject needs a plural verb',
            'exam_id' => 5,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => ' When two singular subjects are connected by or, use a singular verb ',
            'exam_id' => 5,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 6
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => 'Adjectives usually come',
            'exam_id' => 6,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => ' If an opinion-adjective and a fact-adjective are used before a noun, which comes first?',
            'exam_id' => 6,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'In British English, a collective noun is usually treated as singular ',
            'exam_id' => 6,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'The terms its and it is have the same meaning ',
            'exam_id' => 6,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'You are looking good ',
            'exam_id' => 6,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 7
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => 'I bought a beautiful dress at the mall.',
            'exam_id' => 7,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => ' What did she ask you to do',
            'exam_id' => 7,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'I left my shoes under the kitchen table. adjective',
            'exam_id' => 7,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => ' If we finish our work quickly we can go to the movies.adverb',
            'exam_id' => 7,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'On Saturdays I work from nine to five. verb',
            'exam_id' => 7,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 8
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => ' I want to go to a university in the United States.',
            'exam_id' => 8,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => 'I\'m sure I\'ve met your girlfriend before.',
            'exam_id' => 8,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'Well, I don\'t think I\'ll be home before 6 interjection',
            'exam_id' => 8,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'Andy knocked on the door but nobody answered.adverb',
            'exam_id' => 8,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => 'After lunch let\'s go out for a coffee.pronoun',
            'exam_id' => 8,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 9
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 9,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 9,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 9,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 9,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 9,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 10
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 11
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 12
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 13
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 14
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 15
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 16
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 17
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 18
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 19
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 20
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 21
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 22
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 23
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 24
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 25
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 26
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 27
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 28
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 29
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 30
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 31
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 32
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 33
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 34
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 35
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 36
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 37
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 38
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 39
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 40
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 41
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 42
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 43
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 44
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 45
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 47
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 48
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 49
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 50
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 51
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 52
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 53
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 54
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 55
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 56
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 57
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 58
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 59
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 60
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 61
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 62
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 63
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 64
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 65
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 66
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 67
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 68
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 69
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 70
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 71
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 72
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 73
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 74
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 75
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 76
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 77
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 78
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 79
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 80
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 81
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 82
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 83
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 84
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 85
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 86
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 87
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 88
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 89
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 90
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 91
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 92
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 93
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 94
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 95
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 96
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 97
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 98
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 99
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // Questions of Exam 100
        // create row 1
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 2
        Question::create([
            'question_type' => 'MCQ',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 3
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 4
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        // create row 5
        Question::create([
            'question_type' => 'trueOrFalse',
            'body' => '',
            'exam_id' => 1,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);


    }
}
