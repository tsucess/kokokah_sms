@extends('layouts.superadmin', ['active' => 'communication'])

@section('title', 'Communication Center')
@section('page-title', 'Communication Center')
@section('page-description', 'Send messages, announcements and manage communication templates')

@section('header-actions')
    <button
        class="px-4 py-2 text-primary text-body3 font-fredoka border border-communicationBtn rounded-lg font-medium hover:bg-gray-50 transition-colors mr-3">
        <i class="fa-solid fa-download text-black"></i>
        Export PDF
    </button>
    <button
        class="px-4 py-2 text-primary text-body3 font-fredoka border border-communicationBtn rounded-lg font-medium hover:bg-gray-50 transition-colors">
        <i class="fa-solid fa-download text-black"></i>
        Export Excel
    </button>
@endsection

@section('content')
    <style>
        .active-tab {
            background-color: #fdaf22;
            color: #004A53;
            border-color: #fdaf22;
        }

        .active-tab:hover {
            background-color: #feca6c;
        }

        .hidden {
            display: none;
        }

        .dark-btn {
            background-color: #000000;
            color: #FFFFFF;
        }

        .bordered-btn {
            border: 1px solid #8E8D93;
            background-color: transparent;
            color: #000F11;
        }

        .grayed-btn {
            background-color: #E0E0E0;
            color: #000F11;
        }
    </style>
    <div class="p-8 space-y-6">
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Messages Sent -->
            <div class="bg-white rounded-lg border border-school-btn p-6">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center bg-messageBg">
                        <svg class="w-6 h-6" style="color: #3D5EE1;" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </div>
                    <div class="flex-1 gap-4">
                        <p class="text-body4 text-primary font-fredoka">Messages Sent</p>
                        <p class="text-3xl font-bold font-sitka text-primary">1,234</p>
                    </div>

                </div>
            </div>

            <!-- Announcements -->
            <div class="bg-white rounded-lg border border-school-btn p-6">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center bg-annoucementBg">
                        <svg class="w-6 h-6" style="color: #1AAE50;" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                        </svg>
                    </div>
                    <div class="flex-1 gap-4">
                        <p class="text-body4 text-primary font-fredoka">Announcements</p>
                        <p class="text-3xl font-bold font-sitka text-primary">3</p>
                    </div>

                </div>
            </div>

            <!-- Total Recipients -->
            <div class="bg-white rounded-lg border border-school-btn p-6">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center bg-recipentBg">
                        <svg class="w-6 h-6" style="color: #E77E00;" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="flex-1 gap-4">
                        <p class="text-body4 text-primary font-fredoka">Total Recipients</p>
                        <p class="text-3xl font-bold font-sitka text-primary">87,563</p>
                    </div>

                </div>
            </div>
        </div>

        <!-- Tabs -->
        <div class="flex">
            <button onclick="showTab('messages')" id="tab-messages"
                class="px-6 py-2 text-sm rounded-l-lg font-fredoka border border-primary text-primary bg-white hover:bg-gray-200 transition-colors">
                Messages
            </button>
            <button onclick="showTab('announcements')" id="tab-announcements"
                class="px-6 py-2 text-sm font-fredoka border border-primary text-primary bg-white hover:bg-gray-200 transition-colors">
                Announcements
            </button>
            <button onclick="showTab('bulk-actions')" id="tab-bulk-actions"
                class="px-6 py-2 text-sm font-fredoka border border-primary text-primary rounded-r-lg bg-white hover:bg-gray-200 transition-colors">
                Bulk Actions
            </button>
        </div>

        <!-- Messages Tab Content -->
        <div id="content-messages" class="tab-content hidden">
            <div class="bg-white rounded-lg border border-school-btn p-6">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-lg font-semibold mb-1 font-fredoka text-primary">Messages</h3>
                        <p class="text-sm text-gray-600">Send and manage messages to schools and users</p>
                    </div>
                    <button
                        class="px-4 py-2 rounded-lg font-medium bg-accent text-black font-inter hover:bg-accent-hover transition-colors">
                        + New Message
                    </button>
                </div>

                <!-- Search && Filter -->
                <div class="mb-6 flex justify-between items-center gap-7">
                    <div class="relative w-125">
                        <input type="text" placeholder="Search teachers..."
                            class="w-full pl-10 pr-4 py-2 bg-communicationSearch  rounded-full focus:ring-2 focus:border-transparent"
                            style="font-family: 'Sitka', Georgia, serif; focus:ring-color: #FDAF22;">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <select
                        class="px-4 py-2 border border-communicationBtn text-primary rounded-lg focus:ring-2 focus:border-transparent">
                        <option>All Messages</option>
                        <option>Sent</option>
                        <option>Scheduled</option>
                        <option>Drafts</option>
                    </select>
                </div>

                <!-- Filter Dropdown -->


                <!-- Messages List -->
                <div class="space-y-4">

                    <!-- Messages List -->
                    <div class="space-y-4">
                        <!-- Message 1 -->
                        <div class="border border-school-btn rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                            <div class="flex items-start justify-between">
                                <div class="flex-1 flex flex-col gap-4">
                                    <div class="flex flex-col gap-2">
                                        <div class="flex items-center">
                                            <h4 class="font-semibold text-communicationText font-sitka">Welcome to New
                                                Academic
                                                Year</h4>
                                            <span class="ml-3 px-2 py-1 dark-btn text-xs rounded font-fredoka">Sent</span>
                                        </div>
                                        <div class="flex items-center text-xs text-primary space-x-3">
                                            <span>To: All Schools</span>
                                            <span>•</span>
                                            <span>20/06/2024</span>
                                            <span>•</span>
                                            <span>98/124 read</span>
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600">The mid-term examination schedule for all grades has
                                        been published. Students can check their exam dates and timings on the student
                                        portal. Please ensure you're well-prepared.</p>

                                </div>
                                <div class="flex items-center space-x-1">
                                    <button class="p-2 hover:bg-gray-100 rounded">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-gray-100 rounded">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-gray-100 rounded">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Message 2 -->
                        <div class="border border-school-btn rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                            <div class="flex items-start justify-between">
                                <div class="flex-1 flex flex-col gap-4">
                                    <div class="flex flex-col gap-2">
                                        <div class="flex items-center">
                                            <h4 class="font-semibold text-communicationText font-sitka">Welcome to New
                                                Academic
                                                Year</h4>
                                            <span
                                                class="ml-3 px-2 py-1 bordered-btn text-xs rounded font-fredoka">Published</span>
                                        </div>
                                        <div class="flex items-center text-xs text-primary space-x-3">
                                            <span>To: All Schools</span>
                                            <span>•</span>
                                            <span>20/06/2024</span>
                                            <span>•</span>
                                            <span>98/124 read</span>
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600">The mid-term examination schedule for all grades has
                                        been published. Students can check their exam dates and timings on the student
                                        portal. Please ensure you're well-prepared.</p>

                                </div>
                                <div class="flex items-center space-x-1">
                                    <button class="p-2 hover:bg-gray-100 rounded">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-gray-100 rounded">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                        </svg>
                                    </button>
                                    <button class="p-2 hover:bg-gray-100 rounded">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Announcements Tab Content -->
        <div id="content-announcements" class="tab-content hidden">
            <div class="bg-white rounded-lg border border-school-btn p-6">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-lg font-semibold font-fredoka text-primary">Announcements</h3>
                        <p class="text-sm text-gray-600">Create and manage platform-wide announcements</p>
                    </div>
                    <button
                        class="px-4 py-2 flex items-center gap-1 text-body3 rounded-lg font-medium bg-accent text-black font-inter hover:bg-accent-hover transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        New Announcement
                    </button>
                </div>

                <!-- Search and Filter -->
                <div class="mb-6 flex justify-between items-center gap-7">
                    <div class="relative w-125">
                        <input type="text" placeholder="Search teachers..."
                            class="w-full pl-10 pr-4 py-2 bg-communicationSearch  rounded-full focus:ring-2 focus:border-transparent"
                            style="font-family: 'Sitka', Georgia, serif; focus:ring-color: #FDAF22;">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <select
                        class="px-4 py-2 border border-communicationBtn text-primary rounded-lg focus:ring-2 focus:border-transparent">
                        <option>All Messages</option>
                        <option>Sent</option>
                        <option>Scheduled</option>
                        <option>Drafts</option>
                    </select>
                </div>
                <!-- Announcements List -->
                <div class="space-y-4">
                    <!-- Announcement 1 -->
                    <div class="border border-school-btn rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex-1 flex flex-col gap-5">
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center">
                                        <h4 class="font-semibold text-communicationText font-sitka">System Maintenance
                                            Notice
                                        </h4>
                                        <div class="flex items-center gap-2">
                                            <span
                                                class="ml-3 px-2 py-1 text-xs rounded font-fredoka grayed-btn">Medium</span>
                                            <span
                                                class="ml-3 px-2 py-1 text-xs rounded font-fredoka bordered-btn">General</span>
                                            <span
                                                class="ml-3 px-2 py-1 text-xs rounded font-fredoka dark-btn">Published</span>
                                        </div>

                                    </div>
                                    <div class="flex items-center text-xs text-primary space-x-3">
                                        <span>Published: All Users</span>
                                        <span>•</span>
                                        <span>Expired:20/06/2024</span>
                                        <span>•</span>
                                        <span>124 Views</span>
                                        <span>•</span>
                                        <span>All School</span>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600">The mid-term examination schedule for all grades has been
                                    published. Students can check their exam dates and timings on the student portal. Please
                                    ensure you're well-prepared.</p>

                            </div>
                            <div class="flex items-center space-x-1">
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    </svg>
                                </button>
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Announcement 2 -->
                    <div class="border border-school-btn rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex-1 flex flex-col gap-5">
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center">
                                        <h4 class="font-semibold text-communicationText font-sitka">System Maintenance
                                            Notice
                                        </h4>
                                        <div class="flex items-center gap-2">
                                            <span
                                                class="ml-3 px-2 py-1 text-xs rounded font-fredoka grayed-btn">Medium</span>
                                            <span
                                                class="ml-3 px-2 py-1 text-xs rounded font-fredoka bordered-btn">General</span>
                                            <span
                                                class="ml-3 px-2 py-1 text-xs rounded font-fredoka dark-btn">Published</span>
                                        </div>

                                    </div>
                                    <div class="flex items-center text-xs text-primary space-x-3">
                                        <span>Published: All Users</span>
                                        <span>•</span>
                                        <span>Expired:20/06/2024</span>
                                        <span>•</span>
                                        <span>124 Views</span>
                                        <span>•</span>
                                        <span>All School</span>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600">The mid-term examination schedule for all grades has been
                                    published. Students can check their exam dates and timings on the student portal. Please
                                    ensure you're well-prepared.</p>

                            </div>
                            <div class="flex items-center space-x-1">
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    </svg>
                                </button>
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Announcement 3 -->
                    <div class="border border-school-btn rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex-1 flex flex-col gap-5">
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center">
                                        <h4 class="font-semibold text-communicationText font-sitka">System Maintenance
                                            Notice
                                        </h4>
                                        <div class="flex items-center gap-2">
                                            <span
                                                class="ml-3 px-2 py-1 text-xs rounded font-fredoka grayed-btn">Medium</span>
                                            <span
                                                class="ml-3 px-2 py-1 text-xs rounded font-fredoka bordered-btn">General</span>
                                            <span
                                                class="ml-3 px-2 py-1 text-xs rounded font-fredoka dark-btn">Published</span>
                                        </div>

                                    </div>
                                    <div class="flex items-center text-xs text-primary space-x-3">
                                        <span>Published: All Users</span>
                                        <span>•</span>
                                        <span>Expired:20/06/2024</span>
                                        <span>•</span>
                                        <span>124 Views</span>
                                        <span>•</span>
                                        <span>All School</span>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600">The mid-term examination schedule for all grades has been
                                    published. Students can check their exam dates and timings on the student portal. Please
                                    ensure you're well-prepared.</p>

                            </div>
                            <div class="flex items-center space-x-1">
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    </svg>
                                </button>
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bulk Actions Tab Content -->
        <div id="content-bulk-actions" class="tab-content hidden">
            <div class="bg-white rounded-lg border border-school-btn p-6 mb-6 flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="text-lg font-semibold font-fredoka text-primary">Bulk Communication</h3>
                    <p class="text-sm text-primary">Send mass emails and sms to multiple recipients</p>
                </div>

                <!-- Bulk Actions Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Bulk Email -->
                    <div class="border border-school-btn rounded-lg p-6">
                        <div class="mb-6">
                            <svg class="w-12 h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-1 mb-4">
                            <h4 class="text-base font-semibold font-fredoka text-primary">Bulk Email</h4>
                            <p class="text-sm text-primary font-fredoka">Send emails to all users at once</p>
                        </div>

                        <button class="w-full px-4 py-2 rounded-lg font-bold font-sitka text-black bg-accent hover:bg-accent-hover transition-colors">
                            Send Bulk Email
                        </button>
                    </div>

                    <!-- Bulk SMS -->
                    <div class="border border-school-btn rounded-lg p-6">
                        <div class="mb-6">
                            <svg class="w-12 h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="flex flex-col gap-1 mb-4">
                            <h4 class="text-base font-semibold font-fredoka text-primary">Bulk SMS</h4>
                            <p class="text-sm text-primary font-fredoka">Send emails to all users at once</p>
                        </div>

                        <button class="w-full px-4 py-2 rounded-lg font-bold font-sitka text-black bg-accent hover:bg-accent-hover transition-colors">
                            Send Bulk SMS
                        </button>
                    </div>
                </div>
            </div>

            <!-- Communication Statistics -->
            <div class="bg-white rounded-lg border border-school-btn p-6">
                <div class="mb-6 flex flex-col gap-1">
                    <h3 class="text-lg font-semibold font-fredoka text-primary">Communication Statistics</h3>
                    <p class="text-sm text-primary">Overview of bulk communication activities</p>
                </div>

                <!-- Statistics Items -->
                <div class="space-y-4">
                    <!-- Total Emails Sent -->
                    <div class="flex items-center justify-between p-4 bg-bulkBg rounded-lg">
                        <div class="flex-1">
                            <p class="text-sm text-bulkGreyText mb-1">Total Emails Sent (This Month)</p>
                            <p class="text-xl font-bold text-primary font-fredoka">12,456</p>
                        </div>
                        <div class="w-12 h-12 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" style="color: #059669;" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Total SMS Sent -->
                    <div class="flex items-center justify-between p-4 bg-bulkBg rounded-lg">
                        <div class="flex-1">
                            <p class="text-sm text-bulkGreyText mb-1">Total Emails Sent (This Month)</p>
                            <p class="text-xl font-bold text-primary font-fredoka">12,456</p>
                        </div>
                        <div class="w-12 h-12 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" style="color: #059669;" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Delivery Rate -->
                    <div class="flex items-center justify-between p-4 bg-bulkBg rounded-lg">
                        <div class="flex-1">
                            <p class="text-sm text-bulkGreyText mb-1">Total Emails Sent (This Month)</p>
                            <p class="text-xl font-bold text-primary font-fredoka">12,456</p>
                        </div>
                        <div class="w-12 h-12 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" style="color: #059669;" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Failed Deliveries -->
                    <div class="flex items-center justify-between p-4 bg-bulkBg rounded-lg">
                        <div class="flex-1">
                            <p class="text-sm text-bulkGreyText mb-1">Failed Deliveries</p>
                            <p class="text-xl font-bold text-primary font-fredoka">187</p>
                        </div>
                        <div class="w-12 h-12 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" style="color: #DC2626;" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Messages List -->
            {{-- <div class="bg-white rounded-lg border border-school-btn p-6 flex flex-col gap-8">
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
                    class="px-4 py-2 text-primary border border-communicationBtn rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
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
            <div class="px-6 py-4 border-t border-school-btn flex items-center justify-between">
                <p class="text-sm text-gray-600">Showing 1-5 of 1,247 messages</p>
                <div class="flex items-center space-x-2">
                    <button
                        class="px-4 py-2 border border-communicationBtn text-primaryrounded-lg hover:bg-gray-50 disabled:opacity-50"
                        disabled>
                        Previous
                    </button>
                    <button class="px-4 py-2 bg-gray-900 text-white rounded-lg">1</button>
                    <button class="px-4 py-2 border border-communicationBtn text-primaryrounded-lg hover:bg-gray-50">2</button>
                    <button class="px-4 py-2 border border-communicationBtn text-primaryrounded-lg hover:bg-gray-50">3</button>
                    <span class="px-2">...</span>
                    <button class="px-4 py-2 border border-communicationBtn text-primaryrounded-lg hover:bg-gray-50">250</button>
                    <button class="px-4 py-2 border border-communicationBtn text-primaryrounded-lg hover:bg-gray-50">
                        Next
                    </button>
                </div>
            </div>
        </div> --}}
        </div>


        @push('scripts')
            <script>
                function showTab(tabName) {
                    // Hide all tab contents
                    document.querySelectorAll('.tab-content').forEach(content => {
                        content.classList.add('hidden');
                    });

                    // Remove active class from all tabs
                    document.querySelectorAll('[id^="tab-"]').forEach(tab => {
                        tab.classList.remove('active-tab');
                    });

                    // Show selected tab content
                    const contentElement = document.getElementById('content-' + tabName);
                    if (contentElement) {
                        contentElement.classList.remove('hidden');
                        console.log(contentElement)
                    }

                    // Add active class to clicked tab
                    const activeTab = document.getElementById('tab-' + tabName);
                    if (activeTab) {
                        activeTab.classList.add('active-tab');
                    }
                }

                // On load
                document.addEventListener('DOMContentLoaded', () => {
                    showTab('messages');
                });
            </script>
        @endpush
    @endsection
