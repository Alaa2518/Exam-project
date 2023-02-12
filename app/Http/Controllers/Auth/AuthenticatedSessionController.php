<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */

    public function createCode()
    {
        return view('auth.code');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function storeCode(Request $request)
    {
        // in this function take code and reassigen the email and password manul to use the user code
        $validated = $request->validate(['code' => ['required', 'min:3','max:50']]);
        $user = User::where('code', '=', $validated)->first();
        if ($user === null){
            return back()->with('tray agen');
        }
        $request = new LoginRequest(['email'=>$user->email,'password'=>$user->password]);
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
