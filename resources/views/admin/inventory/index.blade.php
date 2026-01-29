@extends('layouts.admin', ['active' => 'inventory'])

@section('title', 'Inventory Management')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-900 mb-1">Inventory Management</h2>
            <p class="text-sm text-gray-600">Manage and oversee your school management platform</p>
        </div>
        <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add New Item
        </button>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-4 gap-6 mb-6">
        <!-- Total Items -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="h-1 bg-blue-500"></div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <p class="text-sm text-gray-600">Total Items</p>
                    <div class="p-2 bg-gray-100 rounded-lg">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                </div>
                <p class="text-4xl font-bold text-teal-900">325</p>
            </div>
        </div>

        <!-- In Stock -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="h-1 bg-green-500"></div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <p class="text-sm text-gray-600">In Stock</p>
                    <div class="p-2 bg-gray-100 rounded-lg">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <p class="text-4xl font-bold text-teal-900">290</p>
            </div>
        </div>

        <!-- Low Stock -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="h-1 bg-red-500"></div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <p class="text-sm text-gray-600">Low Stock</p>
                    <div class="p-2 bg-gray-100 rounded-lg">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                </div>
                <p class="text-4xl font-bold text-teal-900">15</p>
            </div>
        </div>

        <!-- Total Value -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="h-1 bg-gray-300"></div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <p class="text-sm text-gray-600">Total Value</p>
                    <div class="p-2 bg-gray-100 rounded-lg">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <p class="text-4xl font-bold text-teal-900">₦4,900,000</p>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="mb-6 flex items-center gap-4">
        <!-- Date Range -->
        <div>
            <input type="text" value="12-12-2025" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
        </div>

        <!-- Category -->
        <div>
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Category</option>
                <option>Stationery</option>
                <option>Furniture</option>
                <option>Electronics</option>
            </select>
        </div>

        <!-- Status -->
        <div>
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Status</option>
                <option>In Stock</option>
                <option>Low Stock</option>
                <option>Out of Stock</option>
            </select>
        </div>

        <!-- Search Bar -->
        <div class="flex-1">
            <div class="relative">
                <input type="text" placeholder="Search for users..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Inventory Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unit Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Value</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Added</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Row 1 - Exercise Books -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Exercise Books</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Stationery</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">200 pcs</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦300</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦60,000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="flex items-center text-sm text-gray-900">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                In Stock
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12/12/2025</td>
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

                    <!-- Row 2 - Chairs -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Chairs</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Furniture</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦15,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦45,000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="flex items-center text-sm text-gray-900">
                                <svg class="w-4 h-4 text-yellow-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                Low Stock
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12/12/2025</td>
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

                    <!-- Row 3 - Projector -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Projector</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Electronics</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦85,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦85,000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="flex items-center text-sm text-gray-900">
                                <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                                Out of Stock
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12/12/2025</td>
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

                    <!-- Row 4 - Exercise Books -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Exercise Books</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Stationery</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">200 pcs</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦300</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦60,000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="flex items-center text-sm text-gray-900">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                In Stock
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12/12/2025</td>
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

                    <!-- Row 5 - Chairs -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Chairs</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Furniture</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦15,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₦45,000</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="flex items-center text-sm text-gray-900">
                                <svg class="w-4 h-4 text-yellow-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                Low Stock
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12/12/2025</td>
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
