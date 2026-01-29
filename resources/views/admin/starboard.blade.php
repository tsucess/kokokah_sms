@extends('layouts.admin', ['active' => 'starboard'])

@section('title', 'Kokokah Starboard Badges')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-900 mb-1">Kokokah Starboard Badges</h2>
            <p class="text-sm text-gray-600">Manage and oversee your school management platform</p>
        </div>
        <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add New Badge
        </button>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-2 gap-6 mb-6">
        <!-- Total Academic Badges -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Total Number of Academic Badges</p>
                <div class="p-2 bg-gray-100 rounded-lg">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
            </div>
            <p class="text-4xl font-bold text-teal-900 mb-2">1,247</p>
            <div class="flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this month
            </div>
        </div>

        <!-- Total Non-Academic Badges -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Total Number of Non-Academic Badges</p>
                <div class="p-2 bg-gray-100 rounded-lg">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    </svg>
                </div>
            </div>
            <p class="text-4xl font-bold text-teal-900 mb-2">834</p>
            <div class="flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this month
            </div>
        </div>
    </div>

    <!-- List of Badges -->
    <div class="mb-4">
        <h3 class="text-lg font-bold text-teal-900">List of Badges</h3>
    </div>

    <!-- Badges Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Badge ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Badge Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Requirement</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Row 1 - Attendance Star -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">B0001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Attendance Star</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Academic</a>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">Awarded for consistent attendance</td>
                        <td class="px-6 py-4 text-sm text-gray-900">≥ 95% attendance</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Row 2 - Attendance Star -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">B0001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Attendance Star</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Academic</a>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">Awarded for consistent attendance</td>
                        <td class="px-6 py-4 text-sm text-gray-900">≥ 95% attendance</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Row 3 - Team Player Badge -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">B0001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Team Player Badge</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Non-Academic</a>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">For learners who work well with others</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Group activity participation + peer rating.</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Row 4 - Team Player Badge -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">B0001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Team Player Badge</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Non-Academic</a>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">For learners who work well with others</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Group activity participation + peer rating.</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Row 5 - Kindness Champion -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">B0001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Kindness Champion</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Non-Academic</a>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">For showing empathy and helping others</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Teacher nomination or peer votes.</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Row 6 - Kindness Champion -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">B0001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Kindness Champion</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Non-Academic</a>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">For showing empathy and helping others</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Teacher nomination or peer votes.</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
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
@endsection
