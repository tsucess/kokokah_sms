@extends('layouts.superadmin', ['active' => 'schools'])

@section('title', 'Schools')
@section('page-title', 'Schools')
@section('page-description', 'Manage and oversee your school management platform')

@section('header-actions')
    <button class="px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg font-medium hover:bg-yellow-500 transition-colors flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        Add New School
    </button>
@endsection

@section('content')
<div class="p-8 space-y-6">
    <!-- Filter Tabs and Search -->
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <button class="px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg font-medium text-sm">
                All
            </button>
            <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg font-medium text-sm hover:bg-gray-50">
                Active
            </button>
            <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg font-medium text-sm hover:bg-gray-50">
                Inactive
            </button>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="relative">
        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        <input type="text" placeholder="Search schools..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
    </div>

    <!-- Schools Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @for ($i = 0; $i < 9; $i++)
        <!-- School Card -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <!-- Header -->
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-start space-x-3">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                        <span class="text-xl font-bold text-orange-600">G</span>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Greenwood Academy</h3>
                        <div class="flex items-center text-sm text-gray-600 mt-1">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Lagos, Nigeria</span>
                        </div>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </button>
            </div>

            <!-- School Type Badges -->
            <div class="flex items-center space-x-2 mb-4">
                <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-blue-50 text-blue-700 border border-blue-200">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    View School
                </span>
                <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-green-50 text-green-700 border border-green-200">
                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Public School
                </span>
            </div>

            <!-- Stats -->
            <div class="space-y-3 mb-4">
                <div class="flex items-center justify-between text-sm">
                    <div class="flex items-center text-gray-600">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span>Students:</span>
                    </div>
                    <span class="font-semibold text-gray-900">3,200</span>
                </div>
                <div class="flex items-center justify-between text-sm">
                    <div class="flex items-center text-gray-600">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Teachers:</span>
                    </div>
                    <span class="font-semibold text-gray-900">245</span>
                </div>
                <div class="flex items-center justify-between text-sm">
                    <div class="flex items-center text-gray-600">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>Joined:</span>
                    </div>
                    <span class="font-semibold text-gray-900">20/04/2025</span>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                <button class="px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg font-medium text-sm hover:bg-yellow-500">
                    {{ $i % 3 === 0 ? 'active' : ($i % 3 === 1 ? 'Inactive' : 'active') }}
                </button>
                <span class="text-sm font-medium text-gray-700">{{ $i % 3 === 0 ? 'Standard' : 'Premium' }}</span>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection

