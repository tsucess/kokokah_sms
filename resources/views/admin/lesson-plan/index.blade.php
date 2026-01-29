@extends('layouts.admin', ['active' => 'lesson-plan'])

@section('title', 'Broadsheet Overview')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-900 mb-1">Broadsheet Overview</h2>
            <p class="text-sm text-gray-600">This is a random display of all classes and subjects with the respective time limit. You can choose to edit or make change</p>
        </div>
        <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            New Lesson Plan
        </button>
    </div>

    <!-- Filters -->
    <div class="mb-6 grid grid-cols-4 gap-4">
        <!-- School Session -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">School Session</label>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>2025-2026</option>
                <option>2024-2025</option>
                <option>2023-2024</option>
            </select>
        </div>

        <!-- Term -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Term</label>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>First Term</option>
                <option>Second Term</option>
                <option>Third Term</option>
            </select>
        </div>

        <!-- Select Class -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Select Class</label>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>---</option>
                <option>Primary 1</option>
                <option>Primary 2</option>
                <option>Primary 3</option>
            </select>
        </div>

        <!-- Select Week -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Select Week</label>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>---</option>
                <option>Week 1</option>
                <option>Week 2</option>
                <option>Week 3</option>
            </select>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <div class="relative max-w-md">
            <input type="text" placeholder="Search for users..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Lesson Plan Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Week</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Topic</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Objective</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Resources</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Row 1 - Week 1 Approved -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Week 1</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Introduction to Fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Textbook, Flashcards</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                ● Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 - Week 1 Pending -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Week 1</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Introduction to Fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Textbook, Flashcards</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-500 text-white">
                                ● Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 - Week 1 Approved -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Week 1</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Introduction to Fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Textbook, Flashcards</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                ● Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 - Week 2 Pending -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Week 2</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Addition of Fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Board, Worksheet</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-500 text-white">
                                ● Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 - Week 2 Approved -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Week 2</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Addition of Fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Board, Worksheet</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                ● Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 6 - Week 2 Pending -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Week 2</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Addition of Fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Board, Worksheet</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-500 text-white">
                                ● Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 7 - Week 1 Pending -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Week 1</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Introduction to Fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm text-gray-900">Textbook, Flashcards</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-500 text-white">
                                ● Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
