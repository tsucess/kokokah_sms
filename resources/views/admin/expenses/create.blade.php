@extends('layouts.admin', ['active' => 'expenses'])

@section('title', 'Add New Expenses')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 space-y-2">
        <h2 class="text-2xl font-bold text-primary font-fredoka">Add New Expenses</h2>
        <p class="text-sm text-primary font-inter">This is a random display of all classes and subjects with the respective time limit. You can choose to edit or make change</p>
    </div>

    <!-- Form -->
    <div class="max-w-4xl">
        <form class="flex flex-col gap-7">
            <!-- Expense Title -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Expense Title</label>
                <input type="text" value="Generator Repair" class="w-full outline-none text-primary text-sm">
            </div>

            <!-- Category -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Category</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>Maintenance</option>
                    <option>Salary</option>
                    <option>Stationery</option>
                    <option>Utilities</option>
                </select>
            </div>

            <!-- Amount -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Amount</label>
                <input type="text" value="₦30,000" class="w-full outline-none text-primary text-sm">
            </div>

            <!-- Payment Method -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Payment Method</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>Cash</option>
                    <option>Bank Transfer</option>
                    <option>POS</option>
                    <option>Cheque</option>
                </select>
            </div>

            <!-- Date -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Date</label>
                <div class="relative">
                    <input type="text" value="03 Oct. 2025" class="w-full px-4 text-sm text-primary">
                    <svg class="w-5 h-5 text-gray-400 absolute right-3 top-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>

            <!-- Description -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Description</label>
                <textarea rows="4" class="w-full outline-none text-primary text-sm resize-none">Repaired generator and changed engine oil</textarea>
            </div>

            <!-- Attach File -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Attach File</label>
                <div class="p-12 text-center cursor-pointer">
                    <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                    </svg>
                    <p class="text-sm text-gray-600">Click to upload or drag and drop</p>
                    <p class="text-xs text-gray-500 mt-1">SVG, PNG, JPG or GIF (max. 800x400px)</p>
                </div>
            </div>

            <!-- Status -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Status</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>Approved</option>
                    <option>Pending</option>
                    <option>Rejected</option>
                </select>
            </div>

            <!-- Added By -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Added By</label>
                <input type="text" value="Bursar" class="w-full outline-none text-primary text-sm">
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end">
                <button type="button" class="px-6 py-2 rounded-l-lg font-semibold text-sm bg-accent text-black border border-accent hover:border-accent-hover hover:bg-accent-hover transition-colors">
                    Cancel
                </button>
                <button type="button" class="px-6 py-2 border border-primary text-primary hover:bg-primary hover:text-white transition-colors font-semibold text-sm">
                    Save draft
                </button>
                <button type="submit" class="px-6 py-2 border border-primary text-primary rounded-r-lg hover:bg-primary hover:text-white transition-colors font-semibold text-sm">
                    Save & Approve
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

