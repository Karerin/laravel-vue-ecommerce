<x-app-layout>
    <form action="{{ route('register') }}" method="post" class="w-[400px] mx-auto p-6 my-16">
        @csrf
        <h2 class="text-2xl font-semibold text-center mb-4">Create an account</h2>
        <p class="text-center text-gray-500 mb-3">
            or
            <a href="{{ route('login') }}" class="text-sm text-purple-700 hover:text-purple-600">login with existing
                account</a>
        </p>
        @if (session('error'))
            <div class="py-2 px-3 bg-red-500 text-white mb-2 rounded">
                {{ session('error') }}
            </div>
        @endif
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <div class="mb-4">
            <x-text-input placeholder="Your name" type="text" name="name" :value="old('name')" />
            <small x-show="errors.name" x-text="errors.name" class="text-red-600"></small>
        </div>
        </p>
        <div class="mb-4">
            <x-text-input placeholder="Your Email" type="email" name="email" :value="old('email')" />
            <small x-show="errors.email" x-text="errors.email" class="text-red-600"></small>
        </div>
        <div class="mb-4">
            <x-text-input placeholder="Password" type="password" name="password" />
            <small x-show="errors.password" x-text="errors.password" class="text-red-600"></small>
        </div>
        </div>
        <div class="mb-4">
            <x-text-input placeholder="Repeat Password" type="password" name="password_confirmation" />
            <small x-show="errors.password_repeat" x-text="errors.password_repeat" class="text-red-600"></small>
        </div>

        <button class="btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700 w-full">
            Signup
        </button>
    </form>

    </x-guest-layout>
