@extends('layouts.student', ['active' => 'starboard'])

@section('title', 'Starboard')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <style>
        .chart-card {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            margin: 30px auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        canvas {
            height: 350px !important;
        }

        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 50;
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            max-width: 600px;
            width: 90%;
            max-height: 90vh;
            overflow-y: visible;
            position: relative;
        }
    </style>
    <div class="p-4 md:px-8 space-y-6">
        <header
            class="w-full rounded-2xl h-44 bg-linear-to-r from-purple600 to-purple700 shadow-headerBox flex items-center justify-between gap-2 px-4 md:px-8">
            <div class="flex flex-col gap-1">
                <h2 class="text-white font-poppins font-semibold text-lg md:text-xl">Welcome back, Aisha!</h2>
                <p class="text-white/75 font-poppins text-xs">You’re doing amazing! Keep up the great work</p>
            </div>
            <div class="flex flex-col gap-1 items-center">
                <h2 class="text-white font-poppins font-semibold text-lg md:text-xl">3</h2>
                <p class="text-white/75 font-poppins text-xs">Badges Awarded Today</p>
            </div>
        </header>

        {{-- chart --}}
        <div class="chart-card flex flex-col gap-3">
            <h3 class="text-black font-inter text-sm font-semibold">Recent Performance</h3>
            <canvas id="performanceChart"></canvas>
        </div>

        <section class="flex flex-col gap-4">
            <h3 class="text-black font-sitka text-sm font-semibold">Your Badges</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @for ($i = 1; $i <= 6; $i++)
                    <div onclick='openBadgeModal()'
                        class="border-2 border-purple600 rounded-2xl px-4 py-6 md:py-8 flex flex-col gap-5 items-center bg-white">
                        <div class="bg-green150 flex items-center justify-center rounded-full w-15 h-15">
                            <img src="/images/star.png" alt="" class="w-8">
                        </div>
                        <div class="flex flex-col gap-1 items-center">
                            <h4 class="font-sitka font-semibold text-black50 text-base">Math Whiz</h4>
                            <p class="text-sm text-user-date font-mulish">Awarded for consistent attendance</p>
                        </div>
                    </div>
                @endfor
            </div>
        </section>


    </div>

    <div id="badgeModal" class="modal-overlay bg-primary/50 mb-0">
        <div class="modal-content p-8 relative mt-20">
            <div class="absolute -top-7 left-1/2 transform -translate-x-1/2 w-15 h-15 flex items-center justify-center shadow-celebration rounded-full bg-white z-10">
                <img src="/images/celebration-icon.png" alt="" class="w-8">
            </div>

            <div class="flex justify-end mb-6">
                <button onclick="closeBadgeModal()" class="text-gray-700 hover:text-gray-900 transition-colors">
                    <i class="fa-regular fa-circle-xmark fa-lg"></i>
                </button>
            </div>
            <h4 class="text-sm text-center mb-5 font-poppins text-black400 font-semibold">Badge Unlocked!</h4>

            <div class="border-2 border-purple600 rounded-2xl px-4 py-6 md:py-8 flex flex-col gap-5 items-center bg-white">
                <div class="bg-green150 flex items-center justify-center rounded-full w-15 h-15">
                    <img src="/images/star.png" alt="" class="w-8">
                </div>
                <div class="flex flex-col gap-1 items-center">
                    <h4 class="font-sitka font-semibold text-black50 text-base">Math Whiz</h4>
                    <p class="text-sm text-user-date font-mulish">Awarded for consistent attendance</p>
                </div>
                <div class="bg-school-btn flex items-center gap-1 px-3 py-1 rounded-md"><i class="fa-solid fa-trophy text-primary"></i> <span class="text-xs font-semibold text-primary">Earned on 20/12/2025</span></div>
                <div class="bg-accent w-80 py-3 rounded-md flex items-center justify-center text-sm font-sitka text-black font-semibold">Awesome!</div>
            </div>


        </div>

    </div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            // badge modal
            function openBadgeModal() {
                document.getElementById('badgeModal').classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeBadgeModal() {
                document.getElementById('badgeModal').classList.remove('active');
                document.body.style.overflow = 'auto';
            }

            // Close modal when clicking outside
            document.addEventListener('click', function(event) {
                const badgeModal = document.getElementById('badgeModal');

                if (event.target === badgeModal) {
                    closeMessageModal();
                }
            });

            //chart js
            const ctx = document.getElementById('performanceChart');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [
                        'English',
                        'Mathematics',
                        'Biology',
                        'History',
                        'Geography',
                        'Computer Science'
                    ],
                    datasets: [{
                        label: '2023',
                        data: [55, 65, 75, 78, 70, 38],
                        borderColor: '#6366f1',
                        backgroundColor: 'rgba(99, 102, 241, 0.15)',
                        pointBackgroundColor: '#6366f1',
                        pointBorderColor: '#ffffff',
                        pointBorderWidth: 2,
                        pointRadius: 5,
                        tension: 0.4,
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        }
                    },
                    scales: {
                        y: {
                            min: 0,
                            max: 100,
                            ticks: {
                                stepSize: 20
                            },
                            grid: {
                                color: 'rgba(0,0,0,0.05)'
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(0,0,0,0.05)'
                            }
                        }
                    }
                }
            });
        </script>
    @endpush
@endsection
