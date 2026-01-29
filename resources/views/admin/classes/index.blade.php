@extends('layouts.admin', ['active' => 'classes'])

@section('title', 'Classes')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header with Filters -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-teal-900 mb-6">Classes</h2>

        <!-- Filters and Search -->
        <div class="flex items-center space-x-4 mb-6">
            <!-- Select Level Dropdown -->
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Select level</option>
                <option>Nursery</option>
                <option>Primary</option>
                <option>Secondary</option>
            </select>

            <!-- Select Arm Dropdown -->
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Select arm</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
            </select>

            <!-- Search Bar -->
            <div class="flex-1 relative">
                <input type="text" placeholder="Search for classes" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Classes Grid -->
    <div class="grid grid-cols-4 gap-6 mb-6">
        @for($i = 1; $i <= 12; $i++)
        <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
            <!-- Status Badge -->
            <div class="flex justify-end mb-3">
                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                    ● Active
                </span>
            </div>

            <!-- Class Name -->
            <h3 class="text-lg font-bold text-teal-900 mb-2">Nursery {{ $i }} - t-A</h3>
            <p class="text-sm text-gray-600 mb-4">Second Term, 2025/2026 Session</p>

            <!-- Teacher Info -->
            <div class="space-y-2 mb-4">
                <div class="flex items-start">
                    <span class="text-xs text-gray-500 w-24">Teacher:</span>
                    <span class="text-xs text-gray-900 font-medium">Adewale Adebayo</span>
                </div>
                <div class="flex items-start">
                    <span class="text-xs text-gray-500 w-24">Asst. Teacher:</span>
                    <span class="text-xs text-gray-900 font-medium">Chioma Okafor</span>
                </div>
            </div>

            <!-- Enrollment Progress -->
            <div class="mb-4">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-xs text-gray-600">Enrollment</span>
                    <span class="text-xs font-semibold text-gray-900">40/100</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-orange-400 h-2 rounded-full" style="width: 40%"></div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex space-x-2">
                <button class="flex-1 px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors text-sm font-medium">
                    View Class
                </button>
                <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    Assign Teacher
                </button>
            </div>
        </div>
        @endfor
    </div>

    <!-- Pagination and Export Buttons -->
    <div class="flex items-center justify-between">
        <!-- Pagination -->
        <div class="flex items-center space-x-2">
            <button class="px-3 py-1 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                Previous
            </button>
            <button class="px-3 py-1 bg-orange-400 text-white rounded-lg">1</button>
            <button class="px-3 py-1 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">2</button>
            <button class="px-3 py-1 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">3</button>
            <button class="px-3 py-1 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                Next
            </button>
        </div>

        <!-- Export Buttons -->
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Download PDF Report
            </button>
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Download Excel Report
            </button>
        </div>
    </div>
</div>
@endsection

