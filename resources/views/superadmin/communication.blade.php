@extends('layouts.superadmin', ['active' => 'communication'])

@section('title', 'Communication Center')
@section('page-title', 'Communication Center')
@section('page-description', 'Send messages, announcements and manage communication templates')

@section('header-actions')
    <button class="px-4 py-2 text-gray-700 border border-gray-300 rounded-lg font-medium hover:bg-gray-50 transition-colors mr-3" style="font-family: 'Sitka', Georgia, serif;">
        <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
        </svg>
        Export PDF
    </button>
    <button class="px-4 py-2 text-gray-700 border border-gray-300 rounded-lg font-medium hover:bg-gray-50 transition-colors" style="font-family: 'Sitka', Georgia, serif;">
        <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
        </svg>
        Export Excel
    </button>
@endsection

@section('content')
<div class="p-8 space-y-6">
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Messages Sent -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between">
                <div class="flex-1">
                    <p class="text-sm text-gray-600 mb-2" style="font-family: 'Sitka', Georgia, serif;">Messages Sent</p>
                    <p class="text-3xl font-bold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">1,234</p>
                </div>
                <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background-color: #E0F2FE;">
                    <svg class="w-6 h-6" style="color: #0284C7;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Announcements -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between">
                <div class="flex-1">
                    <p class="text-sm text-gray-600 mb-2" style="font-family: 'Sitka', Georgia, serif;">Announcements</p>
                    <p class="text-3xl font-bold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">3</p>
                </div>
                <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background-color: #D1FAE5;">
                    <svg class="w-6 h-6" style="color: #059669;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Total Recipients -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between">
                <div class="flex-1">
                    <p class="text-sm text-gray-600 mb-2" style="font-family: 'Sitka', Georgia, serif;">Total Recipients</p>
                    <p class="text-3xl font-bold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">87,563</p>
                </div>
                <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background-color: #FEF3C7;">
                    <svg class="w-6 h-6" style="color: #D97706;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="flex space-x-2">
        <button onclick="showTab('messages')" id="tab-messages" class="px-6 py-2 rounded-lg text-sm font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
            Messages
        </button>
        <button onclick="showTab('announcements')" id="tab-announcements" class="px-6 py-2 rounded-lg text-sm font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">
            Announcements
        </button>
        <button onclick="showTab('bulk-actions')" id="tab-bulk-actions" class="px-6 py-2 rounded-lg text-sm font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">
            Bulk Actions
        </button>
    </div>

    <!-- Messages Tab Content -->
    <div id="content-messages" class="tab-content">
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-lg font-semibold mb-1" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Messages</h3>
                    <p class="text-sm text-gray-600" style="font-family: 'Sitka', Georgia, serif;">Send and manage messages to schools and users</p>
                </div>
                <button class="px-4 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                    + New Message
                </button>
            </div>

            <!-- Search -->
            <div class="mb-6">
                <div class="relative">
                    <input type="text" placeholder="Search teachers..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent" style="font-family: 'Sitka', Georgia, serif; focus:ring-color: #FDAF22;">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <!-- Filter Dropdown -->
            <div class="flex items-center justify-between mb-6">
                <div></div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent" style="font-family: 'Sitka', Georgia, serif;">
                    <option>All Messages</option>
                    <option>Sent</option>
                    <option>Scheduled</option>
                    <option>Drafts</option>
                </select>
            </div>

            <!-- Messages List -->
            <div class="space-y-4">

            <!-- Messages List -->
            <div class="space-y-4">
                <!-- Message 1 -->
                <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center mb-2">
                                <h4 class="font-semibold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Welcome to New Academic Year</h4>
                                <span class="ml-3 px-2 py-1 bg-gray-900 text-white text-xs rounded" style="font-family: 'Sitka', Georgia, serif;">Sent</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-2" style="font-family: 'Sitka', Georgia, serif;">The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.</p>
                            <div class="flex items-center text-xs text-gray-500 space-x-3" style="font-family: 'Sitka', Georgia, serif;">
                                <span>To: All Schools</span>
                                <span>•</span>
                                <span>20/06/2024</span>
                                <span>•</span>
                                <span>98/124 read</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 ml-4">
                            <button class="p-2 hover:bg-gray-100 rounded">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                </svg>
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Message 2 -->
                <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center mb-2">
                                <h4 class="font-semibold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">System Maintenance Notice</h4>
                                <span class="ml-3 px-2 py-1 text-xs rounded" style="font-family: 'Sitka', Georgia, serif; background-color: #E5E7EB; color: #374151;">Scheduled</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-2" style="font-family: 'Sitka', Georgia, serif;">The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.</p>
                            <div class="flex items-center text-xs text-gray-500 space-x-3" style="font-family: 'Sitka', Georgia, serif;">
                                <span>To: All Users</span>
                                <span>•</span>
                                <span>20/06/2024</span>
                                <span>•</span>
                                <span>98/124 read</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 ml-4">
                            <button class="p-2 hover:bg-gray-100 rounded">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                </svg>
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Message 3 -->
                <div class="border border-gray-200 rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center mb-2">
                                <h4 class="font-semibold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Teacher Training Workshop</h4>
                                <span class="ml-3 px-2 py-1 bg-gray-900 text-white text-xs rounded" style="font-family: 'Sitka', Georgia, serif;">Sent</span>
                            </div>
                            <p class="text-sm text-gray-600 mb-2" style="font-family: 'Sitka', Georgia, serif;">The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.</p>
                            <div class="flex items-center text-xs text-gray-500 space-x-3" style="font-family: 'Sitka', Georgia, serif;">
                                <span>To: All Users</span>
                                <span>•</span>
                                <span>20/06/2024</span>
                                <span>•</span>
                                <span>98/124 read</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 ml-4">
                            <button class="p-2 hover:bg-gray-100 rounded">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                </svg>
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Announcements Tab Content -->
    <div id="content-announcements" class="tab-content hidden">
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-lg font-semibold mb-1" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Announcements</h3>
                    <p class="text-sm text-gray-600" style="font-family: 'Sitka', Georgia, serif;">Create and manage platform-wide announcements</p>
                </div>
                <button class="px-4 py-2 rounded-lg font-medium transition-colors flex items-center" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    New Announcement
                </button>
            </div>

            <!-- Search and Filter -->
            <div class="flex items-center justify-between mb-6 gap-4">
                <div class="flex-1 relative">
                    <input type="text" placeholder="Search teachers..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent" style="font-family: 'Sitka', Georgia, serif;">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent" style="font-family: 'Sitka', Georgia, serif;">
                    <option>All Messages</option>
                    <option>Active</option>
                    <option>Archived</option>
                </select>
            </div>

            <!-- Announcements List -->
            <div class="space-y-4">
                <!-- Announcement 1 -->
                <div class="border border-gray-200 rounded-lg p-6 bg-white">
                    <div class="flex items-start justify-between mb-3">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-3">
                                <h4 class="text-base font-semibold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Platform Updates v2.5</h4>
                                <span class="px-3 py-1 text-xs font-medium rounded" style="font-family: 'Sitka', Georgia, serif; background-color: #6B7280; color: #fff;">Medium</span>
                                <span class="px-3 py-1 text-xs font-medium rounded" style="font-family: 'Sitka', Georgia, serif; background-color: #1F2937; color: #fff;">General</span>
                                <span class="px-3 py-1 text-xs font-medium rounded" style="font-family: 'Sitka', Georgia, serif; background-color: #000; color: #fff;">Published</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="p-2 hover:bg-gray-100 rounded transition-colors">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded transition-colors">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                </svg>
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded transition-colors">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="text-sm text-gray-700 leading-relaxed mb-2" style="font-family: 'Sitka', Georgia, serif;">The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.</p>
                        <p class="text-sm text-gray-700 leading-relaxed" style="font-family: 'Sitka', Georgia, serif;">The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.</p>
                    </div>
                    <div class="flex items-center text-xs text-gray-500 gap-2" style="font-family: 'Sitka', Georgia, serif;">
                        <span>Published: 30/06/2024</span>
                        <span>•</span>
                        <span>Expires: 20/06/2024</span>
                        <span>•</span>
                        <span>1247 views</span>
                        <span>•</span>
                        <span>All Schools</span>
                    </div>
                </div>

                <!-- Announcement 2 -->
                <div class="border border-gray-200 rounded-lg p-6 bg-white">
                    <div class="flex items-start justify-between mb-3">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-3">
                                <h4 class="text-base font-semibold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Emergency Contact Update</h4>
                                <span class="px-3 py-1 text-xs font-medium rounded" style="font-family: 'Sitka', Georgia, serif; background-color: #6B7280; color: #fff;">High</span>
                                <span class="px-3 py-1 text-xs font-medium rounded" style="font-family: 'Sitka', Georgia, serif; background-color: #1F2937; color: #fff;">Emergency</span>
                                <span class="px-3 py-1 text-xs font-medium rounded" style="font-family: 'Sitka', Georgia, serif; background-color: #000; color: #fff;">Published</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="p-2 hover:bg-gray-100 rounded transition-colors">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded transition-colors">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                </svg>
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded transition-colors">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="text-sm text-gray-700 leading-relaxed mb-2" style="font-family: 'Sitka', Georgia, serif;">The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.</p>
                        <p class="text-sm text-gray-700 leading-relaxed" style="font-family: 'Sitka', Georgia, serif;">The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.</p>
                    </div>
                    <div class="flex items-center text-xs text-gray-500 gap-2" style="font-family: 'Sitka', Georgia, serif;">
                        <span>Published: 30/06/2024</span>
                        <span>•</span>
                        <span>Expires: 20/06/2024</span>
                        <span>•</span>
                        <span>1247 views</span>
                        <span>•</span>
                        <span>All Schools</span>
                    </div>
                </div>

                <!-- Announcement 3 -->
                <div class="border border-gray-200 rounded-lg p-6 bg-white">
                    <div class="flex items-start justify-between mb-3">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-3">
                                <h4 class="text-base font-semibold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Platform Updates v2.5</h4>
                                <span class="px-3 py-1 text-xs font-medium rounded" style="font-family: 'Sitka', Georgia, serif; background-color: #9CA3AF; color: #fff;">Low</span>
                                <span class="px-3 py-1 text-xs font-medium rounded" style="font-family: 'Sitka', Georgia, serif; background-color: #1F2937; color: #fff;">Academic</span>
                                <span class="px-3 py-1 text-xs font-medium rounded" style="font-family: 'Sitka', Georgia, serif; background-color: #000; color: #fff;">Published</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="p-2 hover:bg-gray-100 rounded transition-colors">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded transition-colors">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                </svg>
                            </button>
                            <button class="p-2 hover:bg-gray-100 rounded transition-colors">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="text-sm text-gray-700 leading-relaxed mb-2" style="font-family: 'Sitka', Georgia, serif;">The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.</p>
                        <p class="text-sm text-gray-700 leading-relaxed" style="font-family: 'Sitka', Georgia, serif;">The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.</p>
                    </div>
                    <div class="flex items-center text-xs text-gray-500 gap-2" style="font-family: 'Sitka', Georgia, serif;">
                        <span>Published: 30/06/2024</span>
                        <span>•</span>
                        <span>Expires: 20/06/2024</span>
                        <span>•</span>
                        <span>1247 views</span>
                        <span>•</span>
                        <span>All Schools</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bulk Actions Tab Content -->
    <div id="content-bulk-actions" class="tab-content hidden">
        <div class="bg-white rounded-lg border border-gray-200 p-6 mb-6">
            <div class="mb-6">
                <h3 class="text-lg font-semibold mb-1" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Bulk Communication</h3>
                <p class="text-sm text-gray-600" style="font-family: 'Sitka', Georgia, serif;">Send mass emails and sms to multiple recipients</p>
            </div>

            <!-- Bulk Actions Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Bulk Email -->
                <div class="border border-gray-200 rounded-lg p-6">
                    <div class="flex items-center justify-center w-16 h-16 rounded-lg mb-4" style="background-color: #F3F4F6;">
                        <svg class="w-8 h-8" style="color: #374151;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Bulk Email</h4>
                    <p class="text-sm text-gray-600 mb-4" style="font-family: 'Sitka', Georgia, serif;">Send emails to all users at once</p>
                    <button class="w-full px-4 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                        Send Bulk Email
                    </button>
                </div>

                <!-- Bulk SMS -->
                <div class="border border-gray-200 rounded-lg p-6">
                    <div class="flex items-center justify-center w-16 h-16 rounded-lg mb-4" style="background-color: #F3F4F6;">
                        <svg class="w-8 h-8" style="color: #374151;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Bulk SMS</h4>
                    <p class="text-sm text-gray-600 mb-4" style="font-family: 'Sitka', Georgia, serif;">Send SMS message  to all users at once</p>
                    <button class="w-full px-4 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                        Send Bulk SMS
                    </button>
                </div>
            </div>
        </div>

        <!-- Communication Statistics -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="mb-6">
                <h3 class="text-lg font-semibold mb-1" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Communication Statistics</h3>
                <p class="text-sm text-gray-600" style="font-family: 'Sitka', Georgia, serif;">Overview of bulk communication activities</p>
            </div>

            <!-- Statistics Items -->
            <div class="space-y-4">
                <!-- Total Emails Sent -->
                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                    <div class="flex-1">
                        <p class="text-sm text-gray-600 mb-1" style="font-family: 'Sitka', Georgia, serif;">Total Emails Sent (This Month)</p>
                        <p class="text-2xl font-bold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">12,456</p>
                    </div>
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #D1FAE5;">
                        <svg class="w-6 h-6" style="color: #059669;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>

                <!-- Total SMS Sent -->
                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                    <div class="flex-1">
                        <p class="text-sm text-gray-600 mb-1" style="font-family: 'Sitka', Georgia, serif;">Total SMS Sent (This Month)</p>
                        <p class="text-2xl font-bold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">8,234</p>
                    </div>
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #D1FAE5;">
                        <svg class="w-6 h-6" style="color: #059669;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>

                <!-- Delivery Rate -->
                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                    <div class="flex-1">
                        <p class="text-sm text-gray-600 mb-1" style="font-family: 'Sitka', Georgia, serif;">Delivery Rate</p>
                        <p class="text-2xl font-bold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">95.5%</p>
                    </div>
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #D1FAE5;">
                        <svg class="w-6 h-6" style="color: #059669;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>

                <!-- Failed Deliveries -->
                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                    <div class="flex-1">
                        <p class="text-sm text-gray-600 mb-1" style="font-family: 'Sitka', Georgia, serif;">Failed Deliveries</p>
                        <p class="text-2xl font-bold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">187</p>
                    </div>
                    <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background-color: #FEE2E2;">
                        <svg class="w-6 h-6" style="color: #DC2626;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages List -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 flex flex-col gap-8">
            <div class="flex items-center justify-between gap-3">
                <div class="flex flex-col gap-2">
                    <h2 class=" font-fredoka text-h6 text-primary">Messages</h2>
                    <p class="text-body4 text-primary ">Send and manage messages to schools and users</p>
                </div>
                <button
                    class="px-4 py-2 bg-accent text-gray-900 rounded-lg font-medium hover:bg-accent-hover transition-colors flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    New Message
                </button>
            </div>
            <div class="flex items-center gap-4 justify-between">
                <div class="relative w-125">
                    <input type="text" placeholder="Search messages..."
                        class="w-full pl-10 pr-4 py-2 bg-[#F5F5F5] rounded-full focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                    <svg class="w-5 h-5 text-search absolute left-3 top-2.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <select
                    class="px-4 py-2 text-primary border border-[#AAC3C6] rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    <option>All Recipients</option>
                    <option>All Schools</option>
                    <option>Specific Schools</option>
                    <option>All Teachers</option>
                    <option>All Parents</option>
                </select>

            </div>
            <div class="flex flex-col gap-6">
                <!-- Message 1 -->
                <div class="p-6 flex flex-col gap-7 border border-school-btn rounded-2xl hover:bg-gray-50 cursor-pointer">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center font-sitka">
                                <h3 class="text-body1 font-semibold text-black">Platform Update - New Features Available
                                </h3>
                                <span
                                    class="ml-3 px-2 py-1 bg-black text-white text-xs font-medium rounded">Sent</span>
                            </div>
                             <div class="flex items-center gap-1 text-xs text-primary space-x-4">

                                <span class="flex items-center">
                                   <span>To:</span>
                                    234 recipients
                                </span>
                                <span>•</span>
                                <span class="flex items-center">
                                    203 opened (87%)
                                </span>
                                <span>•</span>
                                <span>Jan 15, 2024 at 10:30 AM</span>
                            </div>

                        </div>
                        <div class="flex items-center gap-2">
                            <button><i class="fa-solid fa-pen-to-square text-[#AAADAD]"></i></button>
                            <button><i class="fa-solid fa-eye text-[#AAADAD]"></i></button>
                            <button><i class="fa-solid fa-trash text-[#AAADAD]"></i></button>
                        </div>
                    </div>
                    <div class="font-sitka text-black text-body2">
                        <p>The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared. The mid-term examination schedule for all grades has been published. Students can check their exam dates and timings on the student portal. Please ensure you're well-prepared.</p>
                    </div>
                </div>

                <!-- Message 2 -->
                
            </div>

            <!-- Pagination -->
            <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                <p class="text-sm text-gray-600">Showing 1-5 of 1,247 messages</p>
                <div class="flex items-center space-x-2">
                    <button
                        class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 disabled:opacity-50"
                        disabled>
                        Previous
                    </button>
                    <button class="px-4 py-2 bg-gray-900 text-white rounded-lg">1</button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">2</button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">3</button>
                    <span class="px-2">...</span>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">250</button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function showTab(tabName) {
    console.log('Switching to tab:', tabName);

    // Hide all tab contents
    document.querySelectorAll('.tab-content').forEach(content => {
        content.classList.add('hidden');
    });

    // Remove active styling from all tabs
    document.querySelectorAll('[id^="tab-"]').forEach(tab => {
        tab.style.backgroundColor = 'transparent';
        tab.style.color = '#004A53';
    });

    // Show selected tab content
    const contentElement = document.getElementById('content-' + tabName);
    console.log('Content element:', contentElement);
    if (contentElement) {
        contentElement.classList.remove('hidden');
    }

    // Add active styling to selected tab
    const activeTab = document.getElementById('tab-' + tabName);
    if (activeTab) {
        activeTab.style.backgroundColor = '#FDAF22';
        activeTab.style.color = '#000';
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    console.log('Page loaded, initializing tabs');
    showTab('messages');
});
</script>
@endpush
@endsection
