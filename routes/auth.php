<?php
use App\Http\Controllers\ExamController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');


    // Exam routs

    Route::get('/', function () {
        return redirect()->route('exams');
    }
    );

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



    Route::delete('options/delete/{id}/{Qid}', [OptionController::class, 'destroy']); // delet one option
});