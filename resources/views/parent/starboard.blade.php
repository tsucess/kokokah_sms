@extends('layouts.parent', ['active' => 'starboard'])

@section('title', 'Starboard')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <style>
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
            max-width: 650px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
        }
    </style>
    <div class="p-4 md:px-8 space-y-6">
        <header
            class="bg-linear-to-r from-purple600 from-80%  to-purple700 to-95% rounded-2xl px-6 py-10 shadow-headerBox sm:py-12 md:px-8 lg:px-12 flex items-center relative">
            <div>
                <h2 class="text-white font-poppins text-base md:text-2xl font-semibold">Parent Portal</h2>
                <span class="text-xs text-white/75 font-poppins">Track your child’s progress and celebrate their
                    achievements</span>
            </div>
        </header>

        <section class="flex flex-col gap-10 border border-grey200 rounded-2xl bg-white p-4 md:p-6">
            <div class="grid grid-cols-1 gap-3 md:grid-cols-3">
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 min-w-40">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Select
                        Child</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Victor Okoro</option>
                    </select>
                </div>
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 min-w-40">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Select
                        Session</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>2023/2024</option>
                    </select>
                </div>
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 min-w-40">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Select
                        Term</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>First Term</option>
                    </select>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <img src="/images/view result.jpg" alt="" class="w-20 h-20 rounded-full">
                <div class="flex flex-col gap-1">
                    <h2 class="text-primary font-fredoka text-xl font-semibold">Samuel Musa Ali</h2>
                    <p class="text-primary font-mulish text-sm">Class: Primary 1</p>
                    <p class="text-primary font-mulish text-sm">Arm: 1-A</p>

                </div>
            </div>
        </section>

        <div class="flex flex-col gap-4 p-4 md:p-6 bg-white rounded-2xl shadow">
            <h3 class="text-black font-inter text-base font-semibold">Performance Trend</h3>
            <canvas id="performanceChart" class="max-h-60"></canvas>
        </div>

        <section class="flex flex-col gap-4 p-4 md:p-6 bg-white rounded-2xl shadow">
            <div class="flex flex-col gap-3 md:flex-row md:justify-between md:items-center">
                <h3 class="text-black font-sitka text-base font-semibold">Achievements & Milestones</h3>
                <div class="bg-gray950 rounded-full p-3 flex items-center gap-1 ">
                    <button
                        class="py-1.5 px-5 bg-white text-black font-semibold font-sitka text-sm rounded-full">All</button>
                    <button
                        class="py-1.5 px-5 bg-transparent text-black font-semibold font-sitka text-sm  rounded-full">Academic</button>
                    <button
                        class="py-1.5 px-5 bg-transparent text-black font-semibold font-sitka text-sm  rounded-full">Non-Academic</button>

                </div>
            </div>

            <div class="flex flex-col gap-4">
                @for ($i = 1; $i <= 7; $i++)
                    <div class="rounded-lg p-4 flex items-center gap-4 border border-bulkGreyText justify-between">
                        <div class="flex items-center gap-4">
                            <div class="flex justify-center items-center w-15 h-15 rounded-full bg-green150 shrink-0"><i
                                    class="fa-solid fa-star text-yellow100 fa-lg"></i></div>
                            <div class="flex flex-col gap-1.5">
                                <p class="text-black50 text-sm font-sitka font-semibold">Math Whiz awarded to Aisha Mohammed
                                </p>
                                <span class="text-xs text-user-date font-mulish">15 minutes ago</span>
                                <div class="flex items-center gap-1.5"><i class="fa-regular fa-calendar text-user-date"></i>
                                    <span class="text-xs text-user-date font-mulish">11/20/2025</span>
                                </div>
                            </div>
                        </div>
                        <button onclick="openAchievementModal()" class="bg-secondary  px-6 py-0.5 rounded"> <i
                                class="fa-solid fa-share-nodes text-white"></i></button>
                    </div>
                @endfor
            </div>
        </section>

    </div>

    <!-- Achievement Modal -->
    <div id="achievementModal" class="modal-overlay bg-primary/50 mb-0">
        <div class="modal-content p-8">

            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center gap-1"><i class="fa-solid fa-share-nodes text-black fa-lg"></i>
                    <h2 class="text-primary font-fredoka text-lg font-semibold">Share Achievement</h2>
                </div>
                <button onclick="closeachievementModal()" class="text-gray-700 hover:text-gray-900 transition-colors">
                    <i class="fa-regular fa-circle-xmark fa-lg"></i>
                </button>
            </div>

            <div class="bg-purple800 rounded-2xl p-4 flex flex-col gap-8 mb-6 max-w-lg mx-auto">
                <div class="flex gap-2 items-center">
                    <div class="bg-purple900 w-15 h-15 rounded-full flex items-center justify-center"><i
                            class="fa-solid fa-graduation-cap text-white fa-xl"></i></div>
                    <div class="flex flex-col gap-1">
                        <h3 class="font-sitka font-medium text-white text-base">KOKOKAH STARBOARD</h3>
                        <p class="font-mulish text-xs text-white">Digital Hall of Fame</p>
                    </div>
                </div>

                <div class="flex justify-center items-center w-20 h-20 self-center rounded-full bg-green150 shrink-0"><i
                        class="fa-solid fa-star text-yellow100 fa-2xl"></i></div>

                <div class="flex flex-col gap-1 items-center">
                    <h5 class="font-sitka font-semibold text-sm text-white">Math Whiz awarded to Aisha Mohammed</h5>
                    <p class="font-mulish text-[10px] text-white">Earned by Aisha</p>
                    <p class="font-mulish text-[10px] text-white">November 2025</p>
                </div>

                <button class="text-white font-mulish bg-purple150 rounded w-full py-3 text-xs">Scored 92% in Mathematics
                    Term 1 exam</button>
                <p class="text-white text-xs font-mulish text-center">Celebrating achievements with Kokokah</p>

            </div>

            <div class="flex flex-col gap-2 rounded-md p-3 bg-bulkBg max-w-md mx-auto mb-6">
                <h4 class="text-primary font-fredoka text-base">Auto-generated caption:</h4>
                <p class="text-primary text-xs font-poppins italic">Aisha just earned the “Math Whiz” badge on Kokokah!
                    Scored 92% in Mathematics Term 1 exam #Kokokah #SmartLearningAfrica</p>
            </div>

            <div class="flex flex-col gap-4 rounded-md p-3 bg-bulkBg max-w-md mx-auto mb-6">
                <h4 class="text-primary font-fredoka text-base">Share this proud moment:</h4>
                <div class="grid grid-cols-2 gap-2.5">
                    <button
                        class="rounded-sm font-poppins flex items-center gap-1.5 justify-center bg-green650 text-white text-sm h-10 w-full"><i
                            class="fa-brands fa-whatsapp"></i> WhatsApp</button>
                    <button
                        class="rounded-sm font-poppins flex items-center gap-1.5 justify-center bg-blue150 text-white text-sm h-10 w-full"><i
                            class="fa-brands fa-facebook"></i> Facebook</button>
                    <button
                        class="rounded-sm font-poppins flex items-center gap-1.5 justify-center bg-purple250 text-white text-sm h-10 w-full"><i
                            class="fa-brands fa-instagram"></i> Instagram</button>
                    <button
                        class="rounded-sm font-poppins flex items-center gap-1.5 justify-center bg-blue250 text-white text-sm h-10 w-full"><i
                            class="fa-brands fa-linkedin"></i> Linkedln</button>
                </div>

            </div>
            <button class="w-full border-[1.5px] border-bulkGreyText rounded-sm h-12 flex items-center justify-center gap-2 text-black font-mulish text-sm font-semibold"> <i class="fa-regular fa-copy"></i> Copy Link & Caption</button>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
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
                        data: [55, 63, 75, 78, 70, 38],
                        borderColor: '#6366F1',
                        backgroundColor: 'rgba(99, 102, 241, 0.2)',
                        tension: 0.4,
                        pointRadius: 5,
                        pointBackgroundColor: '#6366F1',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
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
                            min: 0,
                            max: 100,
                            ticks: {
                                stepSize: 20
                            },
                            grid: {
                                borderDash: [5, 5]
                            }
                        },
                        x: {
                            grid: {
                                borderDash: [5, 5]
                            }
                        }
                    }
                }
            });

            function openAchievementModal() {
                document.getElementById('achievementModal').classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeAchievementModal() {
                document.getElementById('achievementModal').classList.remove('active');
                document.body.style.overflow = 'auto';
            }

            // Close modal when clicking outside
            document.addEventListener('click', function(event) {
                const achievementModal = document.getElementById('achievementModal');

                if (event.target === achievementModal) {
                    closeAchievementModal();
                }
            });
        </script>
    @endpush
@endsection
