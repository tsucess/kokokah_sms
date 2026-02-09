@extends('layouts.admin', ['active' => 'broadsheet'])

@section('title', 'Broadsheet Overview')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-8">
        <!-- Header -->
        <div class="mb-10 flex items-start gap-6">
            <div class="space-y-2">
                <h2 class="text-xl font-bold text-primary font-fredoka">Broadsheet: JSS1A - Second Term, 2024/2025</h2>
            </div>
            <div class="flex items-center justify-end space-x-3 w-full">
                <button
                    class="px-4 py-2 border border-communicationBtn text-sm font-semibold text-primary group rounded-lg hover:bg-communicationBtn transition-colors gap-1 flex items-center">
                    <i class="fa-solid fa-download text-black group-hover:text-primary"></i>
                    Export PDF
                </button>
                <div class="flex items-center ">
                    <button
                        class="px-4 py-2 border font-semibold group border-primary text-primary gap-1 text-sm rounded-l-lg hover:bg-primary hover:text-white transition-colors flex items-center">
                        <svg class="w-5 h-5 text-black group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Export Excel
                    </button>
                    <button
                        class="px-4 py-2 bg-accent font-semibold gap-1 border border-accent text-black text-sm rounded-r-lg hover:border-accent-hover hover:bg-accent-hover transition-colors flex items-center">
                        <i class="fa-solid fa-print text-black"></i>
                        Print Broadsheet
                    </button>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-4 gap-6 mb-10">
            <!-- Total Students -->
            <div class="bg-white rounded-lg border-t-8 border-blue300 p-6 space-y-1.5 shadow-boardsheet">
                <p class="text-3xl font-bold text-primary font-mulish">71%</p>
                <p class="text-xs text-primary font-mulish">Class Average</p>
            </div>

            <!-- Average Class Score -->
            <div class="bg-white rounded-lg border-t-8 border-green700 p-6 space-y-1.5 shadow-boardsheet">
                <p class="text-3xl font-bold text-primary font-mulish">83%</p>
                <p class="text-xs text-primary font-mulish">Top Student Adewale John</p>
            </div>

            <!-- Top Performing Class -->
            <div class="bg-white rounded-lg border-t-8 border-red100 p-6 space-y-1.5 shadow-boardsheet">
                <p class="text-3xl font-bold text-primary font-mulish">45%</p>
                <p class="text-xs text-primary font-mulish">TLowest Student (Fatima Ballo)</p>
            </div>

            <!-- Lowest Performing Subject -->
            <div class="bg-white rounded-lg border-t-8 border-red-500 p-6 space-y-1.5 shadow-boardsheet">
                <p class="text-3xl font-bold text-primary font-mulish">78%</p>
                <p class="text-xs text-primary font-mulish">Top Subject (English)</p>
            </div>

            <div class="bg-white rounded-lg border-t-8 border-green700 p-6 space-y-1.5 shadow-boardsheet">
                <p class="text-3xl font-bold text-primary font-mulish">30%</p>
                <p class="text-xs text-primary font-mulish">Weakest Subject (Mathematics) </p>
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
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                Student ID</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                Student</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                Gender</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                English</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Maths
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                Science</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                Social Studies</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Total
                            </th>
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
                                <span
                                    class="px-3 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-green-500 text-white">
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
                                <span
                                    class="px-3 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-green-500 text-white">
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
                                <span
                                    class="px-3 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-orange-500 text-white">
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
                                <span
                                    class="px-3 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-green-500 text-white">
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
                                <span
                                    class="px-3 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-red-500 text-white">
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
                                <span
                                    class="px-3 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-red-500 text-white">
                                    F
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                    <div class="spac-y-3 p-4 shadow-individualBroadsheet rounded-b-lg">
                        <h5 class="font-mulish text-xl text-primary">71%</h5>
                        <p class="font-mulish text-xs text-primary">Class Average</p>
                    </div>
                    <div class="spac-y-3 p-4 shadow-individualBroadsheet rounded-b-lg">
                        <h5 class="font-mulish text-xl text-primary">71%</h5>
                        <p class="font-mulish text-xs text-primary">Class Average</p>
                    </div>
                    <div class="spac-y-3 p-4 shadow-individualBroadsheet rounded-b-lg">
                        <h5 class="font-mulish text-xl text-primary">71%</h5>
                        <p class="font-mulish text-xs text-primary">Class Average</p>
                    </div>
                    <div class="spac-y-3 p-4 shadow-individualBroadsheet rounded-b-lg">
                        <h5 class="font-mulish text-xl text-primary">71%</h5>
                        <p class="font-mulish text-xs text-primary">Class Average</p>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
