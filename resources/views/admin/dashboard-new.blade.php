@extends('layouts.admin', ['active' => 'dashboard'])

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-900 mb-1">Dashboard</h2>
            <p class="text-sm text-gray-600">Manage and oversee your school management platform</p>
        </div>
        <button class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
            View Badges
        </button>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-4 gap-6 mb-8">
        <!-- Total Badges -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm text-gray-600">Total Badges</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </div>
            <p class="text-4xl font-bold text-teal-900 mb-2">1,247</p>
            <div class="flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this month
            </div>
        </div>

        <!-- Total Shares -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm text-gray-600">Total Shares</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                </svg>
            </div>
            <p class="text-4xl font-bold text-teal-900 mb-2">834</p>
            <div class="flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this month
            </div>
        </div>

        <!-- Total Students -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm text-gray-600">Total Students</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <p class="text-4xl font-bold text-teal-900 mb-2">3,421</p>
            <div class="flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this month
            </div>
        </div>

        <!-- Share Rate -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm text-gray-600">Share Rate</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
            </div>
            <p class="text-4xl font-bold text-teal-900 mb-2">67%</p>
            <div class="flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this month
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="grid grid-cols-1 gap-6 mb-8">
        <!-- Monthly Trends Chart -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-teal-900">Monthly Trends</h3>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                        <span class="text-sm text-gray-600">Budget Used</span>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-block w-3 h-3 bg-blue-500 rounded-full mr-2"></span>
                        <span class="text-sm text-gray-600">Shares</span>
                    </div>
                </div>
            </div>
            <!-- Chart Placeholder -->
            <div class="h-64 flex items-end justify-between space-x-2">
                <div class="flex-1 bg-blue-100 rounded-t" style="height: 40%;"></div>
                <div class="flex-1 bg-green-100 rounded-t" style="height: 30%;"></div>
                <div class="flex-1 bg-blue-100 rounded-t" style="height: 60%;"></div>
                <div class="flex-1 bg-green-100 rounded-t" style="height: 80%;"></div>
                <div class="flex-1 bg-blue-100 rounded-t" style="height: 50%;"></div>
                <div class="flex-1 bg-green-100 rounded-t" style="height: 40%;"></div>
                <div class="flex-1 bg-blue-100 rounded-t" style="height: 70%;"></div>
            </div>
            <div class="flex justify-between mt-4 text-xs text-gray-500">
                <span>Jan</span>
                <span>Feb</span>
                <span>Mar</span>
                <span>Apr</span>
                <span>May</span>
                <span>Jun</span>
            </div>
        </div>

        <!-- Badge Data Studies Chart -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-teal-900">Badge Data Studies</h3>
                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">View all</a>
            </div>
            <!-- Bar Chart Placeholder -->
            <div class="h-64 flex items-end justify-between space-x-4">
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-400 rounded-t" style="height: 40%;"></div>
                    <span class="text-xs text-gray-500 mt-2">High Sch...</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-400 rounded-t" style="height: 20%;"></div>
                    <span class="text-xs text-gray-500 mt-2">Jnr Sch...</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-400 rounded-t" style="height: 60%;"></div>
                    <span class="text-xs text-gray-500 mt-2">Snr Sch...</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-400 rounded-t" style="height: 30%;"></div>
                    <span class="text-xs text-gray-500 mt-2">Creche Sch...</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-400 rounded-t" style="height: 35%;"></div>
                    <span class="text-xs text-gray-500 mt-2">Jnr Sch...</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-400 rounded-t" style="height: 90%;"></div>
                    <span class="text-xs text-gray-500 mt-2">HIGH SCHOOL</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-400 rounded-t" style="height: 25%;"></div>
                    <span class="text-xs text-gray-500 mt-2">Jr Sch...</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-400 rounded-t" style="height: 85%;"></div>
                    <span class="text-xs text-gray-500 mt-2">SCHOOL KIDS</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-400 rounded-t" style="height: 50%;"></div>
                    <span class="text-xs text-gray-500 mt-2">ELEMENTARY...</span>
                </div>
                <div class="flex-1 flex flex-col items-center">
                    <div class="w-full bg-blue-400 rounded-t" style="height: 70%;"></div>
                    <span class="text-xs text-gray-500 mt-2">Snr Sch...</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Row: Shares by Platform and Top Performing Students -->
    <div class="grid grid-cols-2 gap-6 mb-8">
        <!-- Shares by Platform -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="mb-4">
                <h3 class="text-lg font-semibold text-teal-900 mb-1">Shares by Platform</h3>
                <p class="text-sm text-gray-600">Badge shared</p>
            </div>
            <div class="space-y-4">
                <!-- WhatsApp -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">WhatsApp</span>
                        <span class="text-sm font-semibold text-gray-900">433 (57%)</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-500 h-2 rounded-full" style="width: 57%;"></div>
                    </div>
                </div>

                <!-- Facebook -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">Facebook</span>
                        <span class="text-sm font-semibold text-gray-900">534 (38.1)</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-600 h-2 rounded-full" style="width: 38%;"></div>
                    </div>
                </div>

                <!-- Instagram -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">Instagram</span>
                        <span class="text-sm font-semibold text-gray-900">133 (29%)</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-pink-500 h-2 rounded-full" style="width: 29%;"></div>
                    </div>
                </div>

                <!-- LinkedIn -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">Linkdin</span>
                        <span class="text-sm font-semibold text-gray-900">34 (9%)</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-700 h-2 rounded-full" style="width: 9%;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Performing Student -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <h3 class="text-lg font-semibold text-teal-900 mb-4">Top Performing Student</h3>
            <div class="space-y-3">
                @for($i = 1; $i <= 4; $i++)
                <div class="flex items-center justify-between p-3 bg-yellow-50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center text-white font-bold text-sm">
                            {{ $i }}
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-teal-900">Mark Segun</p>
                            <p class="text-xs text-gray-600">Jss 3 Student</p>
                        </div>
                    </div>
                    <button class="px-4 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm">
                        62% engagement
                    </button>
                </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Recent System Activity -->
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <h3 class="text-lg font-semibold text-teal-900 mb-4">Recent System Activity</h3>
        <div class="space-y-3">
            <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                    <p class="text-sm text-gray-700"><span class="font-semibold">Mr. Paul</span> awarded 3 badges today</p>
                </div>
                <span class="text-xs text-gray-500">2 min ago</span>
            </div>

            <div class="flex items-center justify-between p-4 bg-red-50 rounded-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                    <p class="text-sm text-gray-700"><span class="font-semibold">Report</span> shared achievement to WhatsApp - <span class="text-teal-600">$440</span> more</p>
                </div>
                <span class="text-xs text-gray-500">5 min ago</span>
            </div>

            <div class="flex items-center justify-between p-4 bg-green-50 rounded-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                    <p class="text-sm text-gray-700"><span class="font-semibold">Mr. Paul</span> awarded 3 badges today</p>
                </div>
                <span class="text-xs text-gray-500">12 min ago</span>
            </div>

            <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg">
                <div class="flex items-center space-x-3">
                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                    <p class="text-sm text-gray-700"><span class="font-semibold">Mr. Paul</span> awarded 3 badges today</p>
                </div>
                <span class="text-xs text-gray-500">2 min ago</span>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="mt-8 text-center">
        <p class="text-sm text-gray-500">Copyright © 2025</p>
    </div>
</div>
@endsection
