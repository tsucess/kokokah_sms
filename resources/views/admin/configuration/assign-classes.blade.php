@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'Assign Classes')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('admin.configuration.academic-sessions') }}" class="flex items-center text-orange-500 hover:text-orange-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Academic Sessions
        </a>
        <span class="text-gray-400 mx-2">/</span>
        <span class="text-gray-600">First year 2025/2026 Session</span>
    </div>

    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-teal-900 mb-1">First year</h2>
        <p class="text-sm text-teal-600">2025/2026 Session</p>
    </div>

    <!-- Term Date Inputs -->
    <div class="grid grid-cols-5 gap-4 mb-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Term Start Date</label>
            <input type="date" value="2025-10-03" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Term End Date</label>
            <input type="date" value="2025-10-03" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Next Term Start Date</label>
            <input type="date" value="2025-10-03" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Mid Term Date</label>
            <input type="date" value="2025-10-05" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
        </div>
        <div class="flex items-end">
            <button class="w-full px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
                Update
            </button>
        </div>
    </div>

    <!-- Tabs -->
    <div class="mb-6 border-b border-gray-200">
        <nav class="flex space-x-8">
            <a href="#" class="text-teal-900 py-4 px-1 border-b-2 border-orange-400 font-medium text-sm">
                Assign Classes
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Formats
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Early Years
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Skills
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Subject Traits
            </a>
        </nav>
    </div>

    <!-- Class Assignment Sections -->
    <div class="space-y-6">
        @for($section = 1; $section <= 4; $section++)
        <!-- Class Section -->
        <div class="bg-gray-100 rounded-lg p-4">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-4">
                    <span class="text-sm font-medium text-gray-700">Nur 1</span>
                    <span class="text-sm text-gray-600">Nursery 1</span>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-400"></div>
                    <span class="ml-3 text-sm font-medium text-gray-700">No arm</span>
                </label>
            </div>

            <!-- Checkboxes Grid -->
            <div class="grid grid-cols-8 gap-4">
                @foreach(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'] as $arm)
                <label class="flex items-center space-x-2 cursor-pointer">
                    <input type="checkbox" checked class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                    <span class="text-sm text-gray-700">{{ $arm }}</span>
                </label>
                @endforeach
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection

