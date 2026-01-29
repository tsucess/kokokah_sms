@extends('layouts.admin', ['active' => 'expenses'])

@section('title', 'Expenses')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-900 mb-1">Expenses</h2>
            <p class="text-sm text-gray-600">This is a random display of all classes and subjects with the respective time limit. You can choose to edit or make change</p>
        </div>
        <a href="{{ route('admin.expenses.create') }}" class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add New Expenses
        </a>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-3 gap-6 mb-6">
        <!-- Total Expenses -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 relative overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-1 bg-blue-500"></div>
            <p class="text-sm text-gray-600 mb-2">Total Expenses</p>
            <p class="text-3xl font-bold text-teal-900">₦495,000</p>
        </div>

        <!-- Approved Expenses -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 relative overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-1 bg-green-500"></div>
            <p class="text-sm text-gray-600 mb-2">Approval Expenses</p>
            <p class="text-3xl font-bold text-teal-900">₦495,000</p>
        </div>

        <!-- Pending Expenses -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 relative overflow-hidden">
            <div class="absolute top-0 left-0 right-0 h-1 bg-red-500"></div>
            <p class="text-sm text-gray-600 mb-2">Pending Expenses</p>
            <p class="text-3xl font-bold text-teal-900">₦19,000</p>
        </div>
    </div>

    <!-- Filters -->
    <div class="mb-6 flex items-center space-x-4">
        <!-- Date Range -->
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-2">Date Range</label>
            <input type="date" value="2025-12-12" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
        </div>

        <!-- Category Dropdown -->
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>---</option>
                <option>Salary</option>
                <option>Maintenance</option>
                <option>Stationery</option>
            </select>
        </div>

        <!-- Payment Method Dropdown -->
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-2">Payment Method</label>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>---</option>
                <option>Bank Transfer</option>
                <option>Cash</option>
                <option>POS</option>
            </select>
        </div>

        <!-- Status Dropdown -->
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>---</option>
                <option>Approved</option>
                <option>Pending</option>
            </select>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <div class="relative">
            <input type="text" placeholder="Search for class..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Expenses Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Expense Tittle</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Payment Method</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Added By</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Row 1 - Teacher Salaries -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">01 Oct 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">Teacher Salaries</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Salary</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">₦450,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Bank Transfer</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                ✓ Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 - Teacher Salaries -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">01 Oct 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">Teacher Salaries</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Salary</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">₦450,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Bank Transfer</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                ✓ Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 - Generate Repair -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">03 Oct 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">Generate Repair</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Maintenance</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">₦40,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Cash</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-500 text-white">
                                ⏱ Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Bursar</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 - School Supplies -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">01 Oct 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">School Supplies</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Stationery</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">₦10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">POS</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                ✓ Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 - Generate Repair -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">03 Oct 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">Generate Repair</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Maintenance</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">₦40,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Cash</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-500 text-white">
                                ⏱ Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Bursar</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

