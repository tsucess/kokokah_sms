@extends('layouts.student', ['active' => 'fees'])

@section('title', 'Fees')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-4 md:px-8 space-y-6">
        <!-- Header -->
    <div class="mb-10 flex flex-col sm:flex-row items-start justify-between gap-6">
        <div class="space-y-2">
            <h2 class="text-xl font-bold text-primary font-fredoka">Fees</h2>
        </div>
        <div class="flex items-center justify-end space-x-3">
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

    <section class="flex flex-col gap-4 lg:items-end lg:justify-between lg:flex-row">
        <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Total Expenses -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 relative overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-2 bg-blue300"></div>
            <p class="text-3xl font-bold text-primary font-inter mb-2">₦495,000</p>
            <p class="text-xs text-primary font-mulish">Total Expenses</p>

        </div>

        <!-- Approved Expenses -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 relative overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-2 bg-green700"></div>
            <p class="text-3xl font-bold text-primary font-inter mb-2">₦495,000</p>
            <p class="text-xs text-primary font-mulish">Approval Expenses</p>
        </div>

        <!-- Pending Expenses -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 relative overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-2 bg-red200"></div>
            <p class="text-3xl font-bold text-primary font-inter mb-2">₦49,000</p>
            <p class="text-xs text-primary font-mulish">Pending Expenses</p>
        </div>
    </div>
    <a  href="{{ route('student.payment-history') }}" class="px-4 py-2 border border-communicationBtn text-sm font-semibold text-primary group rounded-lg hover:bg-communicationBtn transition-colors gap-1 flex items-center">
                View Payment History
    </a>
    </section>

    <!-- Fees Table -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">Fee Item
                            </th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">Amount
                            </th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                               Status</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Due Date</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-primary/5">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Tuition Fee</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦50,000</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-secondary font-sitka">Partially Paid</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12 Nov</td>

                                     <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex min-w-40">
                                <button class="px-6 py-1 border border-primary text-primary font-sitka font-semibold rounded-l-lg hover:bg-primary/40 text-sm">
                                    View
                                </button>
                                <button class="px-6 py-1 border border-primary text-primary font-sitka font-semibold rounded-r-lg hover:bg-primary/40 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                            </tr>
                            <tr class="hover:bg-primary/5">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Tuition Fee</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦50,000</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-green450 font-sitka">Paid</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12 Nov</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka"><button
                                        class=" min-w-40 px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                        Download Reciept
                                    </button></td>
                            </tr>
                            <tr class="hover:bg-primary/5">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Tuition Fee</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦50,000</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">Unpaid</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12 Nov</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka"><button
                                        class="min-w-40 px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                        Pay Now
                                    </button></td>
                            </tr>
                            <tr class=" hover:bg-primary/5">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Tuition Fee</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦50,000</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-green450 font-sitka">Paid</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12 Nov</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka"><button
                                        class="min-w-40 px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                        Download Reciept
                                    </button></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
