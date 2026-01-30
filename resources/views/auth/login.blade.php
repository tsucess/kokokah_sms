@extends('layouts.auth')

@section('title', 'Login')
@section('subtitle', 'Login to your Great School')

@section('content')
    <div class="bg-white rounded-lg shadow-auth p-8 mx-auto max-w-2xl">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-8">
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label for='email'
                        class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Email</label>
                    <input type="text" placeholder="WIOT" id="email" type="email" name="email"
                        value="{{ old('email') }}" required autofocus autocomplete="username"
                        class="w-full outline-none text-primary text-sm">
                </div>
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label for="password"
                        class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Enter Password
                    </label>
                    <div class="relative">
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                            placeholder="******" class="w-full outline-none text-primary text-sm">
                        <button type="button" onclick="togglePassword()"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-grey500 hover:text-gray-700">
                            <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
                @error('password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Forgot Password Link -->
            <div class="mb-6 text-right">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-base text-primary hover:text-accent font-semibold font-sitka">
                        Forgot Password?
                    </a>
                @endif
            </div>

            <!-- Buttons -->
<div class="flex justify-center mb-7">
                <button type="submit"
                    class="flex px-30 py-3 rounded text-black font-semibold bg-accent hover:bg-accent-hover transition-all"
                    >
                   Login
                </button>
                </div>


            <!-- Sign Up Link -->
            <div class="text-center">
                <p class="text-base text-primary ">
                    Don't have an account?
                    <a href="{{ route('register') }}" class=" hover:text-accent font-semibold">
                        Sign up
                    </a>
                </p>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />';
            }
        }
    </script>
@endpush
