@extends('layouts.admin', ['active' => 'expenses'])

@section('title', 'Add New Expenses')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-teal-900 mb-1">Add New Expenses</h2>
        <p class="text-sm text-gray-600">This is a random display of all classes and subjects with the respective time limit. You can choose to edit or make change</p>
    </div>

    <!-- Form -->
    <div class="max-w-4xl">
        <form>
            <!-- Expense Title -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Expense Title</label>
                <input type="text" value="Generator Repair" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            </div>

            <!-- Category -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    <option>Maintenance</option>
                    <option>Salary</option>
                    <option>Stationery</option>
                    <option>Utilities</option>
                </select>
            </div>

            <!-- Amount -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Amount</label>
                <input type="text" value="₦30,000" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            </div>

            <!-- Payment Method -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Payment Method</label>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    <option>Cash</option>
                    <option>Bank Transfer</option>
                    <option>POS</option>
                    <option>Cheque</option>
                </select>
            </div>

            <!-- Date -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                <div class="relative">
                    <input type="text" value="03 Oct. 2025" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent pr-10">
                    <svg class="w-5 h-5 text-gray-400 absolute right-3 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent resize-none">Repaired generator and changed engine oil</textarea>
            </div>

            <!-- Attach File -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Attach File</label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-12 text-center hover:border-orange-400 transition-colors cursor-pointer">
                    <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                    </svg>
                    <p class="text-sm text-gray-600">Click to upload or drag and drop</p>
                    <p class="text-xs text-gray-500 mt-1">SVG, PNG, JPG or GIF (max. 800x400px)</p>
                </div>
            </div>

            <!-- Status -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    <option>Approved</option>
                    <option>Pending</option>
                    <option>Rejected</option>
                </select>
            </div>

            <!-- Added By -->
            <div class="mb-8">
                <label class="block text-sm font-medium text-gray-700 mb-2">Added By</label>
                <input type="text" value="Bursar" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end space-x-3">
                <button type="button" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                    Cancel
                </button>
                <button type="button" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                    Save draft
                </button>
                <button type="submit" class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
                    Save & Approve
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

