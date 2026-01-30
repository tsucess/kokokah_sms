@extends('layouts.admin', ['active' => 'staff'])

@section('title', 'Staff Management')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-900 mb-1">Staff Management</h2>
            <p class="text-sm text-gray-600">Manage staff information and enrollment</p>
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
                Bulk Upload Staff
            </button>
            <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add New Staff
            </button>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-4 gap-6 mb-6">
        <!-- Total Staff -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Total Staff</p>
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
            <div class="flex items-center text-xs text-gray-600 mb-3">
                <span class="inline-block w-2 h-2 bg-teal-600 rounded-full mr-1"></span>
                <span class="mr-3">MALE (33%)</span>
                <span class="inline-block w-2 h-2 bg-orange-400 rounded-full mr-1"></span>
                <span>FEMALE (74%)</span>
            </div>
            <div class="flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this term
            </div>
        </div>

        <!-- Total Academic Teachers -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Total Academic Teachers</p>
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
            <div class="flex items-center text-xs text-gray-600 mb-3">
                <span class="inline-block w-2 h-2 bg-teal-600 rounded-full mr-1"></span>
                <span class="mr-3">MALE (33%)</span>
                <span class="inline-block w-2 h-2 bg-orange-400 rounded-full mr-1"></span>
                <span>FEMALE (74%)</span>
            </div>
            <div class="flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this term
            </div>
        </div>

        <!-- Total Non Academic Teachers -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Total Non Academic Teachers</p>
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
            <div class="flex items-center text-xs text-gray-600 mb-3">
                <span class="inline-block w-2 h-2 bg-teal-600 rounded-full mr-1"></span>
                <span class="mr-3">MALE (33%)</span>
                <span class="inline-block w-2 h-2 bg-orange-400 rounded-full mr-1"></span>
                <span>FEMALE (74%)</span>
            </div>
            <div class="flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this term
            </div>
        </div>

        <!-- Additional Stats Card -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="relative mb-4">
                <div class="w-16 h-16 mx-auto">
                    <svg class="transform -rotate-90" viewBox="0 0 36 36">
                        <circle cx="18" cy="18" r="16" fill="none" stroke="#e5e7eb" stroke-width="3" />
                        <circle cx="18" cy="18" r="16" fill="none" stroke="#f97316" stroke-width="3" stroke-dasharray="100, 100" stroke-linecap="round" />
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-xs font-semibold">100</span>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p class="text-sm text-gray-600 mb-2">ACTIVE STAFF (40%)</p>
                <p class="text-sm text-gray-600">DEACTIVATE STAFF (60%)</p>
            </div>
            <div class="mt-3 flex items-center justify-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this term
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="mb-6 border-b border-gray-200">
        <nav class="flex space-x-8">
            <a href="#" class="text-teal-900 py-4 px-1 border-b-2 border-orange-400 font-medium text-sm">
                Staff
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Roles
            </a>
        </nav>
    </div>

    <!-- Filters -->
    <div class="mb-6 flex items-center space-x-4">
        <div class="flex-1">
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Select staff type</option>
                <option selected>Academic</option>
                <option>Non-Academic</option>
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

    <!-- Staff Cards Grid -->
    <div class="grid grid-cols-4 gap-6 mb-6">
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
            <h3 class="text-lg font-semibold text-teal-900 mb-1">Emmanuel Osho</h3>
            <p class="text-sm text-gray-600 mb-3">Staff ID: 001</p>

            <div class="space-y-2 text-sm mb-3">
                <div class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    View Profile
                </div>
                <div class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit Staff
                </div>
                <div class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Delete Staff
                </div>
            </div>

            <div class="space-y-2 text-sm">
                <div class="flex items-start">
                    <span class="text-gray-600 w-32">Staff Type:</span>
                    <span class="text-gray-900 flex-1">{{ $i % 2 == 0 ? 'Non Academic' : 'Academic' }}</span>
                </div>
                <div class="flex items-start">
                    <span class="text-gray-600 w-32">Phone Number:</span>
                    <span class="text-gray-900 flex-1">+234810 000 0000</span>
                </div>
                <div class="flex items-start">
                    <span class="text-gray-600 w-32">Email:</span>
                    <span class="text-teal-600 flex-1">myemail@gmail.com</span>
                </div>
                <div class="flex items-start">
                    <span class="text-gray-600 w-32">Enrollment:</span>
                    <span class="text-gray-900 flex-1">11/1/2025</span>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-between">
        <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
            Previous
        </button>
        <div class="flex items-center space-x-2">
            <span class="text-sm text-gray-600">Page 1 of 12</span>
        </div>
        <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
            Next
        </button>
    </div>

    <!-- Footer -->
    <div class="mt-8 text-center">
        <p class="text-sm text-gray-500">COPYRIGHT © 2025</p>
    </div>
</div>
@endsection

