@extends('layouts.admin', ['active' => 'classes'])

@section('title', 'Class Subjects')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('admin.classes') }}" class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back | Nur
        </a>
    </div>

    <!-- Class Info Card -->
    <div class="bg-gradient-to-r from-orange-400 to-orange-500 rounded-lg p-6 mb-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="w-20 h-20 bg-white rounded-lg flex items-center justify-center">
                    <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    </svg>
                </div>
                <div class="text-white">
                    <h2 class="text-2xl font-bold">Nursery 1 - t-A</h2>
                    <p class="text-sm opacity-90 mb-2">First Term | 2023-2025</p>
                    <div class="flex items-center gap-4 text-sm">
                        <span>Teacher: -----</span>
                        <span>Asst. Teacher: -----</span>
                    </div>
                </div>
            </div>
            <div class="text-right text-white">
                <div class="w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center ml-auto mb-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </div>
                <p class="text-sm">Enrollment</p>
                <div class="w-32 h-2 bg-white bg-opacity-30 rounded-full mt-2">
                    <div class="w-3/4 h-full bg-white rounded-full"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="bg-white rounded-lg border border-gray-200">
        <!-- Tab Headers -->
        <div class="border-b border-gray-200">
            <nav class="flex space-x-8 px-6" aria-label="Tabs">
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Class Members
                </button>
                <button class="py-4 px-1 border-b-2 border-orange-400 text-orange-600 font-medium text-sm">
                    Subjects
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Results
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Star Board
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Attendance
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Timetable
                </button>
            </nav>
        </div>

        <!-- Subjects Content -->
        <div class="p-6">
            <!-- Subjects Table -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject Teacher (s)</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Subject 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 4 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 5 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 6 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 7 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 8 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

