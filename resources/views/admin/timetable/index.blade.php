@extends('layouts.admin', ['active' => 'timetable'])

@section('title', 'Timetable')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Statistics Cards -->
    <div class="grid grid-cols-4 gap-6 mb-6">
        <!-- Messages Sent -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                </div>
            </div>
            <p class="text-sm text-gray-600 mb-1">Messages Sent</p>
            <p class="text-3xl font-bold text-gray-900">1,234</p>
        </div>

        <!-- Inbox -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                </div>
            </div>
            <p class="text-sm text-gray-600 mb-1">Inbox</p>
            <p class="text-3xl font-bold text-gray-900">3</p>
        </div>

        <!-- Unread -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>
            <p class="text-sm text-gray-600 mb-1">Unread</p>
            <p class="text-3xl font-bold text-gray-900">2</p>
        </div>

        <!-- Announcements -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                </div>
            </div>
            <p class="text-sm text-gray-600 mb-1">Announcements</p>
            <p class="text-3xl font-bold text-gray-900">3</p>
        </div>
    </div>

    <!-- Tabs -->
    <div class="bg-white rounded-lg border border-gray-200">
        <!-- Tab Headers -->
        <div class="border-b border-gray-200">
            <nav class="flex space-x-8 px-6" aria-label="Tabs">
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Messages
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Inbox
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Unread
                </button>
                <button class="py-4 px-1 border-b-2 border-orange-400 text-orange-600 font-medium text-sm">
                    Announcements
                </button>
            </nav>
        </div>

        <!-- Announcements Content -->
        <div class="p-6">
            <div class="mb-6">
                <h3 class="text-lg font-bold text-gray-900 mb-2">Announcements</h3>
                <p class="text-sm text-gray-600">Read and manage platform-wide announcements</p>
            </div>

            <!-- Search and Filter -->
            <div class="mb-6 flex items-center justify-between">
                <div class="relative flex-1 max-w-md">
                    <input type="text" placeholder="Search teachers..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div>
                    <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <option>All Messages</option>
                    </select>
                </div>
            </div>

            <!-- Announcements List -->
            <div class="space-y-4">
                <!-- Announcement 1 -->
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-3">
                                <h4 class="text-lg font-bold text-gray-900">Platform Updates v2.5</h4>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium">Medium</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium">General</span>
                                <span class="px-3 py-1 bg-gray-900 text-white rounded-full text-xs font-medium">Published</span>
                            </div>
                            <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                                <span>Published: 20/06/2024</span>
                                <span>•</span>
                                <span>Expires: 20/06/2024</span>
                                <span>•</span>
                                <span>1247 views</span>
                                <span>•</span>
                                <span>All Schools</span>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.
                            </p>
                            <p class="text-gray-700 leading-relaxed mt-2">
                                The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.
                            </p>
                        </div>
                        <div class="flex items-center space-x-2 ml-4">
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                            <button class="p-2 text-gray-400 hover:text-red-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Announcement 2 -->
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-3">
                                <h4 class="text-lg font-bold text-gray-900">Emergency Contact Update</h4>
                                <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-medium">High</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium">Emergency</span>
                                <span class="px-3 py-1 bg-gray-900 text-white rounded-full text-xs font-medium">Published</span>
                            </div>
                            <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                                <span>Published: 20/06/2024</span>
                                <span>•</span>
                                <span>Expires: 20/06/2024</span>
                                <span>•</span>
                                <span>1247 views</span>
                                <span>•</span>
                                <span>All Schools</span>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.
                            </p>
                            <p class="text-gray-700 leading-relaxed mt-2">
                                The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.
                            </p>
                        </div>
                        <div class="flex items-center space-x-2 ml-4">
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                            <button class="p-2 text-gray-400 hover:text-red-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Announcement 3 -->
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-3">
                                <h4 class="text-lg font-bold text-gray-900">Platform Updates v2.5</h4>
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">Low</span>
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-medium">Academic</span>
                                <span class="px-3 py-1 bg-gray-900 text-white rounded-full text-xs font-medium">Published</span>
                            </div>
                            <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                                <span>Published: 20/06/2024</span>
                                <span>•</span>
                                <span>Expires: 20/06/2024</span>
                                <span>•</span>
                                <span>1247 views</span>
                                <span>•</span>
                                <span>All Schools</span>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.
                            </p>
                            <p class="text-gray-700 leading-relaxed mt-2">
                                The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.
                            </p>
                        </div>
                        <div class="flex items-center space-x-2 ml-4">
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                            <button class="p-2 text-gray-400 hover:text-red-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-500">COPYRIGHT © 2025</p>
            </div>
        </div>
    </div>
</div>
@endsection

