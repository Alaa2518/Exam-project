<?php

namespace App\Http\Controllers;

use App\Enums\QuestionTypeEnum;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Exam;
use App\Models\Option;
use App\Models\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
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
     * @return \Illuminate\Contracts\View\View
     */
    public function create($id)
    {
        //

        return view('question.create' ,compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreQuestionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionRequest $request)
    {

        Question::Create($request->all());
        $id = Question::all()->last()->id ;

        if ($request->question_type === QuestionTypeEnum::TRUE_OR_FALSE){

            Option::addTrueOrFales($request, $id);

        } else if ($request->question_type === QuestionTypeEnum::MCQ) {
            Option::addMCQ($request,$id);
        }
        return redirect()->route('questions');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @param int $id
     * @return \Illuminate\Contracts\View\View
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
     * @return \Illuminate\Contracts\View\View
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
     * @param  UpdateQuestionRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionRequest $request,$id)
    {


        $question = Question::findorFail($id);
        $oldQType =$question->question_type;
        $question->update($request->all());
        $newQType = $request->question_type;
        if ($oldQType !== $newQType){

            // first go to the option and delete all rows of this type
            Option::where('question_id','=', $id)->delete();
            // second tacke all new update and add it as an new options on acreate

            if ($request->question_type === QuestionTypeEnum::TRUE_OR_FALSE) {

                Option::addTrueOrFales($request, $id);


            } else if ($request->question_type === QuestionTypeEnum::MCQ) {
                Option::addMCQ($request, $id);
            }

        } else {
                // first ditrmain if type of question true or mcq
            if ($request->question_type === QuestionTypeEnum::TRUE_OR_FALSE) {

                Option::updateTrueOrFales($request, $id);

            } else if ($request->question_type === QuestionTypeEnum::MCQ) {
                Option::updateMCQ($request, $id);

            }

        }

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
