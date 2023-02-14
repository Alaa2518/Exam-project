<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Mail\userMailable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //

    public function send(int $id){
        $user = User::findorFail($id);
        Mail::to($user->email)->send(new userMailable($user));
        return redirect()->route('dashboard');
    }


}
