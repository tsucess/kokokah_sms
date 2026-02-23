@extends('layouts.parent', ['active' => 'dashboard'])

@section('title', 'Dashboard')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<style>
    .dark-btn {
            background-color: #000000;
            color: #FFFFFF;
        }
</style>
    <div class="p-4 md:px-8 space-y-6">
        <header
            class="bg-linear-to-r from-purple600 from-80%  to-purple700 to-95% rounded-2xl px-6 py-6 shadow-headerBox md:py-12 md:px-8 lg:px-12 flex flex-col gap-10 md:gap-15 lg:gap-9 lg:py-10 relative">
            <span class="text-xs text-white/75 font-poppins">September 4, 2023</span>
            <div>
                <h2 class="text-white font-poppins text-base md:text-2xl font-semibold">Welcome back, Mrs.John!</h2>
                <span class="text-xs text-white/75 font-poppins">Always stay updated in your student portal</span>
            </div>

            <img src="/images/parent-dashboard-illustration.png" alt="" class="absolute right-5 w-20 md:w-50 top-4 md:top-0">
        </header>
        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 ml-auto w-60">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Recipients</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>All users</option>
                        <option>All teachers</option>
                    </select>
                </div>
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
            <div class="border border-school-btn rounded-2xl p-4 md:p-6 flex flex-col gap-8">
                <div class="flex items-center justify-between gap-2">
                    <h5 class="font-fredoka text-primary text-xs">Class Assigned</h5>
                    <i class="fa-solid fa-chalkboard text-secondary"></i>
                </div>
                <div class="flex flex-col gap-6">
                    <p class="font-fredoka font-semibold text-primary text-3xl">3</p>
                    <p class="text-[10px] text-search font-fredoka">total classes</p>
                </div>
            </div>
            <div class="border border-school-btn rounded-2xl p-4 md:p-6 flex flex-col gap-8">
                <div class="flex items-center justify-between gap-2">
                    <h5 class="font-fredoka text-primary text-xs">Class Assigned</h5>
                    <i class="fa-solid fa-book text-secondary"></i>
                </div>
                <div class="flex flex-col gap-6">
                    <p class="font-fredoka font-semibold text-primary text-3xl">3</p>
                    <p class="text-[10px] text-search font-fredoka">total classes</p>
                </div>
            </div>
            <div class="border border-school-btn rounded-2xl p-4 md:p-6 flex flex-col gap-8">
                <div class="flex items-center justify-between gap-2">
                    <h5 class="font-fredoka text-primary text-xs">Class Assigned</h5>
                    <i class="fa-solid fa-book text-secondary"></i>
                </div>
                <div class="flex flex-col gap-6">
                    <p class="font-fredoka font-semibold text-primary text-3xl">3</p>
                    <p class="text-[10px] text-search font-fredoka">total classes</p>
                </div>
            </div>
            <div class="border border-school-btn rounded-2xl p-4 md:p-6 flex flex-col gap-8">
                <div class="flex items-center justify-between gap-2">
                    <h5 class="font-fredoka text-primary text-xs">Class Assigned</h5>
                    <i class="fa-solid fa-book text-secondary"></i>
                </div>
                <div class="flex flex-col gap-6">
                    <p class="font-fredoka font-semibold text-primary text-3xl">3</p>
                    <p class="text-[10px] text-search font-fredoka">total classes</p>
                </div>
            </div>
            <div class="border border-school-btn rounded-2xl p-4 md:p-6 flex flex-col gap-8">
                <div class="flex items-center justify-between gap-2">
                    <h5 class="font-fredoka text-primary text-xs">Inbox</h5>
                    <i class="fa-solid fa-inbox text-secondary"></i>
                </div>
                <div class="flex flex-col gap-6">
                    <p class="font-fredoka font-semibold text-primary text-3xl">3</p>
                    <p class="text-[10px] text-search font-fredoka">total messages</p>
                </div>
            </div>
        </section>
        <section class="flex flex-col gap-5 bg-white p-4 rounded-2xl">
            <h3 class="font-poppins text-base text-black font-semibold">Academic Performance Overview</h3>
            <canvas id="performanceChart" class="max-h-60"></canvas>
            <button class="text-primary font-mulish font-semibold text-sm px-6 py-2 border border-communicationBtn rounded-md self-end hover:bg-primary hover:text-communicationBtn transition-all">View Result</button>
        </section>
        <section class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <!-- Recent Activity -->
            <div class="bg-white border-school-btn border rounded-2xl space-y-4 p-6 w-full">
                <h2 class="font-semibold text-primary text-xl font-fredoka">Recent Activity</h2>
                <ul class="space-y-4 text-sm text-black font-quicksand">
                    <li class="flex gap-3.5 items-center"><i class="fa-solid fa-circle-check"></i>
                        You submitted Mathematics results for Primary 4A</li>
                    <li class="flex gap-3 items-center"><i class="fa-solid fa-circle-check"></i>
                        Attendance taken for Primary 5</li>
                    <li class="flex gap-3 items-center"><i class="fa-solid fa-circle-check"></i>
                        Attendance taken for Primary 5</li>
                    <li class="flex gap-3 items-center"><i class="fa-solid fa-circle-check"></i>
                        Attendance taken for Primary 5</li>
                </ul>
            </div>

            <div class="bg-white border-school-btn border rounded-2xl space-y-4 p-6 w-full">
                <h2 class="font-semibold text-primary text-xl font-sitka">Payment Status</h2>
                <div class="flex flex-col gap-2">
                    <div class="flex justify-between items-center gap-3">
                        <span class="font-mulish text-black font-semibold text-xs">Tuition</span>
                        <span class="font-mulish text-black font-semibold text-xs">Paid</span>
                    </div>
                    <div class="flex justify-between items-center gap-3">
                        <span class="font-mulish text-black font-semibold text-xs">PTA Levy</span>
                        <span class="font-mulish text-black font-semibold text-xs">Unpaid</span>
                    </div>
                    <div class="flex justify-between items-center gap-3">
                        <span class="font-mulish text-black font-semibold text-xs">Transportation</span>
                        <span class="font-mulish text-black font-semibold text-xs">Unpaid</span>
                    </div>
                </div>
                <button class="px-6 py-3 border border-primary rounded w-full text-primary font-sitka font-semibold text-sm hover:bg-primary hover:text-white transition-all">Make Payment</button>

            </div>

        </section>

        {{-- Message section --}}
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

                            <div class="flex-1 flex flex-col gap-4">
                                <div class="flex flex-col gap-2">
                                    <div class="flex flex-col gap-2 md:items-center md:flex-row justify-between">
                                        <div class="flex items-center">
                                            <h4 class="font-semibold text-communicationText font-sitka">Welcome to New
                                                Academic
                                                Year</h4>
                                            <span class="ml-3 px-2 py-1 dark-btn text-xs rounded font-fredoka">Sent</span>
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

                        </div>

                    <!-- Message 2 -->
                    <div class="border border-school-btn rounded-lg p-4 hover:bg-gray-50 cursor-pointer">

                            <div class="flex-1 flex flex-col gap-4">
                                <div class="flex flex-col gap-2">
                                    <div class="flex flex-col gap-2 md:items-center md:flex-row justify-between">
                                        <div class="flex items-center">
                                            <h4 class="font-semibold text-communicationText font-sitka">Welcome to New
                                                Academic
                                                Year</h4>
                                            <span class="ml-3 px-2 py-1 dark-btn text-xs rounded font-fredoka">Sent</span>
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

                        </div>
                </div>
            </div>
        </div>

    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('performanceChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'May', 'Apr', 'May'],
        datasets: [
            {
                label: 'English Language',
                data: [30, 55, 60, 70, 15, 95],
                borderColor: '#5B6EFF',
                backgroundColor: '#5B6EFF',
                tension: 0.4,
                pointRadius: 5,
                pointHoverRadius: 7,
                fill: false
            },
            {
                label: 'Mathematics',
                data: [80, 95, 140, 125, 60, 150],
                borderColor: '#22C55E',
                backgroundColor: '#22C55E',
                tension: 0.4,
                pointRadius: 5,
                pointHoverRadius: 7,
                fill: false
            },
            {
                label: 'Computer Science',
                data: [120, 180, 220, 205, 120, 230],
                borderColor: '#F97316',
                backgroundColor: '#F97316',
                tension: 0.4,
                pointRadius: 5,
                pointHoverRadius: 7,
                fill: false
            },
            {
                label: 'Other Subjects',
                data: [175, 190, 260, 265, 210, 245],
                borderColor: '#06B6D4',
                backgroundColor: '#06B6D4',
                tension: 0.4,
                pointRadius: 5,
                pointHoverRadius: 7,
                fill: false
            }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    usePointStyle: true,
                    pointStyle: 'circle'
                }
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                max: 300,
                grid: {
                    color: '#e5e7eb'
                }
            },
            x: {
                grid: {
                    color: '#f1f5f9'
                }
            }
        }
    }
});
</script>
@endpush

@endsection
