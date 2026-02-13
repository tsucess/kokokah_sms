@extends('layouts.admin', ['active' => 'parents'])

@section('title', 'Parent Management')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
        <div class="mb-10 flex items-start justify-between gap-6">
            <div class="space-y-2">
                <h2 class="text-xl font-bold text-primary font-fredoka">Parent Management</h2>
                <p class="text-sm text-primary font-sitka">Manage parent information and enrollment</p>
            </div>
            <div class="flex items-center justify-end space-x-3 ">
                <select name="" id=""
                    class="px-4 py-2 border border-communicationBtn text-sm font-semibold text-primary group rounded-lg hover:bg-communicationBtn transition-colors gap-1 flex items-center">
                    <option value="">Export PDF</option>
                </select>

                <div class="flex items-center ">
                    <button
                        class="px-4 py-2 border font-semibold group border-primary text-primary gap-1 text-sm rounded-l-lg hover:bg-primary hover:text-white transition-colors flex items-center">
                        Bulk Upload Parent
                    </button>
                    <button
                        class="px-4 py-2 bg-accent font-semibold gap-1 border border-accent text-black text-sm rounded-r-lg hover:border-accent-hover hover:bg-accent-hover transition-colors flex items-center">
                        <i class="fa-solid fa-plus text-black"></i>
                        Add New Parent
                    </button>
                </div>
            </div>
        </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-3 gap-6 mb-6">
        <!-- Total Parents/Guardians -->
            <div class=" rounded-xl py-7 px-6 flex flex-col gap-4 justify-center shadow-boardsheet">
                <h3 class="text-sm font-mulish text-primary">Total Parents/Guardians</h3>
                <div class="flex items-center justify-between">
                    <div class="space-y-2">
                        <!-- Left Big Number -->
                        <p class="text-h5 font-bold text-primary font-sitka">1,247</p>

                    </div>
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
                                <span class="w-2 h-2 bg-primary rounded-xs"></span>
                                MALE (50%)
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-secondary rounded-xs"></span>
                                FEMALE (50%)
                            </div>
                        </div>

                    </div>
                </div>
                <span class="text-sm font-medium text-active mt-auto">+2% this month</span>
            </div>

        <!-- Total Students Linked -->
        <div class=" rounded-xl py-7 px-6 flex flex-col gap-4 justify-center shadow-boardsheet">
                <h3 class="text-sm font-mulish text-primary">Total Students Linked</h3>
                <div class="flex items-center justify-between">
                    <div class="space-y-2">
                        <!-- Left Big Number -->
                        <p class="text-h5 font-bold text-primary font-sitka">1,247</p>

                    </div>
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
                                <span class="w-2 h-2 bg-primary rounded-xs"></span>
                                MALE (50%)
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-secondary rounded-xs"></span>
                                FEMALE (50%)
                            </div>
                        </div>

                    </div>
                </div>
                <span class="text-sm font-medium text-active mt-auto">+2% this month</span>
            </div>

        <!-- Total Students Not Linked -->
        <div class=" rounded-xl py-7 px-6 flex flex-col gap-4 justify-center shadow-boardsheet">
                <h3 class="text-sm font-mulish text-primary">Total Students Not Linked</h3>
                <div class="flex items-center justify-between">
                    <div class="space-y-2">
                        <!-- Left Big Number -->
                        <p class="text-h5 font-bold text-primary font-sitka">1,247</p>

                    </div>
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
                                <span class="w-2 h-2 bg-primary rounded-xs"></span>
                                MALE (50%)
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-secondary rounded-xs"></span>
                                FEMALE (50%)
                            </div>
                        </div>

                    </div>
                </div>
                <span class="text-sm font-medium text-active mt-auto">+2% this month</span>
            </div>
    </div>

    <!-- Section Label -->
    <div class="mb-4">
        <p class="text-sm font-semibold text-gray-700">Parent</p>
    </div>


    <!-- Filters -->
            <div class="mb-6 flex items-center space-x-4">
                <!-- Select Session Dropdown -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        Gender</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Active</option>
                        <option>2024/2025</option>
                        <option>2023/2024</option>
                    </select>
                </div>

                <!-- Select Term Dropdown -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        Status</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Active</option>
                        <option>First Term</option>
                        <option>Second Term</option>
                        <option>Third Term</option>
                    </select>
                </div>
            </div>

            <!-- Search Bar -->
             <div class="flex-1 relative bg-white rounded-full shadow py-1 mb-10">
                <input type="text" placeholder="Search for classes" class="w-full pl-10 pr-4 py-2 text-sm text-search">
                <svg class="w-5 h-5 text-search absolute left-3 top-2.5" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

    <!-- Parent Cards Grid -->
    <div class="grid grid-cols-3 gap-6">
        @for($i = 1; $i <= 8; $i++)
        <div class="bg-white rounded-lg border-4 border-orange50 p-4">
                    <div class="flex items-start justify-between mb-3">
                        <span class="px-2 py-1 bg-green300 text-black font-mulish font-semibold text-xs rounded">Active</span>
                        <a class="text-gray-400 hover:text-primary">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                        </a>
                    </div>
                    <h3 class="text-lg font-semibold text-primary font-sitka mb-1">Bose Oloude (M)</h3>
                    <p class="text-xs text-primary font-sitka mb-3">Banker</p>

                    <div class="space-y-2 text-sm">
                        <div class="flex items-start font-sitka">
                            <span class="text-primary w-32 font-semibold">Phone Number: </span>
                            <span class="text-primary flex-1"> +234810 000 0000</span>
                        </div>
                        <div class="flex items-start font-sitka">
                            <span class="text-primary w-32 font-semibold">Email: </span>
                            <span class="text-primary flex-1">myemail@email.com</span>
                        </div>
                        <div class="flex items-start flex-col gap-1 font-sitka">
                            <span class="text-primary w-32 font-semibold">Children/Wards</span>
                            <div class="flex items-center gap-2">
                                <div class="border-2 border-communicationBtn rounded-full flex items-center justify-center text-communicationBtn w-7 h-7"><i class="fa-solid fa-user fa-lg"></i></div>
                                <div class="border-2 border-communicationBtn rounded-full flex items-center justify-center text-communicationBtn w-7 h-7"><i class="fa-solid fa-user fa-lg"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex items-center justify-between">
        <p class="text-sm text-gray-600">Showing 1 to 8 of 1,247 entries</p>
        <div class="flex items-center space-x-2">
            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-600 hover:bg-gray-50">Previous</button>
            <button class="px-3 py-1 bg-orange-400 text-white rounded text-sm">1</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-600 hover:bg-gray-50">2</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-600 hover:bg-gray-50">3</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-600 hover:bg-gray-50">...</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-600 hover:bg-gray-50">Next</button>
        </div>
    </div>
</div>
@endsection

