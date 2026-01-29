@extends('layouts.admin', ['active' => 'classes'])

@section('title', 'Class Members')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('admin.classes') }}" class="flex items-center text-gray-600 hover:text-gray-800">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back | Nur
        </a>
    </div>

    <!-- Action Buttons -->
    <div class="mb-6 flex justify-end space-x-3">
        <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
            Bulk Upload Student
        </button>
        <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add New Class Member
        </button>
    </div>

    <!-- Class Info Card -->
    <div class="bg-white rounded-lg border-2 border-orange-400 p-6 mb-6">
        <div class="flex items-start justify-between">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-teal-900 mb-2">Nursery 1 - 1-A</h2>
                <p class="text-sm text-gray-600 mb-1">Full Day | 2024/2025</p>
                <p class="text-sm text-gray-600 mb-1">Teacher: -------</p>
                <p class="text-sm text-gray-600 mb-4">Asst. Teacher: -------</p>
                
                <!-- Enrollment Progress -->
                <div class="mb-2">
                    <p class="text-sm text-gray-600 mb-1">Enrollment</p>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-orange-400 h-2 rounded-full" style="width: 0%"></div>
                    </div>
                </div>
            </div>
            
            <!-- Class Icon -->
            <div class="ml-6">
                <div class="w-24 h-24 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-16 h-16 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- Expand/Collapse Icon -->
        <div class="flex justify-end mt-4">
            <button class="text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Tabs and Action Buttons -->
    <div class="mb-6 flex items-center justify-between">
        <!-- Tabs -->
        <div class="border-b border-gray-200">
            <nav class="flex space-x-8">
                <a href="#" class="text-teal-900 py-4 px-1 border-b-2 border-orange-400 font-medium text-sm">
                    Class Members
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                    Subjects
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                    Results
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                    Skills
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                    Attendance
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                    Timetable
                </a>
            </nav>
        </div>

        <!-- Download Buttons -->
        <div class="flex space-x-3">
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                Download PDF Report
            </button>
            <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
                Download Excel Report
            </button>
        </div>
    </div>

    <!-- Content Area -->
    <div class="grid grid-cols-12 gap-6">
        <!-- Left Sidebar - Student List -->
        <div class="col-span-4 bg-white rounded-lg border border-gray-200 p-4">
            <!-- Search -->
            <div class="mb-4">
                <div class="relative">
                    <input type="text" placeholder="Search Student" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <!-- Student Label -->
            <div class="mb-3">
                <p class="text-sm font-semibold text-gray-700">Student</p>
            </div>

            <!-- Student List -->
            <div class="space-y-2">
                <!-- Active Student -->
                <div class="bg-teal-800 text-white p-3 rounded-lg cursor-pointer">
                    <p class="text-sm font-medium">Emmanuel Sunday (0001)</p>
                </div>

                <!-- Other Students -->
                @for($i = 2; $i <= 7; $i++)
                <div class="p-3 rounded-lg cursor-pointer hover:bg-gray-50">
                    <p class="text-sm text-teal-600">Moses Stone (0002)</p>
                </div>
                @endfor
            </div>
        </div>

        <!-- Right Content - Student Details -->
        <div class="col-span-8 bg-white rounded-lg border border-gray-200 p-8">
            <div class="flex items-center justify-center h-full">
                <div class="text-center">
                    <p class="text-xl font-semibold text-gray-900 mb-2">Emmanuel Sunday (00001)</p>
                    <p class="text-gray-500">No Record Available</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

