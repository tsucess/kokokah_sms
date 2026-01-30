@extends('layouts.admin', ['active' => 'dashboard'])

@section('title', 'Dashboard')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-8 flex flex-col gap-6">
        <section
            class="w-full flex items-center justify-between py-10 px-10 rounded-4xl bg-linear-to-r from-primary from-40% via-primary2 via-50% to-accent to-70%">
            <div class="flex flex-col gap-8">
                <h1 class="font-mulish text-white uppercase text-2xl">WINNER’S INTERNATIONAL ACADEMY</h1>
                <div class="flex flex-col gap-1">
                    <div class="flex items-center gap-1"><i class="fa-solid fa-envelope text-white"></i><span
                            class="text-xs text-white font-sitka">winnersinternationalacademy@gmail.com</span></div>
                    <div class="flex items-center gap-1"><i class="fa-solid fa-square-phone text-white"></i><span
                            class="text-xs text-white font-sitka">+234 800 000 0000</span></div>
                    <div class="flex items-center gap-1"><i class="fa-solid fa-globe text-white"></i><span
                            class="text-xs text-white font-sitka">winnersinternationalacadem.com</span></div>
                </div>
            </div>
            <div class="w-35 h-35 bg-white flex justify-center items-center rounded-full">
                <i class="fa-solid fa-graduation-cap fa-2xl text-blue-600"></i>
            </div>
        </section>
        <section class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="border border-school-btn rounded-xl p-7.5 flex flex-col gap-8">
                <div class="flex justify-between items-center gap-3">
                    <h2 class="font-fredoka text-primary text-body3"> Revenue</h2> <i
                        class="fa-solid fa-naira-sign text-black"></i>
                </div>
                <p class="font-fredoka text-primary text-h4">₦100,000,000</p>
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    <span class="text-sm font-medium text-green-600">+2% this month</span>
                </div>
            </div>
            <div class="border border-school-btn rounded-xl p-7.5 flex flex-col gap-8">
                <div class="flex justify-between items-center gap-3">
                    <h2 class="font-fredoka text-red50 text-body3">Outstanding</h2> <i
                        class="fa-solid fa-naira-sign text-red50"></i>
                </div>
                <p class="font-fredoka text-red50 text-h4">₦100,000,000</p>
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-red50 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                    <span class="text-sm font-medium text-red50">+2% this month</span>
                </div>
                <button class="border border-primary text-primary font-semibold font-sitka text-base py-4 px-4">View Debtors
                    List</button>
            </div>

        </section>
        <section class="grid grid-cols-1 md:grid-cols-4 gap-5">
            {{-- total student --}}
            <div class="border border-school-btn rounded-3xl py-7 px-6 flex flex-col gap-8 justify-center">
                <h3 class="text-sm font-fredoka text-primary">Total Students</h3>
                <div class="flex items-center justify-between">

                    <!-- Left Big Number -->
                    <p class="text-h5 font-bold text-primary font-fredoka">1,247</p>

                    <!-- Chart Section -->
                    <div class="flex flex-col items-center gap-6">

                        <!-- Donut Chart -->
                        <div class="relative w-16 h-16 rounded-full donut-chart flex items-center justify-center">
                            <div class="w-12 h-12 bg-white rounded-full shadow-inner flex items-center justify-center">
                                <span class="text-base font-bold text-primary font-sitka">100</span>
                            </div>
                        </div>

                        <!-- Legend -->
                        <div class="flex flex-col items-start gap-1 text-xs font-semibold text-primary">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 bg-primary rounded-sm"></span>
                                MALE (50%)
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 bg-secondary rounded-sm"></span>
                                FEMALE (50%)
                            </div>
                        </div>

                    </div>
                </div>
                <span class="text-sm font-medium text-green-600">+2% this month</span>


            </div>

            {{-- total teacher --}}
            <div class="border border-school-btn rounded-3xl flex flex-col gap-8 justify-center py-7 px-6">
                <h3 class="text-sm font-fredoka text-primary">Total Teacher</h3>
                <div class="flex items-center justify-between">

                    <!-- Left Big Number -->
                    <p class="text-h5 font-bold text-primary font-fredoka">1,247</p>

                    <!-- Chart Section -->
                    <div class="flex flex-col items-center gap-6">

                        <!-- Donut Chart -->
                        <div class="relative w-16 h-16 rounded-full donut-chart flex items-center justify-center">
                            <div class="w-12 h-12 bg-white rounded-full shadow-inner flex items-center justify-center">
                                <span class="text-base font-bold text-primary font-sitka">100</span>
                            </div>
                        </div>

                        <!-- Legend -->
                        <div class="flex flex-col items-start gap-1 text-xs font-semibold text-primary">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 bg-primary rounded-sm"></span>
                                MALE (50%)
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 bg-secondary rounded-sm"></span>
                                FEMALE (50%)
                            </div>
                        </div>

                    </div>
                </div>
                <span class="text-sm font-medium text-green-600">+2% this month</span>


            </div>

            {{-- total parent --}}
            <div class="border border-school-btn rounded-3xl py-7 px-6 flex flex-col justify-center gap-8">

                <h3 class="text-sm font-fredoka text-primary">Total Parents</h3>
                <div class="flex items-center justify-between">

                    <!-- Left Big Number -->
                    <p class="text-h5 font-bold text-primary font-fredoka">1,247</p>

                    <!-- Chart Section -->
                    <div class="flex flex-col items-center gap-6">

                        <!-- Donut Chart -->
                        <div class="relative w-16 h-16 rounded-full donut-chart flex items-center justify-center">
                            <div class="w-12 h-12 bg-white rounded-full shadow-inner flex items-center justify-center">
                                <span class="text-base font-bold text-primary font-sitka">100</span>
                            </div>
                        </div>

                        <!-- Legend -->
                        <div class="flex flex-col items-start gap-1 text-xs font-semibold text-primary">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 bg-primary rounded-sm"></span>
                                MALE (50%)
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 bg-secondary rounded-sm"></span>
                                FEMALE (50%)
                            </div>
                        </div>

                    </div>
                </div>
                <span class="text-sm font-medium text-green-600">+2% this month</span>


            </div>

            {{-- total class --}}
            <div class="bg-secondary rounded-3xl py-7 px-6 flex flex-col justify-center gap-8">

                <h3 class="text-sm font-fredoka text-white">Total Students</h3>
                <p class="text-h5 font-bold text-white font-fredoka">1,247</p>
                <span class="text-sm font-medium text-white">+2% this month</span>


            </div>
        </section>


        <div class="grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-3">

            <!-- Enrollment Trend -->
            <div class="bg-white rounded-2xl p-6 shadow-sm md:col-span-3">
                <div class="flex justify-between mb-4">
                    <h2 class="font-semibold text-gray-700">Student Enrollment Trend</h2>
                    <div class="flex gap-2 text-xs">
                        <span class="px-3 py-1 bg-gray-100 rounded">Year</span>
                        <span class="px-3 py-1 bg-gray-100 rounded">Class</span>
                        <span class="px-3 py-1 bg-gray-100 rounded">Gender</span>
                    </div>
                </div>
                <canvas id="enrollmentChart" class="min-h-20 h-full"></canvas>
            </div>

            <!-- Attendance Overview -->
            <div class="bg-white rounded-2xl p-6 shadow-sm md:col-span-2">
                <h2 class="font-semibold text-gray-700 mb-4">Attendance Overview</h2>
                <div class="flex justify-center">
                    <canvas id="attendanceChart" width="220" height="220"></canvas>
                </div>

                <div class="mt-6 space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="flex items-center gap-2"><span
                                class="w-3 h-3 bg-orange-400 rounded-full"></span>Present</span>
                        <span class="font-semibold">10</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="flex items-center gap-2"><span
                                class="w-3 h-3 bg-blue-500 rounded-full"></span>Absent</span>
                        <span class="font-semibold">82</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="flex items-center gap-2"><span
                                class="w-3 h-3 bg-green-400 rounded-full"></span>Late</span>
                        <span class="font-semibold">46</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="flex items-center gap-2"><span
                                class="w-3 h-3 bg-emerald-300 rounded-full"></span>Excused</span>
                        <span class="font-semibold">46</span>
                    </div>
                </div>
            </div>

        </div>


        <div class="gap-5 grid grid-cols-1 md:grid-cols-5">

            <!-- Performance Analytics -->
            <div class="bg-white rounded-2xl p-6 shadow-sm md:col-span-3">
                <div class="flex justify-between mb-4">
                    <h2 class="font-semibold text-gray-700">Performance Analytics</h2>
                    <div class="flex items-center gap-4 text-xs">
                        <span class="flex items-center gap-1"><span
                                class="w-3 h-3 bg-blue-500 rounded-full"></span>Teacher</span>
                        <span class="flex items-center gap-1"><span
                                class="w-3 h-3 bg-cyan-400 rounded-full"></span>Student</span>
                    </div>
                </div>
                <canvas id="performanceChart" height="100"></canvas>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-2xl p-6 shadow-sm md:col-span-2">
                <h2 class="font-semibold text-gray-700 mb-4">Recent Activity</h2>
                <ul class="space-y-4 text-sm text-gray-600">
                    <li class="flex gap-3"><i class="fa-solid fa-circle-check"></i>
                        Result for Second Term has been released</li>
                    <li class="flex gap-3"><i class="fa-solid fa-circle-check"></i>
                        Result for Second Term has been released</li>
                    <li class="flex gap-3"><i class="fa-solid fa-circle-check"></i>
                        Result for Second Term has been released</li>
                    <li class="flex gap-3"><i class="fa-solid fa-circle-check"></i>
                        Result for Second Term has been released</li>
                    <li class="flex gap-3"><i class="fa-solid fa-circle-check"></i>
                        Result for Second Term has been released</li>
                </ul>
            </div>


        </div>


            <div class="bg-white rounded-lg border border-school-btn p-6">
                <div class=" mb-6">
                        <h3 class="text-lg font-semibold mb-1 font-fredoka text-primary">Messages</h3>


                </div>


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
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        new Chart(document.getElementById('enrollmentChart'), {
            type: 'line',
            data: {
                labels: ['Figma', 'Sketch', 'XD', 'Photoshop', 'Illustrator', 'AfterEffect'],
                datasets: [{
                    label: 'Student',
                    data: [56, 65, 78, 80, 70, 38],
                    borderColor: '#6366F1',
                    backgroundColor: 'rgba(99,102,241,0.15)',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#eee'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        new Chart(document.getElementById('attendanceChart'), {
            type: 'pie',
            data: {
                labels: ['Present', 'Absent', 'Late', 'Excused'],
                datasets: [{
                    data: [10, 82, 46, 46],
                    backgroundColor: ['#FB923C', '#3B82F6', '#4ADE80', '#86EFAC']
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });


        new Chart(document.getElementById('performanceChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                        label: 'Teacher',
                        data: [45, 60, 75, 52, 42, 42, 30],
                        borderColor: '#3B82F6',
                        tension: 0.4
                    },
                    {
                        label: 'Student',
                        data: [25, 48, 55, 32, 34, 51, 25],
                        borderColor: '#67E8F9',
                        tension: 0.4
                    }
                ]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#eee'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    </script>
@endpush
