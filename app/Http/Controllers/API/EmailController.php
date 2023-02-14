<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Jobs\sendmail;
use App\Mail\userMailable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //

    public function send(int $id){
        sendmail::dispatch($id);
        return redirect()->route('dashboard');
    }


}
