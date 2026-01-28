@extends('layouts.auth')

@section('title', 'Forgot Password')
@section('subtitle', 'Reset your password')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-8 mx-auto max-w-2xl">
    <div class="mb-6 text-sm text-gray-600">
        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
    </div>

    @if (session('status'))
        <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                Enter Email Address
            </label>
            <input 
                id="email" 
                type="email" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autofocus
                placeholder="Enter your email"
                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
            >
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Buttons -->
        <div class="flex gap-4 mb-6">
            <a 
                href="{{ route('login') }}"
                class="flex-1 px-6 py-3 border border-gray-300 rounded-md text-gray-700 font-medium hover:bg-gray-50 transition-colors text-center"
            >
                Back to Login
            </a>
            <button 
                type="submit" 
                class="flex-1 px-6 py-3 rounded-md text-white font-medium hover:opacity-90 transition-opacity"
                style="background-color: #FDAF22;"
            >
                Email Password Reset Link
            </button>
        </div>
    </form>
</div>
@endsection

