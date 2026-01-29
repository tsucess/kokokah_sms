@extends('layouts.auth')

@section('title', 'School Registration')
@section('subtitle', 'Let\'s get to know you by creating your account')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-8 mx-auto max-w-2xl">
    <form method="POST" action="{{ route('register.school') }}">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- School Name -->
            <div>
                <label for="school_name" class="block text-sm font-medium text-gray-700 mb-2">
                    Enter School Name
                </label>
                <input 
                    id="school_name" 
                    type="text" 
                    name="school_name" 
                    value="{{ old('school_name') }}" 
                    required 
                    autofocus
                    placeholder="Winner's Institute of Technology"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                >
                @error('school_name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- School Code -->
            <div>
                <label for="school_code" class="block text-sm font-medium text-gray-700 mb-2">
                    Enter School Code
                </label>
                <input 
                    id="school_code" 
                    type="text" 
                    name="school_code" 
                    value="{{ old('school_code') }}" 
                    required
                    placeholder="WIOT"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                >
                @error('school_code')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Country -->
            <div>
                <label for="country" class="block text-sm font-medium text-gray-700 mb-2">
                    Select Country
                </label>
                <select 
                    id="country" 
                    name="country" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent appearance-none bg-white"
                    style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 0.75rem center; background-size: 1.25rem;"
                >
                    <option value="">Nigeria</option>
                    <option value="nigeria">Nigeria</option>
                    <option value="ghana">Ghana</option>
                    <option value="kenya">Kenya</option>
                    <option value="south_africa">South Africa</option>
                </select>
                @error('country')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- State -->
            <div>
                <label for="state" class="block text-sm font-medium text-gray-700 mb-2">
                    Select State
                </label>
                <select 
                    id="state" 
                    name="state" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent appearance-none bg-white"
                    style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 0.75rem center; background-size: 1.25rem;"
                >
                    <option value="">Nigeria</option>
                    <option value="lagos">Lagos</option>
                    <option value="abuja">Abuja</option>
                    <option value="kano">Kano</option>
                    <option value="rivers">Rivers</option>
                </select>
                @error('state')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- School Website -->
        <div class="mb-6">
            <label for="website" class="block text-sm font-medium text-gray-700 mb-2">
                Enter School Website
            </label>
            <input 
                id="website" 
                type="url" 
                name="website" 
                value="{{ old('website') }}"
                placeholder="Winner's Institute of Technology"
                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
            >
            <div class="mt-2 p-3 bg-gray-100 rounded-md">
                <p class="text-sm text-gray-600">https:// wiot.kokokah.com</p>
                <p class="text-xs text-gray-500 mt-1">This will be the main URL to the portal</p>
            </div>
            @error('website')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Next Button -->
        <div class="mb-6">
            <button 
                type="submit" 
                class="w-full px-6 py-3 rounded-md text-white font-medium hover:opacity-90 transition-opacity"
                style="background-color: #FDAF22;"
            >
                Next
            </button>
        </div>
    </form>
</div>
@endsection

