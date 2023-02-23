<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
             <a href="/">
                <x-application-logo  />
            </a>
         </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="col-12">
                <x-label for="name" :value="__('Name')" class="form-label" />
                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                <div class="invalid-feedback">Please, enter your name!</div>
            </div>

            <!-- Email Address -->
            <div class="col-12">
                <x-label for="email" :value="__('Email')" class="form-label" />
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                <div class="invalid-feedback">Please, enter your email!</div>
            </div>


            <!-- Password -->
            <div class="col-12">
                <x-label for="password" :value="__('Password')" class="form-label" />

                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                <div class="invalid-feedback">Please, enter your Password!</div>
            </div>

            <!-- Confirm Password -->
            <div class="col-12">
                <x-label for="password_confirmation" :value="__('Confirm Password')" class="form-label" />

                <x-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />
                <div class="invalid-feedback">Please, enter your password!</div>
            </div>
            <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
            </div>

            <div class="col-12">
                <x-button class="btn btn-primary w-100">
                    {{ __('Create Account') }}
                </x-button>
            </div>
            <div class="col-12">
                    <p class="small mb-0">Already have an account? <a  href="{{ route('login') }}">
                    {{ __('Log in') }}
                </a></p>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
