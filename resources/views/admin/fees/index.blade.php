@extends('layouts.admin', ['active' => 'fees'])

@section('title', 'Fees')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<style>
    .active-tab {
            border-bottom-color: #FDAF22;
            color: #FDAF22;
        }

        .hidden {
            display: none;
        }
</style>
<div class="p-8">
    <!-- Header -->
    <div class="mb-10 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-primary font-fredoka">Fees</h2>
            <p class="text-sm text-primary font-sitka">Manage user information and enrollment</p>
        </div>
        <div class="flex space-x-3">
            <button class="px-4 py-2 gap-2 border group border-communicationBtn text-sm text-primary font-semibold rounded-lg hover:border-primary hover:bg-primary hover:text-white transition-colors flex items-center">
                <i class="fa-solid fa-download text-black group-hover:text-white"></i>
                Send Payment Link
            </button>
            <div class="flex items-center">
            <button class="px-4 py-2 border border-primary text-primary rounded-l-lg font-semibold hover:bg-primary hover:text-white  transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Download
            </button>
            <button class="px-4 py-2 border border-school-btn group font-semibold gap-2 text-primary bg-school-btn rounded-r-lg hover:bg-gray-50 transition-colors flex items-center">
                <i class="fa-solid fa-print text-black group-hover:text-primary"></i>
                Notify Defaulters
            </button>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="mb-6 flex items-center space-x-4">
        <!-- Select Session Dropdown -->
        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Select Session</label>
            <select class="w-full outline-none text-primary text-sm">
                <option>Active</option>
                <option>2024/2025</option>
                <option>2023/2024</option>
            </select>
        </div>

        <!-- Select Term Dropdown -->
        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Select Term</label>
            <select class="w-full outline-none text-primary text-sm">
                <option>Active</option>
                <option>First Term</option>
                <option>Second Term</option>
                <option>Third Term</option>
            </select>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-3 gap-6 mb-6">
        <!-- Expected Revenue -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="h-2 bg-blue-500"></div>
            <div class="p-6 flex flex-col gap-8">
                <div class="flex flex-col gap-1">
                    <i class="fa-solid fa-user-graduate text-black"></i>

                <p class="text-3xl font-semibold text-primary font-inter">1,247</p>
                <p class="text-xs text-primary font-inter">Expected Revenue</p>
                </div>

                <div class="flex items-center text-sm text-blue-600">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    +12 this month
                </div>
            </div>
        </div>

        <!-- Generated Revenue -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="h-2 bg-green-500"></div>
            <div class="p-6 flex flex-col gap-8">
                <div class="flex flex-col gap-1">
                    <i class="fa-solid fa-user-graduate text-black"></i>

                <p class="text-3xl font-semibold text-primary font-inter">1,247</p>
                <p class="text-xs text-primary font-inter">Generated Revenue</p>
                </div>

                <div class="flex items-center text-sm text-blue-600">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    +12 this month
                </div>
            </div>
        </div>

        <!-- Outstanding -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="h-2 bg-red-500"></div>
            <div class="p-6 flex flex-col gap-8">
                <div class="flex flex-col gap-1">
                    <i class="fa-solid fa-user-graduate text-black"></i>

                <p class="text-3xl font-semibold text-primary font-inter">1,247</p>
                <p class="text-xs text-primary font-inter">Outstanding</p>
                </div>

                <div class="flex items-center text-sm text-blue-600">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    +12 this month
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class=" mb-6">
        <nav class="flex space-x-8" aria-label="Tabs">
            <button onclick="showTab('dashboard')" id="tab-dashboard" class="py-4 px-1 border-b-2 border-transparent text-primary hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                Dashboard
            </button>
            <button onclick="showTab('student-list')" id="tab-student-list" class="py-4 px-1 border-b-2 border-transparent text-primary font-medium text-sm">
                Student List
            </button>
        </nav>
    </div>

    {{-- dashboard --}}
    <div id="content-dashboard" class="tab-content hidden">

    </div>

    <!-- Student Fees Table -->
    <div id="content-student-list" class="tab-content hidden bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class=" border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left">
                            <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Student</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Level</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Class</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Amount</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Discount</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Expected</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Paid</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Outstand</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @for($i = 1; $i <= 7; $i++)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-black text-orange-400 focus:ring-orange-500">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="h-10 w-10 shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=Samuel+Victor&background=0D9488&color=fff" alt="">
                                </div>
                                <div class="ml-4">
                                    <a href="#" class="text-sm font-medium text-primary font-sitka">Samuel Victor</a>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Primary 1</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">A</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">₦15,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">₦5,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">₦5,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">₦5,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-red-500 font-sitka">₦5,000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="relative">
                                <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-white px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <div class="flex items-center">
                <button class="px-3 py-1 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 text-sm">
                    Previous
                </button>
            </div>
            <div class="text-sm text-gray-600">
                Page 1 of 12
            </div>
            <div class="flex items-center">
                <button class="px-3 py-1 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 text-sm">
                    Next
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Dropdown Menu Template (hidden by default) -->
<div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-10">
    <div class="py-1">
        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            View Status
        </a>
        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            Notify Student
        </a>
    </div>
</div>
<script>
    function showTab(tabName) {
                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Remove active class from all tabs
                document.querySelectorAll('[id^="tab-"]').forEach(tab => {
                    tab.classList.remove('active-tab');
                });

                // Show selected tab content
                const contentElement = document.getElementById('content-' + tabName);
                if (contentElement) {
                    contentElement.classList.remove('hidden');
                }

                // Add active class to clicked tab
                const activeTab = document.getElementById('tab-' + tabName);
                if (activeTab) {
                    activeTab.classList.add('active-tab');
                }
            }

            // On load
            document.addEventListener('DOMContentLoaded', () => {
                showTab('dashboard');
            });
</script>
@endsection

