@extends('layouts.superadmin', ['active' => 'communication'])

@section('title', 'Communication Center')
@section('page-title', 'Communication Center')
@section('page-description', 'Send messages and announcements to schools')

@section('header-actions')
    <button class="px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg font-medium hover:bg-yellow-500 transition-colors">
        Compose Message
    </button>
@endsection

@section('content')
<div class="p-8 space-y-6">
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">Total Messages</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">1,247</p>
            <p class="text-sm text-gray-500 mt-1">All time</p>
        </div>

        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">Sent Today</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">23</p>
            <p class="text-sm text-gray-500 mt-1">Last 24 hours</p>
        </div>

        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">Open Rate</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">87%</p>
            <p class="text-sm text-gray-500 mt-1">Average rate</p>
        </div>

        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">Scheduled</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">12</p>
            <p class="text-sm text-gray-500 mt-1">Pending delivery</p>
        </div>
    </div>

    <!-- Filter Tabs -->
    <div class="bg-white rounded-lg border border-gray-200 p-2">
        <div class="flex space-x-2">
            <button class="px-4 py-2 bg-gray-900 text-white rounded-lg text-sm font-medium">
                All Messages (1,247)
            </button>
            <button class="px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg text-sm font-medium">
                Sent (1,187)
            </button>
            <button class="px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg text-sm font-medium">
                Scheduled (12)
            </button>
            <button class="px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg text-sm font-medium">
                Drafts (48)
            </button>
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="flex items-center justify-between">
        <div class="flex-1 max-w-md">
            <div class="relative">
                <input type="text" placeholder="Search messages..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
        <div class="flex items-center space-x-3">
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                <option>All Recipients</option>
                <option>All Schools</option>
                <option>Specific Schools</option>
                <option>All Teachers</option>
                <option>All Parents</option>
            </select>
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent">
                <option>Sort by: Newest</option>
                <option>Sort by: Oldest</option>
                <option>Sort by: Most Opened</option>
            </select>
        </div>
    </div>

    <!-- Messages List -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="divide-y divide-gray-200">
            <!-- Message 1 -->
            <div class="p-6 hover:bg-gray-50 cursor-pointer">
                <div class="flex items-start justify-between mb-2">
                    <div class="flex-1">
                        <div class="flex items-center mb-2">
                            <h3 class="text-sm font-semibold text-gray-900">Platform Update - New Features Available</h3>
                            <span class="ml-3 px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded">Sent</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Dear School Administrators, We're excited to announce new features including enhanced reporting...</p>
                        <div class="flex items-center text-xs text-gray-500 space-x-4">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                234 recipients
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                203 opened (87%)
                            </span>
                            <span>•</span>
                            <span>Jan 15, 2024 at 10:30 AM</span>
                        </div>
                    </div>
                    <button class="ml-4 text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Message 2 -->
            <div class="p-6 hover:bg-gray-50 cursor-pointer">
                <div class="flex items-start justify-between mb-2">
                    <div class="flex-1">
                        <div class="flex items-center mb-2">
                            <h3 class="text-sm font-semibold text-gray-900">Scheduled Maintenance Notice</h3>
                            <span class="ml-3 px-2 py-1 bg-yellow-100 text-yellow-800 text-xs font-medium rounded">Scheduled</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Important: System maintenance scheduled for this weekend. Please plan accordingly...</p>
                        <div class="flex items-center text-xs text-gray-500 space-x-4">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                234 recipients
                            </span>
                            <span>•</span>
                            <span>Scheduled for Jan 20, 2024 at 8:00 AM</span>
                        </div>
                    </div>
                    <button class="ml-4 text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Message 3 -->
            <div class="p-6 hover:bg-gray-50 cursor-pointer">
                <div class="flex items-start justify-between mb-2">
                    <div class="flex-1">
                        <div class="flex items-center mb-2">
                            <h3 class="text-sm font-semibold text-gray-900">Monthly Performance Report Available</h3>
                            <span class="ml-3 px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded">Sent</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Your monthly performance report is now available in the dashboard. Review key metrics...</p>
                        <div class="flex items-center text-xs text-gray-500 space-x-4">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                187 recipients
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                165 opened (88%)
                            </span>
                            <span>•</span>
                            <span>Jan 10, 2024 at 9:00 AM</span>
                        </div>
                    </div>
                    <button class="ml-4 text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Message 4 -->
            <div class="p-6 hover:bg-gray-50 cursor-pointer">
                <div class="flex items-start justify-between mb-2">
                    <div class="flex-1">
                        <div class="flex items-center mb-2">
                            <h3 class="text-sm font-semibold text-gray-900">New Badge Templates Released</h3>
                            <span class="ml-3 px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded">Sent</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Check out our new collection of badge templates designed for various achievements...</p>
                        <div class="flex items-center text-xs text-gray-500 space-x-4">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                234 recipients
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                198 opened (85%)
                            </span>
                            <span>•</span>
                            <span>Jan 5, 2024 at 2:00 PM</span>
                        </div>
                    </div>
                    <button class="ml-4 text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Message 5 -->
            <div class="p-6 hover:bg-gray-50 cursor-pointer">
                <div class="flex items-start justify-between mb-2">
                    <div class="flex-1">
                        <div class="flex items-center mb-2">
                            <h3 class="text-sm font-semibold text-gray-900">Payment Reminder - Subscription Renewal</h3>
                            <span class="ml-3 px-2 py-1 bg-gray-100 text-gray-800 text-xs font-medium rounded">Draft</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Reminder for schools with upcoming subscription renewals. Please ensure timely payment...</p>
                        <div class="flex items-center text-xs text-gray-500 space-x-4">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                47 recipients
                            </span>
                            <span>•</span>
                            <span>Saved as draft</span>
                        </div>
                    </div>
                    <button class="ml-4 text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <p class="text-sm text-gray-600">Showing 1-5 of 1,247 messages</p>
            <div class="flex items-center space-x-2">
                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 disabled:opacity-50" disabled>
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
@endsection

