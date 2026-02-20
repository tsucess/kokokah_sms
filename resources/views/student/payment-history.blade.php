@extends('layouts.student', ['active' => 'fees'])

@section('title', 'Payment History')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-8">
        <!-- Header -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-primary font-fredoka">Payment History</h2>
        </div>

        <!-- Search Bar -->
        <div class="flex-1 relative bg-white rounded-full shadow py-1 mb-9">
            <input type="text" placeholder="Search for classes" class="w-full pl-10 pr-4 py-2 text-sm text-search">
            <svg class="w-5 h-5 text-search absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>

        <!-- Login History Table -->
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">Date
                            </th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">Item
                            </th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Amount</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Method</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Status</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Receipt</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @for ($i = 1; $i <= 10; $i++)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">08 Nov</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">PTA Fee</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">₦5,000</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Card</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Successful</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka"><button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                        Download
                                    </button></td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
