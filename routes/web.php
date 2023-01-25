<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return redirect()->route('exams');
});

Route::get('exam/show/{id}', [ExamController::class, 'show']); // route to show one exam

Route::get('exam/index', [ExamController::class, 'index'])->name('exams'); // show all exams in database
Route::get('exam/create', [ExamController::class, 'create'])->name('addExam'); //show UI to create new exam

Route::post('exam/store', [ExamController::class, 'store']); // add new exam to database

Route::delete('exam/delete/{id}', [ExamController::class, 'destroy']); // delete the exam user clicked on from database


Route::get('exam/edit/{id}', [ExamController::class, 'edit']); // show UI to update exam data
Route::put('exam/update/{id}', [ExamController::class, 'update']); // add updated axam in to database


// Questions

Route::get('question/show/{id}', [QuestionController::class, 'show']); // get one question

Route::get('question/index', [QuestionController::class, 'index'])->name('questions'); // get all question in database

Route::delete('question/delete/{id}', [QuestionController::class, 'destroy']); // delete quetion


Route::get('question/create/{id}', [QuestionController::class, 'create'])->name('addquestion'); // get form to create new questoin
Route::post('question/store', [QuestionController::class, 'store']); // add data to database

Route::get('question/edit/{id}', [QuestionController::class, 'edit']); // get form to updata question data
Route::put('question/update/{id}', [QuestionController::class, 'update']); // set new data to database



Route::delete('options/delete/{id}/{Qid}', [OptionController::class, 'destroy']);// delet one option
