@extends('layouts.admin', ['active' => 'broadsheet'])

@section('title', 'Broadsheet Overview')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-xl font-bold text-teal-900 mb-2">Broadsheet Overview</h2>
            <p class="text-sm text-gray-600">This is a random display of all classes and students with the expected time-line. You can choose to edit or make change</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Export PDF
            </button>
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Export Excel
            </button>
            <button class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-colors flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                </svg>
                Print Broadsheet
            </button>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-6">
        <div class="grid grid-cols-4 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">School Session</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <option>2025-2026</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Term</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <option>First Term</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Select Class</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <option>1</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Select Arm</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <option>1</option>
                </select>
            </div>
        </div>
        <div class="mt-4 flex justify-end">
            <button class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors font-medium">
                View Broadsheet
            </button>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-4 gap-6 mb-6">
        <!-- Total Students -->
        <div class="bg-white rounded-lg border-l-4 border-blue-500 p-6">
            <p class="text-sm text-gray-600 mb-2">Total Students</p>
            <p class="text-3xl font-bold text-gray-900">180</p>
        </div>

        <!-- Average Class Score -->
        <div class="bg-white rounded-lg border-l-4 border-green-500 p-6">
            <p class="text-sm text-gray-600 mb-2">Average Class Score</p>
            <p class="text-3xl font-bold text-gray-900">72%</p>
        </div>

        <!-- Top Performing Class -->
        <div class="bg-white rounded-lg border-l-4 border-red-500 p-6">
            <p class="text-sm text-gray-600 mb-2">Top Performing Class</p>
            <p class="text-3xl font-bold text-gray-900">SS2A (83%)</p>
        </div>

        <!-- Lowest Performing Subject -->
        <div class="bg-white rounded-lg border-l-4 border-red-500 p-6">
            <p class="text-sm text-gray-600 mb-2">Lowest Performing Subject</p>
            <p class="text-3xl font-bold text-gray-900">Mathematics</p>
        </div>
    </div>

    <!-- Search -->
    <div class="mb-6">
        <div class="relative">
            <input type="text" placeholder="Search for class..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Broadsheet Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
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
                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">93001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">John Adewale</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-teal-600">Male</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15 / 70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">80 \ 85</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                A
                            </span>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">93001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">John Adewale</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-teal-600">Male</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15 / 70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">80 \ 85</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                B
                            </span>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">93001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">John Adewale</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-teal-600">Male</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15 / 70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">80 \ 85</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-500 text-white">
                                C
                            </span>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">93001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">John Adewale</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-teal-600">Male</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15 / 70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">80 \ 85</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                A
                            </span>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">93001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">John Adewale</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-teal-600">Male</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15 / 70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">80 \ 85</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-500 text-white">
                                F
                            </span>
                        </td>
                    </tr>

                    <!-- Row 6 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">93001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">John Adewale</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-teal-600">Male</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">15 / 70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">80 \ 85</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-500 text-white">
                                F
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

