<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo class="block h-16 w-auto" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="login" value="{{ __('Email Address') }}" />
                <x-jet-input id="login" class="block mt-1 w-full" placeholder="Email atau Username" type="text" name="login" :value="old('login')"  required autofocus />
            </div>

            <div class="mt-4">
                <div class="flex justify-between items-center">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    @if (Route::has('password.request'))
                            <a class="hover:underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Lupa Password ?') }}
                            </a>
                        @endif
                </div>
                <x-jet-input id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                    <a class="hover:underline text-sm text-gray-600 tracking-normal hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('Belum punya akun ?') }}
                    </a>

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
