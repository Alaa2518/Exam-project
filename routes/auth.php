<?php
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
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

});

Route::middleware(['auth','role:superAdmin'])->group(function () {


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

// admin roles and premations

Route::middleware(['auth', 'role:superAdmin'])->name('admin.')->prefix('admin')->group(function () {

    Route::get('/', [IndexController::class,'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class);

    Route::get('/permission/create', [PermissionController::class, 'create']); // get form to create new permission
    Route::post('/permission/store', [PermissionController::class, 'store']); // add data to database

    Route::get('/role/create', [RoleController::class, 'create']); // get form to create new role
    Route::post('/role/store', [RoleController::class, 'store']); // add data to database

    Route::get('/permission/edit/{id}', [PermissionController::class, 'edit']); // get form to updata question data
    Route::put('/permission/update/{id}', [PermissionController::class, 'update']); // set new data to database

    Route::delete('/permission/delete/{id}', [PermissionController::class, 'destroy']); // delet one option

    Route::get('/role/edit/{id}', [RoleController::class, 'edit']); // get form to updata question data
    Route::put('/role/update/{id}', [RoleController::class, 'update']); // set new data to database

    Route::delete('/role/delete/{id}', [RoleController::class, 'destroy']); // delet one option

    // new assign permission to role

    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions'); // add data to database
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke'); // add data to database


    // users index form to admin
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');


});

