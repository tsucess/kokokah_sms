@extends('layouts.student', ['active' => 'attendance-summary'])

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

            <img src="/images/parent-child-info-illustration.png" alt="" class="absolute right-0 sm:right-20 w-20 sm:w-40 top-8 sm:top-0">
        </header>

        <section class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <div class="flex flex-col gap-3 sm:gap-5 rounded-2xl border border-school-btn p-4">
                <div class="flex items-center justify-between gap-3">
                    <h4 class="text-primary text-base font-fredoka">Attendance Rate</h4>
                    <i class="fa-solid fa-school-circle-check"></i>
                </div>
                <h3 class="text-primary text-2xl font-fredoka font-semibold">98%</h3>
                <span class="text-search text-xs font-semibold mt-auto">Good</span>
            </div>
            <div class="flex flex-col gap-3 sm:gap-5 rounded-2xl border border-school-btn p-4">
                <div class="flex items-center justify-between gap-3">
                    <h4 class="text-primary text-base font-fredoka">Total School Days</h4>
                    <i class="fa-solid fa-school-circle-check"></i>
                </div>
                <h3 class="text-primary text-2xl font-fredoka font-semibold">92</h3>
                <span class="text-search text-xs font-semibold mt-auto">Days</span>
            </div>
            <div class="flex flex-col gap-3 sm:gap-5 rounded-2xl border border-school-btn p-4">
                <div class="flex items-center justify-between gap-3">
                    <h4 class="text-primary text-base font-fredoka">Present Days</h4>
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h3 class="text-primary text-2xl font-fredoka font-semibold">89</h3>
                <span class="text-search text-xs font-semibold mt-auto">Days</span>
            </div>
            <div class="flex flex-col gap-3 sm:gap-5 rounded-2xl border border-school-btn p-4">
                <div class="flex items-center justify-between gap-3">
                    <h4 class="text-primary text-base font-fredoka">Absent Days</h4>
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h3 class="text-primary text-2xl font-fredoka font-semibold">3</h3>
                <span class="text-search text-xs font-semibold mt-auto">Days</span>
            </div>
            <div class="flex flex-col gap-3 sm:gap-5 rounded-2xl border border-school-btn p-4">
                <div class="flex items-center justify-between gap-3">
                    <h4 class="text-primary text-base font-fredoka">Late</h4>
                    <i class="fa-solid fa-naira-sign"></i>
                </div>
                <h3 class="text-primary text-2xl font-fredoka font-semibold">3</h3>
                <span class="text-search text-xs font-semibold mt-auto">times</span>
            </div>

        </section>
        {{-- filter --}}
        <div class="flex gap-3 justify-end">
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-40 ">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                    Session</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>2025-2026</option>
                </select>
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-40">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                    Term</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>First Term</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto ">
            <table class="w-full bg-white shadow rounded-2xl">
                <thead class=" border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                            S/N</th>
                        <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                            Student Name</th>
                        <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                            Date</th>
                        <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                            Status</th>
                        <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                            Time-in</th>
                        <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                            Time-out</th>
                        <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                            Comments</th>
                    </tr>
                </thead>
                <tbody class="divide divide-gray-200">
                    <tr class="hover:bg-green50">
                        <td class="px-6 py-3 text-xs font-sitka text-primary">01</td>
                        <td class="px-6 py-3 text-xs font-sitka text-primary flex gap-2 items-center">
                            <img src="/images/avatar.png" alt="" class="w-8 h-8">
                            <span>Taofeeq Abubakar George</span>
                        </td>
                        <td class="px-6 py-3 text-xs font-sitka text-primary">11-11-2025</td>
                        <td class="px-6 py-3 text-xs font-sitka text-primary">
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-check text-green600"></i>Present
                            </div>
                        </td>
                        <td class="px-6 py-3 text-xs font-sitka text-primary">08:00 AM</td>
                        <td class="px-6 py-3 text-xs font-sitka text-primary">08:00 PM</td>
                        <td class="px-6 py-3 text-xs font-sitka text-primary">No comment for him today</td>
                    </tr>
                    <tr class="hover:bg-green50">
                        <td class="px-6 py-3 text-xs font-sitka text-primary">01</td>
                        <td class="px-6 py-3 text-xs font-sitka text-primary flex gap-2 items-center">
                            <img src="/images/avatar.png" alt="" class="w-8 h-8">
                            <span>Taofeeq Abubakar George</span>
                        </td>
                        <td class="px-6 py-3 text-xs font-sitka text-primary">11-11-2025</td>
                        <td class="px-6 py-3 text-xs font-sitka text-primary">
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-check text-green600"></i>Present
                            </div>
                        </td>
                        <td class="px-6 py-3 text-xs font-sitka text-primary">08:00 AM</td>
                        <td class="px-6 py-3 text-xs font-sitka text-primary">08:00 PM</td>
                        <td class="px-6 py-3 text-xs font-sitka text-primary">No comment for him today</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

@endsection
