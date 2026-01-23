@extends('layouts.school', ['active' => 'configuration'])

@section('title', 'System Configuration')

@section('content')
<div class="p-8">
    <!-- Breadcrumb -->
    <div class="mb-6">
        <div class="flex items-center text-sm">
            <a href="#" class="text-red-500 hover:text-red-600 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                System Configuration
            </a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-600">Sessions & Term</span>
        </div>
    </div>

    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-teal-800 mb-1">Current Academic Session</h2>
        <p class="text-teal-600">2025/2026 Session</p>
    </div>

    <!-- Tabs and Create Button -->
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center space-x-1 border-b border-gray-200">
            <button class="px-4 py-2 text-sm font-medium text-teal-700 border-b-2 border-teal-700">
                Academic Sessions
            </button>
            <button class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-teal-700">
                Term Definitions
            </button>
        </div>
        <button class="px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg font-medium hover:bg-yellow-500 transition-colors flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Create Academic Session
        </button>
    </div>

    <!-- Sessions Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Term</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Timeframe</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <!-- First Term -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm font-medium text-gray-900">First Term</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm text-gray-600">10/07/2025 - 10/07/2025</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm text-gray-500">---/---</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('school.configuration.session', 1) }}" class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                Settings
                            </a>
                            <button class="px-4 py-2 bg-teal-600 text-white rounded-lg text-sm font-medium hover:bg-teal-700 transition-colors">
                                Set a current
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Second Term (Current) -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm font-medium text-gray-900">Second Term</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm text-gray-600">10/07/2025 - 10/07/2025</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-500 text-white">
                            ● Current Term
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('school.configuration.session', 2) }}" class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                            Settings
                        </a>
                    </td>
                </tr>

                <!-- Third Term -->
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm font-medium text-gray-900">Third Term</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm text-gray-600">10/07/2025 - 10/07/2025</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-sm text-gray-500">---/---</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('school.configuration.session', 3) }}" class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                            Configure
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

