@extends('layouts.admin', ['active' => 'parents'])

@section('title', 'Parent Management')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-900 mb-1">Parent Management</h2>
            <p class="text-sm text-gray-600">Manage user information and enrollment</p>
        </div>
        <div class="flex space-x-3">
            <div class="relative">
                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors flex items-center">
                    Export as
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                Bulk Upload Parent
            </button>
            <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add New Parent
            </button>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-3 gap-6 mb-6">
        <!-- Total Parents/Guardians -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Total Parents/Guardians</p>
                <div class="relative">
                    <div class="w-16 h-16">
                        <svg class="transform -rotate-90" viewBox="0 0 36 36">
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#e5e7eb" stroke-width="3" />
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#f97316" stroke-width="3" stroke-dasharray="100, 100" stroke-linecap="round" />
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-xs font-semibold">100</span>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-4xl font-bold text-teal-900 mb-2">1,247</p>
            <div class="flex items-center text-xs text-gray-600">
                <span class="inline-block w-2 h-2 bg-teal-600 rounded-full mr-1"></span>
                <span class="mr-3">MALE (26%)</span>
                <span class="inline-block w-2 h-2 bg-orange-400 rounded-full mr-1"></span>
                <span>FEMALE (74%)</span>
            </div>
            <div class="mt-3 flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this term
            </div>
        </div>

        <!-- Total Students Linked -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Total Students Linked</p>
                <div class="relative">
                    <div class="w-16 h-16">
                        <svg class="transform -rotate-90" viewBox="0 0 36 36">
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#e5e7eb" stroke-width="3" />
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#f97316" stroke-width="3" stroke-dasharray="100, 100" stroke-linecap="round" />
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-xs font-semibold">100</span>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-4xl font-bold text-teal-900 mb-2">300</p>
            <div class="flex items-center text-xs text-gray-600">
                <span class="inline-block w-2 h-2 bg-teal-600 rounded-full mr-1"></span>
                <span class="mr-3">MALE (26%)</span>
                <span class="inline-block w-2 h-2 bg-orange-400 rounded-full mr-1"></span>
                <span>FEMALE (74%)</span>
            </div>
            <div class="mt-3 flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this term
            </div>
        </div>

        <!-- Total Students Not Linked -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Total Students Not Linked</p>
                <div class="relative">
                    <div class="w-16 h-16">
                        <svg class="transform -rotate-90" viewBox="0 0 36 36">
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#e5e7eb" stroke-width="3" />
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#f97316" stroke-width="3" stroke-dasharray="100, 100" stroke-linecap="round" />
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-xs font-semibold">100</span>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-4xl font-bold text-teal-900 mb-2">1,247</p>
            <div class="flex items-center text-xs text-gray-600">
                <span class="inline-block w-2 h-2 bg-teal-600 rounded-full mr-1"></span>
                <span class="mr-3">MALE (26%)</span>
                <span class="inline-block w-2 h-2 bg-orange-400 rounded-full mr-1"></span>
                <span>FEMALE (74%)</span>
            </div>
            <div class="mt-3 flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this term
            </div>
        </div>
    </div>

    <!-- Section Label -->
    <div class="mb-4">
        <p class="text-sm font-semibold text-gray-700">Parent</p>
    </div>

    <!-- Filters -->
    <div class="mb-6 flex items-center space-x-4">
        <div class="flex-1">
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Select gender</option>
                <option selected>Male</option>
                <option>Female</option>
            </select>
        </div>
        <div class="flex-1">
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Select Status</option>
                <option selected>Active</option>
                <option>Inactive</option>
            </select>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <div class="relative">
            <input type="text" placeholder="Search staff" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Parent Cards Grid -->
    <div class="grid grid-cols-4 gap-6">
        @for($i = 1; $i <= 8; $i++)
        <div class="bg-white rounded-lg border-2 border-orange-400 p-4">
            <div class="flex items-start justify-between mb-3">
                <span class="px-2 py-1 bg-green-500 text-white text-xs rounded">Active</span>
                <button class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
            </div>
            <h3 class="text-lg font-semibold text-teal-900 mb-1">Bose Oloude (M)</h3>
            <p class="text-sm text-gray-600 mb-3">Father</p>
            <p class="text-sm text-teal-600 mb-1">Email Address: boseoloude@gmail.com</p>
            <p class="text-sm text-gray-900 mb-1">Phone Number: +234 810 000 0000</p>
            <p class="text-sm text-gray-900 mb-3">Children/Wards: 0</p>
            <div class="flex items-center space-x-2">
                <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </button>
                <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                    </svg>
                </button>
            </div>
        </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex items-center justify-between">
        <p class="text-sm text-gray-600">Showing 1 to 8 of 1,247 entries</p>
        <div class="flex items-center space-x-2">
            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-600 hover:bg-gray-50">Previous</button>
            <button class="px-3 py-1 bg-orange-400 text-white rounded text-sm">1</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-600 hover:bg-gray-50">2</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-600 hover:bg-gray-50">3</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-600 hover:bg-gray-50">...</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-600 hover:bg-gray-50">Next</button>
        </div>
    </div>
</div>
@endsection

