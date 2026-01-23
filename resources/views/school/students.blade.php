@extends('layouts.school', ['active' => 'student'])

@section('title', 'Student Management')

@section('content')
<div class="p-8 space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">Student Management</h2>
            <p class="text-sm text-teal-600 mt-1">Manage student information and enrollment</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-teal-700 bg-white hover:bg-gray-50">
                Export as
            </button>
            <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-teal-700 bg-white hover:bg-gray-50">
                Bulk Upload Student
            </button>
            <button class="px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg text-sm font-medium hover:bg-yellow-500 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add New Student
            </button>
        </div>
    </div>

    <!-- Stats Card -->
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <div class="flex items-center justify-between">
            <div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">1,247</span>
                </div>
                <p class="text-sm text-teal-600 mt-1">Total Students</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative w-24 h-24">
                    <svg class="w-24 h-24 transform -rotate-90">
                        <circle cx="48" cy="48" r="40" stroke="#e5e7eb" stroke-width="8" fill="none" />
                        <circle cx="48" cy="48" r="40" stroke="#10b981" stroke-width="8" fill="none"
                                stroke-dasharray="251.2" stroke-dashoffset="62.8" stroke-linecap="round" />
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-lg font-bold text-teal-800">100</span>
                    </div>
                </div>
                <div class="text-sm">
                    <div class="flex items-center space-x-2 mb-1">
                        <span class="w-3 h-3 bg-green-500 rounded-full"></span>
                        <span class="text-teal-600">MALE (50%)</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="w-3 h-3 bg-red-500 rounded-full"></span>
                        <span class="text-teal-600">FEMALE (50%)</span>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" class="text-sm text-blue-600 hover:underline flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    12 this month
                </a>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="flex items-center space-x-4">
        <div class="flex-1">
            <select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm text-teal-700 focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                <option>School Session</option>
                <option selected>2025-2026</option>
            </select>
        </div>
        <div class="flex-1">
            <select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm text-teal-700 focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                <option>Term</option>
                <option selected>First Term</option>
            </select>
        </div>
        <div class="flex-1">
            <select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm text-teal-700 focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                <option selected>Select class section</option>
            </select>
        </div>
        <div class="flex-1">
            <select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm text-teal-700 focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                <option selected>Select class level</option>
            </select>
        </div>
        <div class="flex-1">
            <select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm text-teal-700 focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                <option selected>Select status</option>
            </select>
        </div>
    </div>

    <!-- Search -->
    <div class="relative">
        <input type="text" placeholder="Search students" class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg text-sm text-teal-700 placeholder-teal-400 focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
        <svg class="w-5 h-5 text-teal-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </div>

    <!-- Student Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @for ($i = 0; $i < 8; $i++)
        <div class="bg-white rounded-lg border-2 border-orange-400 p-4 relative">
            <!-- Active Badge -->
            <div class="absolute top-4 left-4">
                <span class="px-3 py-1 bg-green-500 text-white text-xs font-medium rounded">Active</span>
            </div>

            <!-- Menu Button -->
            <div class="absolute top-4 right-4">
                <button class="text-teal-400 hover:text-teal-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
            </div>

            <div class="mt-8">
                <h3 class="text-base font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">Emmanuel Sanusi Lanido</h3>
                <p class="text-sm text-teal-600 mt-1">Jss 1 - 1A</p>

                <div class="mt-4 space-y-2">
                    <div class="flex items-center text-sm text-teal-600">
                        <span class="font-medium">Parent/Guardian:</span>
                        <span class="ml-2">Rose Akinola</span>
                    </div>
                    <div class="flex items-center text-sm text-teal-600">
                        <span class="font-medium">Fees Paid</span>
                    </div>
                    <div class="flex items-center text-sm text-teal-600">
                        <span class="font-medium">Attendance:</span>
                        <span class="ml-2">95%</span>
                    </div>
                    <div class="flex items-center text-sm text-teal-600">
                        <span class="font-medium">Enrollment:</span>
                        <span class="ml-2">11/1/2025</span>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-between mt-6">
        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-teal-700 bg-white hover:bg-gray-50">
            Previous
        </button>
        <div class="text-sm text-teal-600">
            Page <span class="font-medium">1</span> of <span class="font-medium">12</span>
        </div>
        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-teal-700 bg-white hover:bg-gray-50">
            Next
        </button>
    </div>
</div>
@endsection

