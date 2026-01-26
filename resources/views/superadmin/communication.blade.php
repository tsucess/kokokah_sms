@extends('layouts.superadmin', ['active' => 'communication'])

@section('title', 'Communication Center')
@section('page-title', 'Communication Center')
@section('page-description', 'Send messages and announcements to schools')

@section('header-actions')
    <button
        class="px-4 py-2 bg-white text-primary rounded-lg border border-primary font-medium hover:bg-green-50 transition-colors">
        <i class="fa-solid fa-download"></i>
        Export PDF
    </button>
    <button
        class="px-4 py-2 bg-white text-primary rounded-lg border border-primary font-medium hover:bg-green-50 transition-colors">
        <i class="fa-solid fa-download"></i>
        Export Excel
    </button>
@endsection

@section('content')
    <div class="p-8 space-y-6">
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl border border-school-btn p-6 flex items-center gap-4">
                <div class="flex items-center justify-center bg-messageBg w-15 h-15 rounded-lg">
                    <svg class="w-5 h-5 text-[#3D5EE1]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-body3 text-primary">Total Messages</p>
                    <p class="text-3xl font-bold text-primary">1,247</p>

                </div>
            </div>

            <div class="bg-white rounded-2xl border border-school-btn p-6 flex items-center gap-4">
                <div class="flex items-center justify-center bg-annoucementBg w-15 h-15 rounded-lg">
                    <i class="fa-solid fa-bullhorn text-active"></i>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-body3 text-primary">Announcements</p>
                    <p class="text-3xl font-bold text-primary">3</p>

                </div>
            </div>

            <div class="bg-white rounded-2xl border border-school-btn p-6 flex items-center gap-4">
                <div class="flex items-center justify-center bg-recipentBg w-15 h-15 rounded-lg">
                    <i class="fa-solid fa-people-group text-[#E77E00]"></i>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-body3 text-primary">Total Recipents</p>
                    <p class="text-3xl font-bold text-primary">1,247</p>

                </div>
            </div>
        </div>

        <!-- Filter Tabs -->
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <button class="px-4 py-2 bg-accent border border-accent text-primary rounded-l-lg font-medium text-sm">
                    Messages
                </button>
                <button class="px-4 py-2 bg-white border border-primary text-primary font-medium text-sm hover:bg-gray-50">
                    Announcements
                </button>
                <button
                    class="px-4 py-2 bg-white border border-primary text-primary rounded-r-lg font-medium text-sm hover:bg-gray-50">
                    Bulk Actions
                </button>
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
@endsection
