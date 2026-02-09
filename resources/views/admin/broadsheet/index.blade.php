@extends('layouts.admin', ['active' => 'broadsheet'])

@section('title', 'Broadsheet Overview')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-10 flex items-start gap-6">
        <div class="space-y-2">
            <h2 class="text-xl font-bold text-primary font-fredoka">Broadsheet Overview</h2>
            <p class="text-sm text-primary font-sitka">This is a random display of all classes and students with the expected time-line. You can choose to edit or make change</p>
        </div>
        <div class="flex items-center justify-end space-x-3 w-full">
            <button class="px-4 py-2 border border-communicationBtn text-sm font-semibold text-primary group rounded-lg hover:bg-communicationBtn transition-colors gap-1 flex items-center">
                <i class="fa-solid fa-download text-black group-hover:text-primary"></i>
                Export PDF
            </button>
            <div class="flex items-center ">
            <button class="px-4 py-2 border font-semibold group border-primary text-primary gap-1 text-sm rounded-l-lg hover:bg-primary hover:text-white transition-colors flex items-center">
                <svg class="w-5 h-5 text-black group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                Export Excel
            </button>
            <button class="px-4 py-2 bg-accent font-semibold gap-1 border border-accent text-black text-sm rounded-r-lg hover:border-accent-hover hover:bg-accent-hover transition-colors flex items-center">
                <i class="fa-solid fa-print text-black"></i>
                Print Broadsheet
            </button>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="flex items-end gap-3 justify-between mb-8">
        <div class="flex gap-2 items-center w-2/3">
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full ">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School Session</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>2025-2026</option>
                </select>
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Term</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>First Term</option>
                </select>
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Class</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>1</option>
                </select>
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Arm</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>1</option>
                </select>
            </div>
        </div>
            <a href="{{ route('admin.broadsheet.individual-broadsheet') }}" class="px-6 py-2 bg-accent text-black text-sm font-semibold rounded-lg hover:bg-accent-hover transition-colors">
                View Broadsheet
            </a>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-4 gap-6 mb-10">
        <!-- Total Students -->
        <div class="bg-white rounded-lg border-t-8 border-blue300 p-6 space-y-1.5 shadow-boardsheet">
            <p class="text-3xl font-bold text-primary font-mulish">180</p>
            <p class="text-xs text-primary font-mulish">Total Students</p>
        </div>

        <!-- Average Class Score -->
        <div class="bg-white rounded-lg border-t-8 border-green700 p-6 space-y-1.5 shadow-boardsheet">
            <p class="text-3xl font-bold text-primary font-mulish">72%</p>
            <p class="text-xs text-primary font-mulish">Average Class Score</p>
        </div>

        <!-- Top Performing Class -->
        <div class="bg-white rounded-lg border-t-8 border-red100 p-6 space-y-1.5 shadow-boardsheet">
            <p class="text-3xl font-bold text-primary font-mulish">SS2A (83%)</p>
            <p class="text-xs text-primary font-mulish">Top Performing Class</p>
        </div>

        <!-- Lowest Performing Subject -->
        <div class="bg-white rounded-lg border-t-8 border-red-500 p-6 space-y-1.5 shadow-boardsheet">
            <p class="text-3xl font-bold text-primary font-mulish">Mathematics</p>
            <p class="text-xs text-primary font-mulish">Lowest Performing Subject </p>
        </div>
    </div>

    <!-- Search -->
    <div class="relative mb-8">
            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" placeholder="Search for class..."
                class="w-full pl-10 pr-4 py-4 text-body5 text-search bg-white shadow-sm rounded-full focus:ring-2 focus:ring-rimary focus:border-transparent">
        </div>

    <!-- Broadsheet Table -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Student ID</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Student</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Gender</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">English</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Maths</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Science</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Social Studies</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Total</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">93001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-primary font-sitka">John Adewale</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Male</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">15 / 70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">80 \ 85</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-green-500 text-white">
                                A
                            </span>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">93001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-primary font-sitka">John Adewale</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Male</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">15 / 70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">80 \ 85</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-green-500 text-white">
                                B
                            </span>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">93001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-primary font-sitka">John Adewale</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Male</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">15 / 70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">80 \ 85</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-orange-500 text-white">
                                C
                            </span>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">93001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-primary font-sitka">John Adewale</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Male</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">15 / 70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">80 \ 85</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-green-500 text-white">
                                A
                            </span>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">93001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-primary font-sitka">John Adewale</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Male</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">15 / 70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">80 \ 85</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-red-500 text-white">
                                F
                            </span>
                        </td>
                    </tr>

                    <!-- Row 6 -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">93001</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-primary font-sitka">John Adewale</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Male</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">15 / 70</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">80 \ 85</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-red-500 text-white">
                                F
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

