@extends('layouts.superadmin', ['active' => 'analytics'])

@section('title', 'Analytics')
@section('page-title', 'Analytics')
@section('page-description', 'Manage and oversee your school management platform')

@section('content')
<div class="p-8 space-y-6">
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Average Response Time -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">Average Response Time</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">245ms</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                <span class="text-sm font-medium text-red-600">2% this month</span>
            </div>
        </div>

        <!-- System Uptime -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">System Uptime</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">99.98%</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-sm font-medium text-green-600">0% this month</span>
            </div>
        </div>

        <!-- Average Daily Users -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">Average Daily Users</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">52,340</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                <span class="text-sm font-medium text-red-600">7% this month</span>
            </div>
        </div>

        <!-- Engagement Rate -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-gray-600">Engagement Rate</p>
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-gray-900">87%</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-sm font-medium text-green-600">2% this month</span>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Platform Growth -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-gray-900">Platform Growth (Monthly growth across key metrics)</h2>
            </div>
            <div class="h-64">
                <canvas id="platformGrowthChart"></canvas>
            </div>
        </div>

        <!-- Weekly Engagement -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-gray-900">Weekly Engagement (Daily login activity and active time)</h2>
            </div>
            <div class="h-64">
                <canvas id="weeklyEngagementChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Subscription Plan Performance -->
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <div class="mb-4">
            <h2 class="text-lg font-semibold text-gray-900">Subscription Plan Performance</h2>
        </div>
        <div class="h-80">
            <canvas id="subscriptionPerformanceChart"></canvas>
        </div>
    </div>

    <!-- Feature Usage Statistics -->
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-900">Feature Usage Statistics</h2>
            <p class="text-sm text-gray-600">Adoption rate of platform features</p>
        </div>
        <div class="space-y-6">
            <!-- Attendance -->
            <div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-medium text-gray-700">Attendance</span>
                    <span class="text-sm font-semibold text-gray-900">93%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-indigo-600 h-2 rounded-full" style="width: 93%"></div>
                </div>
            </div>

            <!-- Gradebook -->
            <div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-medium text-gray-700">Gradebook</span>
                    <span class="text-sm font-semibold text-gray-900">92%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-indigo-600 h-2 rounded-full" style="width: 92%"></div>
                </div>
            </div>

            <!-- Communication -->
            <div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-medium text-gray-700">Communication</span>
                    <span class="text-sm font-semibold text-gray-900">92%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-indigo-600 h-2 rounded-full" style="width: 92%"></div>
                </div>
            </div>

            <!-- Reports -->
            <div>
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-medium text-gray-700">Reports</span>
                    <span class="text-sm font-semibold text-gray-900">94%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-indigo-600 h-2 rounded-full" style="width: 94%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Student Enrollment Trend -->
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <div class="mb-4">
            <h2 class="text-lg font-semibold text-gray-900">Student Enrollment Trend (Detailed student growth over 6 months)</h2>
        </div>
        <div class="h-80">
            <canvas id="studentEnrollmentChart"></canvas>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Platform Growth Chart
    const platformGrowthCtx = document.getElementById('platformGrowthChart');
    if (platformGrowthCtx) {
        new Chart(platformGrowthCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [
                    {
                        label: 'Schools',
                        data: [180, 220, 280, 330, 380, 430],
                        borderColor: '#6366f1',
                        backgroundColor: 'rgba(99, 102, 241, 0.1)',
                        tension: 0.4,
                        fill: true,
                        borderWidth: 2,
                    },
                    {
                        label: 'Teachers',
                        data: [200, 240, 260, 240, 220, 200],
                        borderColor: '#f59e0b',
                        backgroundColor: 'rgba(245, 158, 11, 0.1)',
                        tension: 0.4,
                        fill: true,
                        borderWidth: 2,
                    },
                    {
                        label: 'Students',
                        data: [160, 200, 240, 300, 340, 380],
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        tension: 0.4,
                        fill: true,
                        borderWidth: 2,
                    },
                    {
                        label: 'Parents',
                        data: [180, 200, 220, 260, 300, 340],
                        borderColor: '#ec4899',
                        backgroundColor: 'rgba(236, 72, 153, 0.1)',
                        tension: 0.4,
                        fill: true,
                        borderWidth: 2,
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 500,
                        ticks: {
                            stepSize: 100
                        }
                    }
                }
            }
        });
    }

    // Weekly Engagement Chart
    const weeklyEngagementCtx = document.getElementById('weeklyEngagementChart');
    if (weeklyEngagementCtx) {
        new Chart(weeklyEngagementCtx, {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Logins',
                    data: [85, 75, 90, 95, 85, 65, 40],
                    backgroundColor: '#818cf8',
                    borderRadius: 4,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            stepSize: 20
                        }
                    }
                }
            }
        });
    }

    // Subscription Performance Chart
    const subscriptionPerformanceCtx = document.getElementById('subscriptionPerformanceChart');
    if (subscriptionPerformanceCtx) {
        new Chart(subscriptionPerformanceCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [
                    {
                        label: 'Basic',
                        data: [200, 210, 220, 200, 180, 160],
                        borderColor: '#6366f1',
                        backgroundColor: 'rgba(99, 102, 241, 0.2)',
                        tension: 0.4,
                        fill: true,
                        borderWidth: 0,
                    },
                    {
                        label: 'Standard',
                        data: [180, 190, 200, 220, 240, 260],
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.2)',
                        tension: 0.4,
                        fill: true,
                        borderWidth: 0,
                    },
                    {
                        label: 'Premium',
                        data: [160, 180, 200, 240, 280, 320],
                        borderColor: '#f59e0b',
                        backgroundColor: 'rgba(245, 158, 11, 0.2)',
                        tension: 0.4,
                        fill: true,
                        borderWidth: 0,
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        stacked: true,
                        max: 350,
                        ticks: {
                            stepSize: 50
                        }
                    },
                    x: {
                        stacked: true
                    }
                }
            }
        });
    }

    // Student Enrollment Chart
    const studentEnrollmentCtx = document.getElementById('studentEnrollmentChart');
    if (studentEnrollmentCtx) {
        new Chart(studentEnrollmentCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Students',
                    data: [60, 75, 80, 90, 85, 45],
                    backgroundColor: '#a78bfa',
                    borderRadius: 8,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            stepSize: 20
                        }
                    }
                }
            }
        });
    }
</script>
@endpush

