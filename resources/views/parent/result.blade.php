@extends('layouts.parent', ['active' => 'result'])

@section('title', 'Result')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-4 md:px-8 space-y-6">
        <!-- Header -->
    <div class="mb-10 flex flex-col md:flex-row items-start justify-between gap-6">
        <div class="space-y-2">
            <h2 class="text-xl font-bold text-primary font-fredoka">My Results</h2>
        </div>
        <div class="flex items-center justify-end space-x-3">
            <button class="px-4 py-2 border border-communicationBtn text-xs md:text-sm font-semibold text-primary group rounded-lg hover:bg-communicationBtn transition-colors gap-1 flex items-center">
                <i class="fa-solid fa-download text-black group-hover:text-primary hidden sm:inline"></i>
                Export PDF
            </button>
            <div class="flex items-center ">
            <button class="px-4 py-2 border font-semibold group border-primary text-primary gap-1 text-xs md:text-sm rounded-l-lg hover:bg-primary hover:text-white transition-colors flex items-center">
                <svg class="w-5 h-5 text-black group-hover:text-white hidden sm:inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Export Excel
            </button>
            <button class="px-4 py-2 bg-accent font-semibold gap-1 border border-accent text-black text-xs md:text-sm rounded-r-lg hover:border-accent-hover hover:bg-accent-hover transition-colors flex items-center">
                <i class="fa-solid fa-print text-black hidden sm:inline"></i>
                Print Broadsheet
            </button>
            </div>
        </div>
    </div>

    {{-- filter --}}
    <div class="flex gap-3">
        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-40 ">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Session</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>2025-2026</option>
                </select>
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-40">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Term</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>First Term</option>
                </select>
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-40">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Term</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>First Term</option>
                </select>
            </div>
    </div>

    <section class="flex flex-col gap-5 bg-white rounded-2xl p-4 shadow-md">
    <header class="flex flex-col gap-3 md:flex-row justify-between md:items-end">
            <div class="flex items-center gap-3">
                <img src="/images/view result.jpg" alt="" class="w-30 h-30 rounded-full">
                <div class="flex flex-col gap-1">
                    <h2 class="text-primary font-fredoka text-xl font-semibold">Samuel Musa Ali</h2>
                    <p class="text-primary font-mulish text-sm">Class: Primary 1</p>
                    <p class="text-primary font-mulish text-sm">Arm: 1-A</p>

                </div>
            </div>
            <button class="px-4 py-4 rounded bg-primary text-white font-medium font-roboto">Class Position 4th</button>
        </header>
        <section class="flex flex-col gap-3 md:flex-row">
            <div class="border border-gray400 rounded px-3 py-3 flex items-center gap-2 max-w-70 w-full bg-white">
                <div class="flex items-center justify-center bg-gray500 rounded-sm p-3"><i
                        class="fa-regular fa-calendar"></i></div>
                <p class="text-gray600 font-semibold text-sm font-roboto">Present: 89 days</p>
            </div>
            <div class="border border-gray400 rounded px-3 py-3 flex items-center gap-2 max-w-70 w-full bg-white">
                <div class="flex items-center justify-center bg-gray500 rounded-sm p-3"><i
                        class="fa-regular fa-calendar"></i></div>
                <p class="text-gray600 font-semibold text-sm font-roboto">Absent: 3 days</p>
            </div>
            <div class="border border-gray400 rounded px-3 py-3 flex items-center gap-2 max-w-70 w-full bg-white">
                <div class="flex items-center justify-center bg-gray500 rounded-sm p-3"><i
                        class="fa-regular fa-calendar"></i></div>
                <p class="text-gray600 font-semibold text-sm font-roboto">Late: 3 times</p>
            </div>
        </section>

        <!-- Broadsheet Table -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                Subject</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">CA
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Test
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Exam
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Total
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Grade
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                Remark</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">English Language</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                25
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">9</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">86/100</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Excellent</td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">English Language</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                25
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">9</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">86/100</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Excellent</td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">English Language</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                25
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">9</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">86/100</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Excellent</td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">English Language</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                25
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">9</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">86/100</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Excellent</td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">English Language</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">
                                25
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">9</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">86/100</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">Excellent</td>
                        </tr>

                        <!-- Row 6 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">English Language</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                25
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">9</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">86/100</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Excellent</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <section class="max-w-3xl flex flex-col gap-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 ">
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-20">
                    <label
                        class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Teacher
                        Comment</label>
                    <textarea placeholder="You performed excellently term this term. Keep improving your weaker subjects."
                        class="w-full outline-none text-primary text-sm resize-none h-full"></textarea>
                </div>

                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-20">
                    <label
                        class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Principal
                        Comment</label>
                    <textarea placeholder="You performed excellently term this term. Keep improving your weaker subjects."
                        class="w-full outline-none text-primary text-sm resize-none h-full"></textarea>
                </div>

                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-20">
                    <label
                        class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Status</label>
                    <textarea placeholder="Promoted" class="w-full outline-none text-primary text-sm resize-none h-full"></textarea>
                </div>

                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-20">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Next
                        Section Begins</label>
                    <input type="date" placeholder="22/2/2025"
                        class="w-full outline-none text-primary text-sm resize-none h-full" />
                </div>
            </div>
        </section>
        </section>

    </div>

@endsection
