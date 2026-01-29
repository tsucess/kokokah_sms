@extends('layouts.admin', ['active' => 'parents'])

@section('title', 'Link Children')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('admin.parents') }}" class="flex items-center text-gray-600 hover:text-gray-800">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Student
        </a>
    </div>

    <!-- Header -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-teal-900 mb-1">Link Children</h2>
        <p class="text-sm text-gray-600">Select a child and the relationship this parent has with the Children.</p>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg border border-gray-200 p-8">
        <form>
            <!-- Search and Relationship Row -->
            <div class="grid grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Search for Child <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <input type="text" placeholder="Search for Child" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Relationship with Child <span class="text-red-500">*</span>
                    </label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                        <option>Select Relationship with Child</option>
                        <option selected>Father</option>
                        <option>Mother</option>
                        <option>Guardian</option>
                    </select>
                </div>
            </div>

            <!-- Search Button -->
            <div class="mb-8">
                <button type="button" class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                    Search
                </button>
            </div>

            <!-- Selected Children Cards -->
            <div class="grid grid-cols-3 gap-6 mb-8">
                @for($i = 1; $i <= 3; $i++)
                <div class="bg-white rounded-lg border-2 border-orange-400 p-4 relative">
                    <!-- Remove Button -->
                    <button type="button" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <!-- Student Avatar -->
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-teal-800 rounded-full flex items-center justify-center">
                            <span class="text-white text-xl font-bold">SM</span>
                        </div>
                    </div>

                    <!-- Student Info -->
                    <div class="text-center">
                        <h3 class="text-lg font-semibold text-teal-900 mb-2">Samuel Musa Ali</h3>
                        <p class="text-sm text-gray-600">Male • 0001 • JS 1</p>
                    </div>
                </div>
                @endfor
            </div>

            <!-- Progress Indicator -->
            <div class="flex items-center justify-center mb-8">
                <div class="flex items-center space-x-3">
                    <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                    <div class="w-16 h-1 bg-gray-300"></div>
                    <div class="w-3 h-3 bg-orange-400 rounded-full"></div>
                    <div class="w-16 h-1 bg-gray-300"></div>
                    <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex items-center justify-between">
                <button type="button" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                    Previous
                </button>
                <button type="submit" class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
                    Next
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

