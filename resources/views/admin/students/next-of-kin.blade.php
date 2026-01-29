@extends('layouts.admin', ['active' => 'students'])

@section('title', 'Next Kin Details')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('admin.students') }}" class="flex items-center text-gray-600 hover:text-gray-800">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Student
        </a>
    </div>

    <!-- Header -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-teal-900 mb-1">Next Kin Details</h2>
        <p class="text-sm text-gray-600">Manage Next of Kin information and enrollment</p>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg border border-gray-200 p-8">
        <form>
            <!-- First Row -->
            <div class="grid grid-cols-3 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Next of Kin First Name <span class="text-red-500">*</span>
                    </label>
                    <input type="text" placeholder="Enter first name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Next of Kin Surname <span class="text-red-500">*</span>
                    </label>
                    <input type="text" placeholder="Enter surname" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Next of Kin Other Name
                    </label>
                    <input type="text" placeholder="Enter other name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
            </div>

            <!-- Second Row -->
            <div class="grid grid-cols-3 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Next of Kin Phone Number <span class="text-red-500">*</span>
                    </label>
                    <input type="tel" placeholder="Enter phone number" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Next of Kin Relationship <span class="text-red-500">*</span>
                    </label>
                    <input type="text" placeholder="Enter relationship" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Next of Kin Email Address
                    </label>
                    <input type="email" placeholder="Enter email address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
            </div>

            <!-- Third Row -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Next of Kin House Address <span class="text-red-500">*</span>
                </label>
                <textarea rows="4" placeholder="Enter house address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"></textarea>
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

