<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CodeAuthentcatedSessionController extends Controller
{
    //
    public function create()
    {
        return view('auth.code');
    }


    public function store(Request $request)
    {
        $validated = $request->validate(['code' => ['required', 'min:3', 'max:50']]);
        $user = User::where('code', '=', $validated)->first();
        if ($user === null) {
            return back()->with('message','Try Again');
        }
        Auth::login($user);
        return redirect()->route('dashboard');
    }
}
