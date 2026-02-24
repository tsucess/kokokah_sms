@extends('layouts.parent', ['active' => 'attendance-summary'])

@section('title', 'Attendance Summary')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-4 md:px-8 space-y-6">
        <header
            class="bg-linear-to-r from-purple600 from-80%  to-purple700 to-95% rounded-2xl px-6 py-10 shadow-headerBox sm:py-12 md:px-8 lg:px-12 flex items-center relative">
            <div>
                <h2 class="text-white font-poppins text-base md:text-2xl font-semibold">Attendance Summary</h2>
                <span class="text-xs text-white/75 font-poppins">Always stay updated in your student portal</span>
            </div>

            <img src="/images/parent-child-info-illustration.png" alt=""
                class="absolute right-0 sm:right-20 w-20 sm:w-40 top-8 sm:top-0">
        </header>
        <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
            <div class="grid grid-cols-1 gap-3 md:grid-cols-3">
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 min-w-40">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg  px-1 py-0.5 absolute left-5 -top-3">Select
                        Child</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Victor Okoro</option>
                    </select>
                </div>
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 min-w-40">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg  px-1 py-0.5 absolute left-5 -top-3">Select
                        Session</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>2023/2024</option>
                    </select>
                </div>
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 min-w-40">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        Term</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>First Term</option>
                    </select>
                </div>
            </div>

            <div class="flex items-center justify-end space-x-3 lg:shrink-0">
                <button
                    class="px-2 py-2 border border-communicationBtn text-sm font-semibold text-primary group rounded-lg hover:bg-communicationBtn transition-colors gap-1 flex items-center">
                    <i class="fa-solid fa-download text-black group-hover:text-primary"></i>
                    Export PDF
                </button>
                <div class="flex items-center ">
                    <button
                        class="px-2 py-2 border font-semibold group border-primary text-primary gap-1 text-sm rounded-l-lg hover:bg-primary hover:text-white transition-colors flex items-center">
                        <svg class="w-5 h-5 text-black group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Export Excel
                    </button>
                    <button
                        class="px-2 py-2 bg-accent font-semibold gap-1 border border-accent text-black text-sm rounded-r-lg hover:border-accent-hover hover:bg-accent-hover transition-colors flex items-center">
                        <i class="fa-solid fa-print text-black"></i>
                        Print Broadsheet
                    </button>
                </div>
            </div>

        </div>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="border border-school-btn rounded-2xl bg-white p-4 md:p-6 flex flex-col gap-4">
                <h4 class="font-fredoka text-primary text-xs">Present</h4>
                <p class="font-fredoka text-primary text-2xl font-semibold">32</p>
            </div>

            <div class="border border-school-btn rounded-2xl bg-white p-4 md:p-6 flex flex-col gap-4">
                <h4 class="font-fredoka text-primary text-xs">Absent</h4>
                <p class="font-fredoka text-primary text-2xl font-semibold">3</p>
            </div>

            <div class="border border-school-btn rounded-2xl bg-white p-4 md:p-6 flex flex-col gap-4">
                <h4 class="font-fredoka text-primary text-xs">Late</h4>
                <p class="font-fredoka text-primary text-2xl font-semibold">2</p>
            </div>

            <div class="border border-school-btn rounded-2xl bg-white p-4 md:p-6 flex flex-col gap-4">
                <h4 class="font-fredoka text-primary text-xs">Number of Children</h4>
                <p class="font-fredoka text-primary text-2xl font-semibold">96%</p>
            </div>

        </section>

        <div class="flex flex-col gap-4 p-4 md:p-6 bg-white rounded-2xl shadow">
            <h3 class="text-black font-inter text-base font-semibold">Attendance Overview</h3>
            <canvas id="attendanceChart" class="max-h-60"></canvas>
        </div>

        <section class="bg-white shadow-xl rounded-2xl p-2 md:p-6 overflow-x-auto">
            <table class="w-full ">
                <thead class="border-b border-gray-200">

                    <tr>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Week</th>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Present</th>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Absent</th>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Late</th>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Excused</th>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Percentage</th>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Comment</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @for ($i = 1; $i <= 7; $i++)
                    <tr class="hover:bg-gray-50">
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Week 1</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">5</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">0</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4 ">0</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">1</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">96%</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Excellent</td>
                        @endfor
                    </tr>

                </tbody>
            </table>
        </section>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('attendanceChart');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'May', 'Apr', 'May'],
        datasets: [
          {
            label: 'Ada',
            data: [30, 60, 58, 70, 15, 95],
            borderColor: '#4F46E5',
            backgroundColor: 'rgba(79, 70, 229, 0.15)',
            tension: 0.4,
            pointRadius: 4,
            pointBackgroundColor: '#4F46E5',
            pointBorderWidth: 2,
            pointBorderColor: '#fff'
          },
          {
            label: 'Obinna',
            data: [80, 100, 135, 125, 60, 145],
            borderColor: '#16A34A',
            backgroundColor: 'rgba(22, 163, 74, 0.15)',
            tension: 0.4,
            pointRadius: 4,
            pointBackgroundColor: '#16A34A',
            pointBorderWidth: 2,
            pointBorderColor: '#fff'
          },
          {
            label: 'Ebuka',
            data: [120, 190, 225, 210, 120, 230],
            borderColor: '#F59E0B',
            backgroundColor: 'rgba(245, 158, 11, 0.15)',
            tension: 0.4,
            pointRadius: 4,
            pointBackgroundColor: '#F59E0B',
            pointBorderWidth: 2,
            pointBorderColor: '#fff'
          },
          {
            label: 'Chioma',
            data: [175, 200, 260, 265, 205, 245],
            borderColor: '#06B6D4',
            backgroundColor: 'rgba(6, 182, 212, 0.15)',
            tension: 0.4,
            pointRadius: 4,
            pointBackgroundColor: '#06B6D4',
            pointBorderWidth: 2,
            pointBorderColor: '#fff'
          }
        ]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              usePointStyle: true,
              pointStyle: 'circle',
              padding: 20
            }
          }
        },
        scales: {
          y: {
            min: 0,
            max: 300,
            ticks: {
              stepSize: 60
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

            </script>
    @endpush

@endsection
