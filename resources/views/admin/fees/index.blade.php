@extends('layouts.admin', ['active' => 'fees'])

@section('title', 'Fees')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-900 mb-1">Fees</h2>
            <p class="text-sm text-gray-600">Manage user information and enrollment</p>
        </div>
        <div class="flex space-x-3">
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
                Send Payment Link
            </button>
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Download
            </button>
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                Notify Defaulters
            </button>
        </div>
    </div>

    <!-- Filters -->
    <div class="mb-6 flex items-center space-x-4">
        <!-- Select Session Dropdown -->
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-2">Select Session</label>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Active</option>
                <option>2024/2025</option>
                <option>2023/2024</option>
            </select>
        </div>

        <!-- Select Term Dropdown -->
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-2">Select Term</label>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Active</option>
                <option>First Term</option>
                <option>Second Term</option>
                <option>Third Term</option>
            </select>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-3 gap-6 mb-6">
        <!-- Expected Revenue -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="h-1 bg-blue-500"></div>
            <div class="p-6">
                <p class="text-sm text-gray-600 mb-2">Expected Revenue</p>
                <p class="text-4xl font-bold text-teal-900 mb-2">1,247</p>
                <div class="flex items-center text-sm text-blue-600">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    +12 this month
                </div>
            </div>
        </div>

        <!-- Generated Revenue -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="h-1 bg-green-500"></div>
            <div class="p-6">
                <p class="text-sm text-gray-600 mb-2">Generated Revenue</p>
                <p class="text-4xl font-bold text-teal-900 mb-2">1,247</p>
                <div class="flex items-center text-sm text-blue-600">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    +12 this month
                </div>
            </div>
        </div>

        <!-- Outstanding -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="h-1 bg-red-500"></div>
            <div class="p-6">
                <p class="text-sm text-gray-600 mb-2">Outstanding</p>
                <p class="text-4xl font-bold text-teal-900 mb-2">1,247</p>
                <div class="flex items-center text-sm text-blue-600">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    +12 this month
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="border-b border-gray-200 mb-6">
        <nav class="flex space-x-8" aria-label="Tabs">
            <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                Dashboard
            </button>
            <button class="py-4 px-1 border-b-2 border-teal-600 text-teal-600 font-medium text-sm">
                Student List
            </button>
        </nav>
    </div>

    <!-- Student Fees Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left">
                            <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Student</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Level</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Class</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Discount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Expected</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Paid</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Outstand</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @for($i = 1; $i <= 7; $i++)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=Samuel+Victor&background=0D9488&color=fff" alt="">
                                </div>
                                <div class="ml-4">
                                    <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">Samuel Victor</a>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Primary 1</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">A</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">₦15,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">₦5,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">₦5,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">₦5,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-red-500">₦5,000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="relative">
                                <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-white px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <div class="flex items-center">
                <button class="px-3 py-1 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 text-sm">
                    Previous
                </button>
            </div>
            <div class="text-sm text-gray-600">
                Page 1 of 12
            </div>
            <div class="flex items-center">
                <button class="px-3 py-1 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 text-sm">
                    Next
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Dropdown Menu Template (hidden by default) -->
<div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-10">
    <div class="py-1">
        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            View Status
        </a>
        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            Notify Student
        </a>
    </div>
</div>
@endsection

