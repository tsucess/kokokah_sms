@extends('layouts.superadmin', ['active' => 'dashboard'])

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-description', 'Manage and oversee your school management platform')

@section('header-actions')
    <button class="px-4 py-2 bg-white border border-teal-600 text-teal-600 rounded-lg font-medium hover:bg-teal-50 transition-colors">
        Bulk Upload Student
    </button>
    <button class="px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg font-medium hover:bg-yellow-500 transition-colors flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        Add New School
    </button>
@endsection

@section('content')
<div class="p-8 space-y-6">
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Schools -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-teal-700">Total Schools</p>
                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">314</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-sm font-medium text-green-600">+2% this month</span>
            </div>
        </div>

        <!-- Total Students Across Platform -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-teal-700">Total Students Across Platform</p>
                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">156,428</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-sm font-medium text-green-600">+2% this month</span>
            </div>
        </div>

        <!-- Active Schools -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-teal-700">Active Schools</p>
                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">189,241</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
                <span class="text-sm font-medium text-red-600">-2% this month</span>
            </div>
        </div>

        <!-- Monthly Revenue -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm font-medium text-teal-700">Monthly Revenue</p>
                <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <p class="text-3xl font-bold text-teal-800" style="font-family: 'Fredoka One', cursive;">₦100,000,000</p>
            <div class="flex items-center mt-2">
                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-sm font-medium text-green-600">+2% this month</span>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Revenue & Profitability -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h2 class="text-lg font-bold text-teal-800">Revenue & Profitability</h2>
                </div>
                <button class="text-sm text-teal-600 hover:text-teal-800">MORE</button>
            </div>
            <div class="h-80">
                <canvas id="revenueChart"></canvas>
            </div>
        </div>

        <!-- School Types Distribution -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h2 class="text-lg font-bold text-teal-800">School Types (Distribution by institution type)</h2>
                </div>
            </div>
            <div class="flex items-center justify-center h-80">
                <div class="relative w-64 h-64">
                    <canvas id="schoolTypesChart"></canvas>
                </div>
                <div class="ml-8 space-y-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="w-4 h-4 bg-orange-400 rounded-sm mr-2"></span>
                            <span class="text-sm text-teal-700">Nursery Schools</span>
                        </div>
                        <span class="text-sm font-bold text-teal-800 ml-8">10</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="w-4 h-4 bg-blue-500 rounded-sm mr-2"></span>
                            <span class="text-sm text-teal-700">Primary Schools</span>
                        </div>
                        <span class="text-sm font-bold text-teal-800 ml-8">82</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="w-4 h-4 bg-teal-500 rounded-sm mr-2"></span>
                            <span class="text-sm text-teal-700">Secondary Schools</span>
                        </div>
                        <span class="text-sm font-bold text-teal-800 ml-8">86</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recently Added Schools -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-bold text-teal-800">Recently Added Schools</h2>
            <p class="text-sm text-teal-600">Latest schools subscribed to the platform</p>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-teal-700 uppercase tracking-wider">School Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-teal-700 uppercase tracking-wider">Location</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-teal-700 uppercase tracking-wider">Students</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-teal-700 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-teal-700 uppercase tracking-wider">Subscription Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-teal-700 uppercase tracking-wider">Expiration Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-teal-700 uppercase tracking-wider">Date Added</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-teal-700">Greenwood Academy</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">Lagos, Nigeria</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">1,250</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">23/02/2025</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">23/02/2025</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">23/02/2025</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-teal-700">Greenwood Academy</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">Lagos, Nigeria</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">1,250</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">23/02/2025</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">23/02/2025</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">23/02/2025</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-teal-700">Greenwood Academy</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">Lagos, Nigeria</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">1,250</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">23/02/2025</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">23/02/2025</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">23/02/2025</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-teal-700">Greenwood Academy</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">Lagos, Nigeria</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">1,250</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">23/02/2025</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">23/02/2025</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-teal-600">23/02/2025</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-teal-700 bg-white hover:bg-gray-50">
                Previous
            </button>
            <div class="text-sm text-teal-600">
                Page <span class="font-medium">1</span> of <span class="font-medium">12</span>
            </div>
            <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-teal-700 bg-white hover:bg-gray-50">
                Next
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Revenue & Profitability Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
            datasets: [
                {
                    label: 'Cost',
                    data: [30, 25, 85, 90, 80, 40],
                    borderColor: '#ef4444',
                    backgroundColor: 'transparent',
                    tension: 0.4,
                    pointRadius: 4,
                    pointBackgroundColor: '#ef4444'
                },
                {
                    label: 'Profit',
                    data: [60, 70, 80, 75, 65, 95],
                    borderColor: '#3b82f6',
                    backgroundColor: 'transparent',
                    tension: 0.4,
                    pointRadius: 4,
                    pointBackgroundColor: '#3b82f6'
                },
                {
                    label: 'Revenue',
                    data: [45, 50, 90, 20, 45, 100],
                    borderColor: '#10b981',
                    backgroundColor: 'transparent',
                    tension: 0.4,
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
                    max: 100,
                    ticks: {
                        stepSize: 20
                    }
                }
            }
        }
    });

    // School Types Pie Chart
    const schoolTypesCtx = document.getElementById('schoolTypesChart').getContext('2d');
    new Chart(schoolTypesCtx, {
        type: 'doughnut',
        data: {
            labels: ['Primary Schools', 'Secondary Schools', 'Nursery Schools'],
            datasets: [{
                data: [82, 86, 10],
                backgroundColor: ['#6366f1', '#14b8a6', '#fb923c'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            cutout: '60%'
        }
    });
</script>
@endpush

@endsection

