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

        <form method="POST" action="{{ route('code') }}">
            @csrf

            <!-- code -->
            <div>
                <x-label for="code" :value="__('code')" />

                <x-input id="code" class="block mt-1 w-full" type="stingh" name="code" :value="old('code')" required autofocus />
            </div>

                <x-button class="ml-3">
                    {{ __('Verification code') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
