@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'Academic Sessions')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Breadcrumb -->
    <div class="mb-6">
        <a href="{{ route('admin.configuration') }}" class="inline-flex items-center text-sm text-orange-500 hover:text-orange-600">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            System Configuration
        </a>
        <span class="text-gray-400 mx-2">/</span>
        <span class="text-gray-600">Sessions & Term</span>
    </div>

    <!-- Current Academic Session -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-teal-900 mb-2">Current Academic Session</h2>
        <p class="text-teal-600 text-lg mb-6">2025/2026 Session</p>

        <!-- Tabs -->
        <div class="border-b border-gray-200 mb-6">
            <nav class="flex space-x-8" aria-label="Tabs">
                <button class="py-4 px-1 border-b-2 border-teal-600 text-teal-600 font-medium text-sm">
                    Academic Sessions
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Term Definitions
                </button>
            </nav>
        </div>

        <!-- Create Button -->
        <div class="mb-6 flex justify-end">
            <button class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors font-medium flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Create Academic Session
            </button>
        </div>

        <!-- Sessions Table -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Term</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Timeframe</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- First Term -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">First Term</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025 - 10/07/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">---/---</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Settings
                                    </button>
                                    <button class="px-4 py-2 bg-teal-900 text-white rounded-lg text-sm font-medium hover:bg-teal-800 transition-colors">
                                        Set as current
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Second Term -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">Second Term</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025 - 10/07/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                    ● Current Term
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Settings
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Third Term -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">Third Term</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025 - 10/07/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">---/---</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Configure
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

