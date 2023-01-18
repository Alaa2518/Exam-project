<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Option;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questions = Question::all();

        return view('question.list',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //

        return view('question.create' ,compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        Question::Create($request->all());
        $id = Question::all()->last()->id ;


        if ($request->question_type === 'trueOrFalse'){

                DB::table('options')->insert([
                    'quetion_id' => $id,
                    'isTrue' => 1,
                    'option' => $request->trueOrFalse,
                    'created_at' => Carbon::now()->toDateTimeString(),
                    'updated_At' => Carbon::now()->toDateTimeString(),
                ]);

        } else if ($request->question_type === 'MCQ') {

            for ($i =1 ; $i<=(int)$request->MCQ_number;$i++){
                if (property_exists($request, $request->true_Option_ . $i))
                        {
                             DB::table('options')->insert([
                    'option' => $request->option_.$i,
                    'isTrue' => 1,
                    'quetion_id' => $id,
                    'created_at' => Carbon::now()->toDateTimeString(),
                    'updated_At' => Carbon::now()->toDateTimeString(),
                ]);
                        }
                else
                    {
                    DB::table('options')->insert([
                        'option' => $request->option_ . $i,
                        'isTrue' => 0,
                        'quetion_id' => $id,
                        'created_at' => Carbon::now()->toDateTimeString(),
                        'updated_At' => Carbon::now()->toDateTimeString(),
                    ]);
                    }

            }
            return response($request);
        }
        return redirect()->route('questions');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question,$id)
    {
        //
        $question = Question::findOrFail($id);
        return view('question.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $question = Question::findorFail($id);

        return view('question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $question = Question::findorFail($id);

        $question->update($request->all());

        return redirect()->route('questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::findOrFail($id)->delete();
        return redirect()->route('questions');
    }


}
