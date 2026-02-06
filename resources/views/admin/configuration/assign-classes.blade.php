@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'Assign Classes')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-8">
        <!-- Back Button -->
        <div class="mb-6 flex items-center">
            <a href="{{ route('admin.configuration.academic-sessions') }}"
                class="flex items-center text-orange-500 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Academic Sessions
            </a>
            <span class="text-gray-400 mx-2">/</span>
            <span class="text-gray-600">First year 2025/2026 Session</span>
        </div>

        <!-- Header -->
        <div class="mb-6 space-y-2">
            <h2 class="text-2xl font-bold text-primary font-fredoka">First year</h2>
            <p class="text-primary font-sitka text-sm mb-8">2025/2026 Session</p>
        </div>

        <!-- Term Date Inputs -->
        <div class="grid grid-cols-5 gap-4 mb-6">
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Term
                    Start Date</label>
                <input type="date" value="2025-10-03" class="w-full outline-none text-primary text-sm">
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Term End
                    Date</label>
                <input type="date" value="2025-10-03" class="w-full outline-none text-primary text-sm">
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Next
                    Term Start Date</label>
                <input type="date" value="2025-10-03" class="w-full outline-none text-primary text-sm">
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Mid Term
                    Date</label>
                <input type="date" value="2025-10-05" class="w-full outline-none text-primary text-sm">
            </div>
            <div class="flex items-end">
                <button class="w-full px-6 py-3 bg-accent text-black rounded-lg hover:bg-accent-hover transition-colors">
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
                <a href="#"
                    class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                    Formats
                </a>
                <a href="#"
                    class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                    Early Years
                </a>
                <a href="#"
                    class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                    Skills
                </a>
                <a href="#"
                    class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                    Subject Traits
                </a>
            </nav>
        </div>

        <!-- Class Assignment Sections -->
        <div class="space-y-6">
            @for ($section = 1; $section <= 4; $section++)
                <!-- Class Section -->
                <div class="flex flex-col gap-7">
                    <div class="flex items-center space-x-4 border border-black rounded-lg px-6 py-5 bg-gray50">
                        <span class="text-xs font-semibold text-gray100">Nur 1</span>
                        <span class="text-xs font-semibold text-gray100">Nursery 1</span>
                    </div>
                    <div class="flex items-center gap-20">
                        <label class="relative inline-flex items-center cursor-pointer shrink-0">
                            <input type="checkbox" class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-superadmin-bg after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-400">
                            </div>
                            <span class="ml-3 text-sm font-medium text-gray-700">No arm</span>
                        </label>
                        <!-- Checkboxes Grid -->
                        <div class="grid grid-cols-8 gap-6 flex-1">
                            @foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'] as $arm)
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="checkbox" checked
                                        class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                                    <span class="text-sm text-gray-700">{{ $arm }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
