@extends('layouts.superadmin', ['active' => 'starboard'])

@section('title', 'Kokokah Starboard Badges')
@section('page-title', 'Kokokah Starboard Badges')
@section('page-description', 'Manage and oversee your school management platform')

@section('header-actions')
    <button class="px-6 py-2 rounded-lg bg-accent text-black hover:bg-accent-hover font-medium transition-colors">
        View Badges
    </button>
@endsection

@section('content')
    <div class="p-8 space-y-6">
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
            <!-- Total Budgets -->
            <div class="bg-white rounded-lg border border-gray-200 p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="text-sm font-medium text-gray-600">Total Badges</p>
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="text-3xl font-bold text-gray-900" style="font-family: 'Fredoka One', cursive;">1,247</p>
                <div class="flex items-center mt-2">
                    <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    <span class="text-sm font-medium text-green-600">7% this month</span>
                </div>
            </div>

            <!-- Total Stores -->
            <div class="bg-white rounded-lg border border-gray-200 p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="text-sm font-medium text-gray-600">Total Stores</p>
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <p class="text-3xl font-bold text-gray-900" style="font-family: 'Fredoka One', cursive;">834</p>
                <div class="flex items-center mt-2">
                    <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    <span class="text-sm font-medium text-green-600">7% this month</span>
                </div>
            </div>

            <!-- Active Schools -->
            <div class="bg-white rounded-lg border border-gray-200 p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="text-sm font-medium text-gray-600">Active Schools</p>
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <p class="text-3xl font-bold text-gray-900" style="font-family: 'Fredoka One', cursive;">23</p>
                <div class="flex items-center mt-2">
                    <svg class="w-4 h-4 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                    <span class="text-sm font-medium text-red-600">3% this month</span>
                </div>
            </div>

            <!-- Total Students -->
            <div class="bg-white rounded-lg border border-gray-200 p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="text-sm font-medium text-gray-600">Total Students</p>
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <p class="text-3xl font-bold text-gray-900" style="font-family: 'Fredoka One', cursive;">3,421</p>
                <div class="flex items-center mt-2">
                    <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    <span class="text-sm font-medium text-green-600">1% this month</span>
                </div>
            </div>

            <!-- Store Rate -->
            <div class="bg-white rounded-lg border border-gray-200 p-6">
                <div class="flex items-center justify-between mb-2">
                    <p class="text-sm font-medium text-gray-600">Store Rate</p>
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <p class="text-3xl font-bold text-gray-900" style="font-family: 'Fredoka One', cursive;">67%</p>
                <div class="flex items-center mt-2">
                    <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    <span class="text-sm font-medium text-green-600">1% this month</span>
                </div>
            </div>
        </div>

        <!-- Charts and Stats Row -->
        <!-- Monthly Trends Chart -->
        <div class=" bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold text-gray-800">Monthly Trends</h2>
                <button class="text-sm text-gray-600 hover:text-gray-800">MORE</button>
            </div>
            <div class="h-80">
                <canvas id="monthlyTrendsChart"></canvas>
            </div>
        </div>

        <!-- Badge Distribution -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="mb-4">
                <h2 class="text-lg font-bold text-gray-800">Badge Distribution</h2>
            </div>
            <div class="flex items-center justify-center h-64">
                <canvas id="badgeDistributionChart"></canvas>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Shares by Platform -->
            <div class="bg-white rounded-lg border border-gray-200 p-6">
                <div class="mb-4">
                    <h2 class="text-lg font-bold text-gray-800">Shares by Platform</h2>
                </div>
                <div class="space-y-4">
                    <!-- WhatsApp -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-gray-700">WhatsApp</span>
                            </div>
                            <span class="text-sm font-bold text-gray-900">433</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 57%"></div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">57%</p>
                    </div>

                    <!-- Facebook -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-gray-700">Facebook</span>
                            </div>
                            <span class="text-sm font-bold text-gray-900">341</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 38.1%"></div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">38.1%</p>
                    </div>

                    <!-- Instagram -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-pink-100 flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-gray-700">Instagram</span>
                            </div>
                            <span class="text-sm font-bold text-gray-900">133</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-pink-500 h-2 rounded-full" style="width: 29%"></div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">29%</p>
                    </div>

                    <!-- LinkedIn -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-blue-700" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-gray-700">LinkedIn</span>
                            </div>
                            <span class="text-sm font-bold text-gray-900">34</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-700 h-2 rounded-full" style="width: 9%"></div>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">9%</p>
                    </div>
                </div>
            </div>

            <!-- Top Performing Schools -->
            <div class="bg-white rounded-lg border border-gray-200 p-6">
                <div class="mb-4">
                    <h2 class="text-lg font-bold text-gray-800">Top performing Schools</h2>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between pb-3 border-b border-gray-100">
                        <div class="flex items-center">
                            <span class="text-lg font-bold text-gray-400 mr-3">1</span>
                            <div>
                                <p class="text-sm font-medium text-gray-900">Lagos International School</p>
                                <p class="text-xs text-gray-500">324 Budgets • 187 classes</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pb-3 border-b border-gray-100">
                        <div class="flex items-center">
                            <span class="text-lg font-bold text-gray-400 mr-3">2</span>
                            <div>
                                <p class="text-sm font-medium text-gray-900">Abuja Academy</p>
                                <p class="text-xs text-gray-500">324 Budgets • 187 classes</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pb-3 border-b border-gray-100">
                        <div class="flex items-center">
                            <span class="text-lg font-bold text-gray-400 mr-3">3</span>
                            <div>
                                <p class="text-sm font-medium text-gray-900">Port Harcourt High</p>
                                <p class="text-xs text-gray-500">324 Budgets • 187 classes</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="text-lg font-bold text-gray-400 mr-3">4</span>
                            <div>
                                <p class="text-sm font-medium text-gray-900">Ibadan High</p>
                                <p class="text-xs text-gray-500">324 Budgets • 187 classes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- Recent System Activity -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="mb-4">
                <h2 class="text-lg font-bold text-gray-800">Recent System Activity</h2>
            </div>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3"></div>
                    <div>
                        <p class="text-sm text-gray-900">New school registered</p>
                        <p class="text-xs text-gray-500">2 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3"></div>
                    <div>
                        <p class="text-sm text-gray-900">Payment received</p>
                        <p class="text-xs text-gray-500">15 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="w-2 h-2 bg-yellow-500 rounded-full mt-2 mr-3"></div>
                    <div>
                        <p class="text-sm text-gray-900">Subscription expiring soon</p>
                        <p class="text-xs text-gray-500">1 hour ago</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="w-2 h-2 bg-purple-500 rounded-full mt-2 mr-3"></div>
                    <div>
                        <p class="text-sm text-gray-900">New user added</p>
                        <p class="text-xs text-gray-500">2 hours ago</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="w-2 h-2 bg-red-500 rounded-full mt-2 mr-3"></div>
                    <div>
                        <p class="text-sm text-gray-900">System maintenance scheduled</p>
                        <p class="text-xs text-gray-500">3 hours ago</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Monthly Trends Chart
            const monthlyTrendsCtx = document.getElementById('monthlyTrendsChart').getContext('2d');
            new Chart(monthlyTrendsCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                            label: 'Budgets',
                            data: [30, 45, 60, 55, 70, 85, 90, 75, 80, 95, 100, 110],
                            borderColor: '#3b82f6',
                            backgroundColor: 'rgba(59, 130, 246, 0.1)',
                            tension: 0.4,
                            fill: true,
                            pointRadius: 4,
                            pointBackgroundColor: '#3b82f6'
                        },
                        {
                            label: 'Stores',
                            data: [20, 35, 50, 45, 60, 70, 75, 65, 70, 80, 85, 90],
                            borderColor: '#10b981',
                            backgroundColor: 'rgba(16, 185, 129, 0.1)',
                            tension: 0.4,
                            fill: true,
                            pointRadius: 4,
                            pointBackgroundColor: '#10b981'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 20
                            }
                        }
                    }
                }
            });

            // Badge Distribution Chart
            const badgeDistributionCtx = document.getElementById('badgeDistributionChart').getContext('2d');
            new Chart(badgeDistributionCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Gold', 'Silver', 'Bronze'],
                    datasets: [{
                        data: [45, 35, 20],
                        backgroundColor: ['#FDAF22', '#C0C0C0', '#CD7F32'],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        }
                    },
                    cutout: '60%'
                }
            });
        </script>
    @endpush

@endsection
