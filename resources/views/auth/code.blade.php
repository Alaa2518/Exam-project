<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo  />
            </a>
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('code') }}">
            @csrf

            <!-- code -->
            <div class="col-12 mb-2">
                <x-label for="code" :value="__('Enter Your Code')" class="form-label" />
                <x-input id="code" class="form-control"  type="stingh" name="code" :value="old('code')" required autofocus />
                <div class="invalid-feedback">Please enter your Code.</div>
            </div>

            <div class="col-12">
                <x-button class="btn btn-primary w-100">
                    {{ __('Verification code') }}
                </x-button>
            </div>


        </form>
    </x-auth-card>
</x-guest-layout>
