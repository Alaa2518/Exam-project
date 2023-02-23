<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your email & password to login</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="col-12">
                <x-label for="email" :value="__('Email')" class="form-label" />
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                <div class="invalid-feedback">Please enter your email.</div>
            </div>
            <!-- Password -->
            <div class="col-12">
                <x-label for="password" :value="__('Password')" class="form-label" />
                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <div class="invalid-feedback">Please enter your password.</div>
            </div>


            <!-- Remember Me -->
            <div class="col-12">
                <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="remember_me">
                        <label class="form-check-label" for="remember_me">Remember me</label>
                </div>
            </div>

            <div class="col-12">
                <x-button class="btn btn-primary w-100">
                    {{ __('Log in') }}
                </x-button>
            </div>
            <div class="col-12">
                    <p class="small mb-0">Don't have account? <a href="{{route('register')}}">Create an account</a></p>
            </div>
            <div class="col-12">
                    <p class="small mb-0">Do you have code? <a href="{{ route('code') }}">
                    {{ __('Login with code?') }}
                </a></p>
            </div>
            <div class="col-12">
                @if (Route::has('password.request'))
                <p class="small mb-0">If you forgot your password
                    <a  href="{{ route('password.request') }}">
                        {{ __('Yes') }}
                    </a>
                </p>
                @endif

            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
