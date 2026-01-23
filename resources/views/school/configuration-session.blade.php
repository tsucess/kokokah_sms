@extends('layouts.school', ['active' => 'configuration'])

@section('title', 'Academic Session Configuration')

@section('content')
<div class="p-8">
    <!-- Breadcrumb -->
    <div class="mb-6">
        <div class="flex items-center text-sm">
            <a href="{{ route('school.configuration') }}" class="text-red-500 hover:text-red-600 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Academic Sessions
            </a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-600">First year 2025/2026 Session</span>
        </div>
    </div>

    <!-- Page Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-teal-800 mb-1">First year</h2>
        <p class="text-teal-600">2025/2026 Session</p>
    </div>

    <!-- Date Fields and Update Button -->
    <div class="flex items-end gap-4 mb-6">
        <!-- Term Start Date -->
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-2">Term Start Date</label>
            <div class="relative">
                <input type="date" value="2025-10-03" 
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500">
            </div>
        </div>

        <!-- Term End Date -->
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-2">Term End Date</label>
            <div class="relative">
                <input type="date" value="2025-10-03" 
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500">
            </div>
        </div>

        <!-- Next Term Start Date -->
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-2">Next Term Start Date</label>
            <div class="relative">
                <input type="date" value="2025-10-03" 
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500">
            </div>
        </div>

        <!-- Mid Term Date -->
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-2">Mid Term Date</label>
            <div class="relative">
                <input type="date" value="2025-10-05" 
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500">
            </div>
        </div>

        <!-- Update Button -->
        <button class="px-8 py-2.5 bg-yellow-400 text-gray-900 rounded-lg font-medium hover:bg-yellow-500 transition-colors">
            Update
        </button>
    </div>

    <!-- Tabs -->
    <div class="flex items-center space-x-1 border-b border-gray-200 mb-6">
        <button class="px-4 py-2 text-sm font-medium text-teal-700 border-b-2 border-teal-700">
            Assign Classes
        </button>
        <button class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-teal-700">
            Formats
        </button>
        <button class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-teal-700">
            Early Years
        </button>
        <button class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-teal-700">
            Skills
        </button>
        <button class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-teal-700">
            Subject Traits
        </button>
    </div>

    <!-- Class Assignment Cards -->
    <div class="space-y-4">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg border border-gray-300 overflow-hidden">
            <!-- Card Header -->
            <div class="bg-gray-100 px-6 py-3 border-b border-gray-300">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-gray-700">Nur 1</span>
                    <span class="text-sm text-gray-600">Nursery 1</span>
                </div>
            </div>
            
            <!-- Card Content -->
            <div class="px-6 py-4">
                <div class="flex items-center gap-4">
                    <!-- No arm toggle -->
                    <label class="flex items-center cursor-pointer">
                        <div class="relative">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-teal-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-teal-600"></div>
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-700">No arm</span>
                    </label>

                    <!-- Checkboxes for A-H -->
                    <div class="flex items-center gap-6 flex-1">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">A</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">B</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">C</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">D</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">E</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">F</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">G</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">H</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg border border-gray-300 overflow-hidden">
            <div class="bg-gray-100 px-6 py-3 border-b border-gray-300">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-gray-700">Nur 1</span>
                    <span class="text-sm text-gray-600">Nursery 1</span>
                </div>
            </div>
            <div class="px-6 py-4">
                <div class="flex items-center gap-4">
                    <label class="flex items-center cursor-pointer">
                        <div class="relative">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-teal-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-teal-600"></div>
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-700">No arm</span>
                    </label>
                    <div class="flex items-center gap-6 flex-1">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">A</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">B</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">C</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">D</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">E</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">F</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">G</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">H</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg border border-gray-300 overflow-hidden">
            <div class="bg-gray-100 px-6 py-3 border-b border-gray-300">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-gray-700">Nur 1</span>
                    <span class="text-sm text-gray-600">Nursery 1</span>
                </div>
            </div>
            <div class="px-6 py-4">
                <div class="flex items-center gap-4">
                    <label class="flex items-center cursor-pointer">
                        <div class="relative">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-teal-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-teal-600"></div>
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-700">No arm</span>
                    </label>
                    <div class="flex items-center gap-6 flex-1">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">A</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">B</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">C</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">D</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">E</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">F</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">G</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">H</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg border border-gray-300 overflow-hidden">
            <div class="bg-gray-100 px-6 py-3 border-b border-gray-300">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-gray-700">Nur 1</span>
                    <span class="text-sm text-gray-600">Nursery 1</span>
                </div>
            </div>
            <div class="px-6 py-4">
                <div class="flex items-center gap-4">
                    <label class="flex items-center cursor-pointer">
                        <div class="relative">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-teal-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-teal-600"></div>
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-700">No arm</span>
                    </label>
                    <div class="flex items-center gap-6 flex-1">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">A</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">B</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">C</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">D</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">E</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">F</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">G</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                            <span class="ml-2 text-sm text-gray-700">H</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

