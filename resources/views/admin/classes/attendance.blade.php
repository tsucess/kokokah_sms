@extends('layouts.admin', ['active' => 'classes'])

@section('title', 'Class Attendance')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('admin.classes') }}" class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back | Nursery 1 - A
        </a>
    </div>

    <!-- Class Info Card -->
    <div class="bg-gradient-to-r from-orange-400 to-orange-500 rounded-lg p-6 mb-6 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center">
                <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                </svg>
            </div>
            <div class="text-white">
                <h2 class="text-2xl font-bold">Nursery 1 - A</h2>
                <p class="text-sm opacity-90">PRE-BASIC | 2023-2024</p>
                <div class="flex items-center gap-4 mt-2 text-sm">
                    <span>Teachers: -----</span>
                    <span>•</span>
                    <span>Asst. Teachers: -----</span>
                </div>
            </div>
        </div>
        <div class="flex gap-3">
            <button class="px-6 py-2 bg-white text-gray-900 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                Bulk Upload Student
            </button>
            <button class="px-6 py-2 bg-orange-600 text-white rounded-lg font-medium hover:bg-orange-700 transition-colors">
                + Add New Class Member
            </button>
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
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Subjects
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Results
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Skills
                </button>
                <button class="py-4 px-1 border-b-2 border-orange-400 text-orange-600 font-medium text-sm">
                    Attendance
                </button>
            </nav>
        </div>

        <!-- Attendance Content -->
        <div class="p-6">
            <!-- Date Selector -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Select Level</label>
                <select class="w-64 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <option>November 11th, 2025</option>
                </select>
            </div>

            <!-- Attendance Summary -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Attendance Summary</h3>
                <p class="text-sm text-gray-600 mb-4">Today's attendance overview</p>
                
                <div class="grid grid-cols-4 gap-4">
                    <!-- Present -->
                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-green-700 mb-1">Present</p>
                                <p class="text-2xl font-bold text-green-900">126</p>
                            </div>
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Late -->
                    <div class="bg-orange-50 border border-orange-200 rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-orange-700 mb-1">Late</p>
                                <p class="text-2xl font-bold text-orange-900">30</p>
                            </div>
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Absent -->
                    <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-red-700 mb-1">Absent</p>
                                <p class="text-2xl font-bold text-red-900">126</p>
                            </div>
                            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Excused -->
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-blue-700 mb-1">Excused</p>
                                <p class="text-2xl font-bold text-blue-900">126</p>
                            </div>
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Attendance Rate -->
            <div class="mb-6 bg-gray-50 rounded-lg p-4">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-gray-700">Attendance Rate</span>
                    <span class="text-2xl font-bold text-teal-900">85.6%</span>
                </div>
            </div>

            <!-- Student in class -->
            <div class="mb-6">
                <h3 class="text-base font-semibold text-gray-900 mb-4">Student in class</h3>

                <!-- Search -->
                <div class="mb-4">
                    <div class="relative">
                        <input type="text" placeholder="Search class..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>

                <!-- Student List -->
                <div class="space-y-3">
                    <!-- Student 1 -->
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 bg-teal-900 rounded-full flex items-center justify-center">
                                    <span class="text-white font-semibold text-sm">T</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Taofeeq Abubakar George</h4>
                                    <p class="text-sm text-gray-600">1A</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <!-- Present -->
                                <button class="px-4 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-medium hover:bg-green-200 transition-colors flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Present
                                </button>
                                <!-- Late -->
                                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Late
                                </button>
                                <!-- Absent -->
                                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    Absent
                                </button>
                                <!-- Excused -->
                                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Excused
                                </button>
                                <!-- Time -->
                                <div class="flex items-center space-x-2 ml-4">
                                    <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                    <span class="text-sm text-gray-600">08:00 AM</span>
                                </div>
                                <!-- Time Out -->
                                <div class="flex items-center space-x-2">
                                    <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                    <span class="text-sm text-gray-600">2:30 PM</span>
                                </div>
                                <!-- Submit -->
                                <button class="px-6 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                                    Commit
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Student 2 -->
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 bg-teal-900 rounded-full flex items-center justify-center">
                                    <span class="text-white font-semibold text-sm">T</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Taofeeq Abubakar George</h4>
                                    <p class="text-sm text-gray-600">1A</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <!-- Present -->
                                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    Present
                                </button>
                                <!-- Late -->
                                <button class="px-4 py-2 bg-orange-100 text-orange-700 rounded-lg text-sm font-medium hover:bg-orange-200 transition-colors flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Late
                                </button>
                                <!-- Absent -->
                                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    Absent
                                </button>
                                <!-- Excused -->
                                <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Excused
                                </button>
                                <!-- Time -->
                                <div class="flex items-center space-x-2 ml-4">
                                    <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                    <span class="text-sm text-gray-600">08:00 PM</span>
                                </div>
                                <!-- Time Out -->
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm text-gray-600">Time-out</span>
                                    <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                    <span class="text-sm text-gray-600">2:30 PM</span>
                                </div>
                                <!-- Submit -->
                                <button class="px-6 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                                    Commit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Attendance Records -->
            <div class="mt-8">
                <h3 class="text-base font-semibold text-gray-900 mb-4">Attendance Records</h3>
                <p class="text-sm text-gray-600 mb-4">Historical attendance list</p>

                <!-- Search -->
                <div class="mb-4">
                    <div class="relative">
                        <input type="text" placeholder="Search class..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>

                <!-- Records Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">S/N</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Student Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time-in</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time-out</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Comment</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">01</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-teal-900 rounded-full flex items-center justify-center mr-3">
                                            <span class="text-white font-semibold text-xs">T</span>
                                        </div>
                                        <span class="text-sm font-medium text-gray-900">Taofeeq Abubakar George</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">11-11-2025</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Present
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">08:00 AM</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">08:00 PM</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">No comment for him today</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">01</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-teal-900 rounded-full flex items-center justify-center mr-3">
                                            <span class="text-white font-semibold text-xs">T</span>
                                        </div>
                                        <span class="text-sm font-medium text-gray-900">Taofeeq Abubakar George</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">11-11-2025</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                        Late
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">08:00 AM</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">08:00 PM</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">No comment for him today</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-4 flex items-center justify-between border-t border-gray-200 pt-4">
                    <p class="text-sm text-gray-600">Showing 1-5 of 1,247 messages</p>
                    <div class="flex items-center space-x-2">
                        <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 disabled:opacity-50" disabled>
                            Previous
                        </button>
                        <button class="px-4 py-2 bg-gray-900 text-white rounded-lg">1</button>
                        <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">2</button>
                        <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">3</button>
                        <span class="px-2">...</span>
                        <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">250</button>
                        <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

