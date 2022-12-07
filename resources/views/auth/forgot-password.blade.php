<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <img src="{{asset('img/logo.png')}}" class="w-14 h-14 rounded" alt="">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-100">
            {{ __('Elfelejtetted a jelszavad? Nem probléma. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Jelszó emlékesztető') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
