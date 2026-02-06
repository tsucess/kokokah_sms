@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'Login History')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-8">
        <!-- Header -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-primary font-fredoka">Login History</h2>
        </div>

        <!-- Search Bar -->
        <div class="flex-1 relative bg-white rounded-full shadow py-1 mb-9">
            <input type="text" placeholder="Search for classes" class="w-full pl-10 pr-4 py-2 text-sm text-search">
            <svg class="w-5 h-5 text-search absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>

        <!-- Login History Table -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">Staff
                                Information</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">User
                                Type</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Browser</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Access Type</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Location</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">IP
                                Address</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">Date
                                & Time</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @for ($i = 1; $i <= 10; $i++)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 shrink-0">
                                            <img class="h-8 w-8 rounded-full"
                                                src="/images/avatar.png"
                                                alt="">
                                        </div>
                                        <div class="ml-4">
                                            <a href="#"
                                                class="text-sm font-medium text-primary font-sitka">Samuel
                                                Victor</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="#" class="text-sm text-primary font-sitka">Staff</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="#" class="text-sm text-primary font-sitka">Chrome</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="#" class="text-sm text-primary font-sitka">Windows</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Lagos, Nigeria</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">109.34.241.33</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10 Nov 2025 - 12:40 pm</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
