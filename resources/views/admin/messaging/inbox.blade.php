@extends('layouts.admin', ['active' => 'messaging'])

@section('title', 'Messaging')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Statistics Cards -->
    <div class="grid grid-cols-4 gap-6 mb-6">
        <!-- Messages Sent -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Messages Sent</p>
                <div class="p-2 bg-blue-100 rounded-lg">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>
            <p class="text-4xl font-bold text-teal-900">1,234</p>
        </div>

        <!-- Inbox -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Inbox</p>
                <div class="p-2 bg-blue-100 rounded-lg">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                </div>
            </div>
            <p class="text-4xl font-bold text-teal-900">3</p>
        </div>

        <!-- Unread -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Unread</p>
                <div class="p-2 bg-blue-100 rounded-lg">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                    </svg>
                </div>
            </div>
            <p class="text-4xl font-bold text-teal-900">2</p>
        </div>

        <!-- Announcements -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Announcements</p>
                <div class="p-2 bg-green-100 rounded-lg">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                </div>
            </div>
            <p class="text-4xl font-bold text-teal-900">3</p>
        </div>
    </div>

    <!-- Tab Navigation -->
    <div class="mb-6 border-b border-gray-200">
        <nav class="flex space-x-8">
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Messages
            </a>
            <a href="#" class="text-orange-400 py-4 px-1 border-b-2 border-orange-400 font-medium text-sm">
                Inbox
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Unread
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Announcements
            </a>
        </nav>
    </div>

    <!-- Section Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-teal-900 mb-1">Inbox</h2>
        <p class="text-sm text-gray-600">Send and manage messages to schools and users</p>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <div class="relative max-w-md">
            <input type="text" placeholder="Search teachers..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Message Cards -->
    <div class="space-y-4">
        <!-- Message 1 - Welcome to New Academic Year -->
        <div class="bg-white rounded-lg border-l-4 border-orange-400 shadow-sm p-6">
            <div class="flex items-start justify-between">
                <div class="flex-1">
                    <div class="flex items-center mb-2">
                        <h3 class="text-lg font-semibold text-gray-900 mr-3">Welcome to New Academic Year</h3>
                        <span class="px-2 py-1 bg-black text-white text-xs rounded">Sent</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-2">To: All Schools</p>
                    <p class="text-sm text-gray-700 mb-3">
                        Dear Parents and Guardians, We are excited to welcome you to the new academic year! This year promises to be filled with exciting learning opportunities...
                    </p>
                    <div class="flex items-center text-sm text-gray-500">
                        <span>20/06/2024</span>
                        <span class="mx-2">•</span>
                        <span>98/124 read</span>
                    </div>
                </div>
                <div class="flex items-center space-x-2 ml-4">
                    <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </button>
                    <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                    <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Message 2 - System Maintenance Notice -->
        <div class="bg-white rounded-lg border-l-4 border-gray-300 shadow-sm p-6">
            <div class="flex items-start justify-between">
                <div class="flex-1">
                    <div class="flex items-center mb-2">
                        <h3 class="text-lg font-semibold text-gray-900 mr-3">System Maintenance Notice</h3>
                        <span class="px-2 py-1 bg-gray-200 text-gray-700 text-xs rounded">Scheduled</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-2">To: All Users</p>
                    <p class="text-sm text-gray-700 mb-3">
                        Please be informed that the system will undergo scheduled maintenance on Saturday, June 22nd from 2:00 AM to 6:00 AM. During this time...
                    </p>
                    <div class="flex items-center text-sm text-gray-500">
                        <span>20/06/2024</span>
                        <span class="mx-2">•</span>
                        <span>45/124 read</span>
                    </div>
                </div>
                <div class="flex items-center space-x-2 ml-4">
                    <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </button>
                    <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                    <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Message 3 - Teacher Training Workshop -->
        <div class="bg-white rounded-lg border-l-4 border-orange-400 shadow-sm p-6">
            <div class="flex items-start justify-between">
                <div class="flex-1">
                    <div class="flex items-center mb-2">
                        <h3 class="text-lg font-semibold text-gray-900 mr-3">Teacher Training Workshop</h3>
                        <span class="px-2 py-1 bg-black text-white text-xs rounded">Sent</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-2">To: All Users</p>
                    <p class="text-sm text-gray-700 mb-3">
                        We are pleased to announce a professional development workshop for all teaching staff. The workshop will focus on innovative teaching methodologies...
                    </p>
                    <div class="flex items-center text-sm text-gray-500">
                        <span>20/06/2024</span>
                        <span class="mx-2">•</span>
                        <span>112/124 read</span>
                    </div>
                </div>
                <div class="flex items-center space-x-2 ml-4">
                    <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </button>
                    <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                    <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

