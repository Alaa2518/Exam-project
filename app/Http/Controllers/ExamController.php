<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExamRequest;
use App\Models\Exam;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $exams = Exam::get();

        return view('exam.list', compact('exams'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        //
        return view('exam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreExamRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExamRequest $request)
    {
        //

        Exam::Create($request->all());


        return redirect()->route('exams');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        //

        $exam = Exam::findorFail($id);

        return view('exam.show', compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        //
        $exam = Exam::findorFail($id);

        return view('exam.edit', compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $exam = Exam::findorFail($id);

        $exam->update($request->all());

        return redirect()->route('exams');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Exam::findorFail($id)->delete();
        return redirect()->route('exams');
    }



    // function to return one exam to user

    public function tackExam(){

        $exam = Exam::findorFail(1);

        return view('user.exam',compact('exam'));
    }

    public function resultExam(Request $request,int $id)
    {
        // this function don't complate because it show one exam to all users
        $exam = Exam::findorFail(1);

        $questions = $exam->questions;
        $result = 0;
        foreach ($questions as $question) {
            foreach ($question->options as $option) {
                if ($request[$option->id] === $option->isTrue)
                        $result++;
            }
        } // compute result to user

        DB::table('users_exams')->insert([
            'user_id' =>(int)Auth::user()->id,
            'exam_id'=>(int)$id,
            'result'=>$result,
        ]);// add result and  user on database
        return view('user.result',compact('result'));
    }
}
