@extends('layouts.admin', ['active' => 'broadsheet'])

@section('title', 'Broadsheet Detail')
@section('page-title', 'Broadsheet: JSS1A - Second Term, 2024/2025')

@section('content')
<div class="p-8">
    <!-- Header with Export Buttons -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-900 mb-1">Broadsheet: JSS1A - Second Term, 2024/2025</h2>
        </div>
        <div class="flex space-x-3">
            <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Export PDF
            </button>
            <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Export Excel
            </button>
            <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                </svg>
                Print Broadsheet
            </button>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-5 gap-6 mb-6">
        <!-- Class Average -->
        <div class="bg-white rounded-lg border-t-4 border-blue-500 p-4">
            <p class="text-sm text-gray-600 mb-2">Class Average</p>
            <p class="text-3xl font-bold text-teal-900">71%</p>
        </div>

        <!-- Top Student -->
        <div class="bg-white rounded-lg border-t-4 border-green-500 p-4">
            <p class="text-sm text-gray-600 mb-2">Top Student</p>
            <p class="text-xl font-bold text-teal-900">83%</p>
            <p class="text-xs text-gray-500">Adewale John</p>
        </div>

        <!-- Lowest Student -->
        <div class="bg-white rounded-lg border-t-4 border-red-500 p-4">
            <p class="text-sm text-gray-600 mb-2">Lowest Student</p>
            <p class="text-xl font-bold text-teal-900">45%</p>
            <p class="text-xs text-gray-500">Fatima Bello</p>
        </div>

        <!-- Top Subject -->
        <div class="bg-white rounded-lg border-t-4 border-red-500 p-4">
            <p class="text-sm text-gray-600 mb-2">Top Subject</p>
            <p class="text-xl font-bold text-teal-900">78%</p>
            <p class="text-xs text-gray-500">English</p>
        </div>

        <!-- Weakest Subject -->
        <div class="bg-white rounded-lg border-t-4 border-green-500 p-4">
            <p class="text-sm text-gray-600 mb-2">Weakest Subject</p>
            <p class="text-xl font-bold text-teal-900">30%</p>
            <p class="text-xs text-gray-500">Mathematics</p>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <div class="relative">
            <input type="text" placeholder="Search for courses" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Student Grades Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden mb-6">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Student ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Student</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gender</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">English</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Maths</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Science</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Social Studies</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @php
                        $students = [
                            ['id' => '001', 'name' => 'Adewale John', 'gender' => 'Male', 'english' => 'A', 'maths' => 'B', 'science' => 'A', 'social' => 'B', 'total' => '83%'],
                            ['id' => '002', 'name' => 'Fatima Bello', 'gender' => 'Female', 'english' => 'C', 'maths' => 'F', 'science' => 'C', 'social' => 'C', 'total' => '45%'],
                            ['id' => '003', 'name' => 'Chukwu Emmanuel', 'gender' => 'Male', 'english' => 'B', 'maths' => 'A', 'science' => 'B', 'social' => 'A', 'total' => '78%'],
                            ['id' => '004', 'name' => 'Aisha Mohammed', 'gender' => 'Female', 'english' => 'A', 'maths' => 'B', 'science' => 'A', 'social' => 'B', 'total' => '80%'],
                            ['id' => '005', 'name' => 'Ojo Samuel', 'gender' => 'Male', 'english' => 'B', 'maths' => 'C', 'science' => 'B', 'social' => 'C', 'total' => '65%'],
                        ];
                        $gradeColors = [
                            'A' => 'bg-green-500',
                            'B' => 'bg-green-400',
                            'C' => 'bg-orange-400',
                            'F' => 'bg-red-500'
                        ];
                    @endphp
                    @foreach($students as $student)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $student['id'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $student['name'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $student['gender'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full {{ $gradeColors[$student['english']] }} text-white text-sm font-semibold">
                                {{ $student['english'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full {{ $gradeColors[$student['maths']] }} text-white text-sm font-semibold">
                                {{ $student['maths'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full {{ $gradeColors[$student['science']] }} text-white text-sm font-semibold">
                                {{ $student['science'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full {{ $gradeColors[$student['social']] }} text-white text-sm font-semibold">
                                {{ $student['social'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">{{ $student['total'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bottom Statistics Cards -->
    <div class="grid grid-cols-4 gap-6 mb-6">
        <!-- Class Average -->
        <div class="bg-white rounded-lg border border-gray-200 p-4 text-center">
            <p class="text-sm text-gray-600 mb-2">Class Average</p>
            <p class="text-3xl font-bold text-teal-900">71%</p>
        </div>

        <!-- Highest -->
        <div class="bg-white rounded-lg border border-gray-200 p-4 text-center">
            <p class="text-sm text-gray-600 mb-2">Highest</p>
            <p class="text-3xl font-bold text-teal-900">93</p>
        </div>

        <!-- Lowest -->
        <div class="bg-white rounded-lg border border-gray-200 p-4 text-center">
            <p class="text-sm text-gray-600 mb-2">Lowest</p>
            <p class="text-3xl font-bold text-teal-900">35</p>
        </div>

        <!-- Total Students -->
        <div class="bg-white rounded-lg border border-gray-200 p-4 text-center">
            <p class="text-sm text-gray-600 mb-2">Total Students</p>
            <p class="text-3xl font-bold text-teal-900">70</p>
        </div>
    </div>

    <!-- Footer -->
    <div class="mt-8 text-center">
        <p class="text-sm text-gray-500">COPYRIGHT © 2025</p>
    </div>
</div>
@endsection

