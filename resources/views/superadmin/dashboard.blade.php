@extends('layouts.superadmin', ['active' => 'dashboard'])

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-description', 'Manage and oversee your school management platform')

@section('header-actions')
    <button class="px-4 py-2 bg-accent text-primary rounded-lg font-medium hover:bg-accent/90 transition-colors">
        View Budgets
    </button>
@endsection

@section('content')
<div class="p-8 space-y-6">
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
        <!-- Total Budgets -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">Total Budgets</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">1,247</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-sm font-medium text-green-600">7% this month</span>
            </div>
        </div>

        <!-- Total Stores -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">Total Stores</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">834</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-sm font-medium text-green-600">7% this month</span>
            </div>
        </div>

        <!-- Active Schools -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">Active Schools</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">23</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                <span class="text-sm font-medium text-red-600">3% this month</span>
            </div>
        </div>

        <!-- Total Students -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">Total Students</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">3,421</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-sm font-medium text-green-600">1% this month</span>
            </div>
        </div>

        <!-- Store Rate -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">Store Rate</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">67%</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-sm font-medium text-green-600">1% this month</span>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Monthly Trends -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-medium text-gray-900">Monthly Trends</h2>
                <button class="text-sm text-gray-600 hover:text-gray-900">View all</button>
            </div>
            <div class="h-64">
                <canvas id="monthlyTrendsChart"></canvas>
            </div>
        </div>

        <!-- Badge Distribution -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-medium text-gray-900">Badge Distribution</h2>
                <button class="text-sm text-gray-600 hover:text-gray-900">View all</button>
            </div>
            <div class="h-64">
                <canvas id="badgeDistributionChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Shares by Platform & Top Performing Schools -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Shares by Platform -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="mb-4">
                <h2 class="text-lg font-medium text-gray-900">Shares by Platform</h2>
                <p class="text-sm text-gray-600">Badge shared</p>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center flex-1">
                        <div class="w-full bg-gray-200 rounded-full h-2 mr-4">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 57%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-48">
                        <span class="text-sm font-medium text-gray-900">WhatsApp</span>
                        <span class="text-sm font-bold text-gray-900">433 (57%)</span>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center flex-1">
                        <div class="w-full bg-gray-200 rounded-full h-2 mr-4">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 28%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-48">
                        <span class="text-sm font-medium text-gray-900">Facebook</span>
                        <span class="text-sm font-bold text-gray-900">244 (28 %)</span>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center flex-1">
                        <div class="w-full bg-gray-200 rounded-full h-2 mr-4">
                            <div class="bg-pink-500 h-2 rounded-full" style="width: 13%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-48">
                        <span class="text-sm font-medium text-gray-900">Instagram</span>
                        <span class="text-sm font-bold text-gray-900">113 (13%)</span>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center flex-1">
                        <div class="w-full bg-gray-200 rounded-full h-2 mr-4">
                            <div class="bg-blue-700 h-2 rounded-full" style="width: 0%"></div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between w-48">
                        <span class="text-sm font-medium text-gray-900">LinkedIn</span>
                        <span class="text-sm font-bold text-gray-900">34 (0%)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Performing Schools -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="mb-4">
                <h2 class="text-lg font-medium text-gray-900">Top performing Schools</h2>
                <p class="text-sm text-gray-600">Top schools</p>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 bg-accent/10 rounded-lg">
                    <div class="flex items-center">
                        <span class="w-8 h-8 bg-accent/20 rounded-lg flex items-center justify-center text-sm font-bold text-primary mr-3">1</span>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Lagos International School</h3>
                            <p class="text-xs text-gray-500">320 badges • 287 shares</p>
                        </div>
                    </div>
                    <button class="px-3 py-1 bg-accent text-primary text-xs rounded-lg font-medium hover:bg-accent/90">
                        Engagement
                    </button>
                </div>
                <div class="flex items-center justify-between p-3 bg-accent/10 rounded-lg">
                    <div class="flex items-center">
                        <span class="w-8 h-8 bg-accent/20 rounded-lg flex items-center justify-center text-sm font-bold text-primary mr-3">2</span>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Abuja Academy</h3>
                            <p class="text-xs text-gray-500">304 badges • 287 shares</p>
                        </div>
                    </div>
                    <button class="px-3 py-1 bg-accent text-primary text-xs rounded-lg font-medium hover:bg-accent/90">
                        Engagement
                    </button>
                </div>
                <div class="flex items-center justify-between p-3 bg-accent/10 rounded-lg">
                    <div class="flex items-center">
                        <span class="w-8 h-8 bg-accent/20 rounded-lg flex items-center justify-center text-sm font-bold text-primary mr-3">3</span>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Port Harcourt High</h3>
                            <p class="text-xs text-gray-500">242 badges • 287 shares</p>
                        </div>
                    </div>
                    <button class="px-3 py-1 bg-accent text-primary text-xs rounded-lg font-medium hover:bg-accent/90">
                        Engagement
                    </button>
                </div>
                <div class="flex items-center justify-between p-3 bg-accent/10 rounded-lg">
                    <div class="flex items-center">
                        <span class="w-8 h-8 bg-accent/20 rounded-lg flex items-center justify-center text-sm font-bold text-primary mr-3">4</span>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Ibadan High</h3>
                            <p class="text-xs text-gray-500">234 badges • 287 shares</p>
                        </div>
                    </div>
                    <button class="px-3 py-1 bg-accent text-primary text-xs rounded-lg font-medium hover:bg-accent/90">
                        Engagement
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent System Activity -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-medium text-gray-900">Recent System Activity</h2>
        </div>
        <div class="divide-y divide-gray-200">
            <div class="px-6 py-4 flex items-start justify-between hover:bg-gray-50">
                <div class="flex items-start">
                    <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3"></div>
                    <div>
                        <p class="text-sm text-gray-900">
                            <span class="font-medium">Lagos International School</span> awarded 23 badges today
                        </p>
                        <p class="text-xs text-gray-500 mt-1">2 min ago</p>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4 flex items-start justify-between hover:bg-gray-50">
                <div class="flex items-start">
                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3"></div>
                    <div>
                        <p class="text-sm text-gray-900">
                            <span class="font-medium">Parent shared achievement to WhatsApp</span> - 8,945 share
                        </p>
                        <p class="text-xs text-gray-500 mt-1">5 min ago</p>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4 flex items-start justify-between hover:bg-gray-50">
                <div class="flex items-start">
                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3"></div>
                    <div>
                        <p class="text-sm text-gray-900">
                            <span class="font-medium">New School Enugu Academy</span> activate Kokokah Starboard
                        </p>
                        <p class="text-xs text-gray-500 mt-1">12 min ago</p>
                    </div>
                </div>
            </div>
            <div class="px-6 py-4 flex items-start justify-between hover:bg-gray-50">
                <div class="flex items-start">
                    <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3"></div>
                    <div>
                        <p class="text-sm text-gray-900">
                            <span class="font-medium">Lagos International School</span> awarded 23 badges today
                        </p>
                        <p class="text-xs text-gray-500 mt-1">2 min ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

