@extends('layouts.admin', ['active' => 'expenses'])

@section('title', 'Expenses')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div class="space-y-2">
            <h2 class="text-2xl font-bold text-primary font-fredoka">Expenses</h2>
            <p class="text-sm text-primary font-sitka">This is a random display of all classes and subjects with the respective time limit.</p>
        </div>
        <a href="{{ route('admin.expenses.create') }}" class="px-4 py-2 bg-accent text-black font-semibold rounded-lg hover:bg-accent-hover transition-colors flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add New Expenses
        </a>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-4 gap-6 mb-6">
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

    <!-- Filters -->
    <div class="mb-6 flex items-center space-x-4">
        <!-- Date Range -->
        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Date Range</label>
            <input type="date" value="2025-12-12" class="w-full outline-none text-primary text-sm">
        </div>

        <!-- Category Dropdown -->
        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Category</label>
            <select class="w-full outline-none text-primary text-sm">
                <option>---</option>
                <option>Salary</option>
                <option>Maintenance</option>
                <option>Stationery</option>
            </select>
        </div>

        <!-- Payment Method Dropdown -->
        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Payment Method</label>
            <select class="w-full outline-none text-primary text-sm">
                <option>---</option>
                <option>Bank Transfer</option>
                <option>Cash</option>
                <option>POS</option>
            </select>
        </div>

        <!-- Status Dropdown -->
        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Status</label>
            <select class="w-full outline-none text-primary text-sm">
                <option>---</option>
                <option>Approved</option>
                <option>Pending</option>
            </select>
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

    <!-- Expenses Table -->
    <div class="bg-white rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">Expense Tittle</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">Payment Method</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">Added By</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Row 1 - Teacher Salaries -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">01 Oct 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-primary font-sitka">Teacher Salaries</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Salary</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">₦450,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Bank Transfer</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                ✓ Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex">
                                <button onclick="openExpenseDetailsModal()" class="px-3 py-1 border border-primary text-primary rounded-l-lg text-sm hover:bg-primary hover:text-white">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-primary text-primary rounded-r-lg text-sm hover:bg-primary hover:text-white">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 - Teacher Salaries -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">01 Oct 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-primary font-sitka">Teacher Salaries</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Salary</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">₦450,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Bank Transfer</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                ✓ Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex">
                                <button onclick="openExpenseDetailsModal()" class="px-3 py-1 border border-primary text-primary rounded-l-lg text-sm hover:bg-primary hover:text-white">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-primary text-primary rounded-r-lg text-sm hover:bg-primary hover:text-white">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 - Generate Repair -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">03 Oct 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-primary font-sitka">Generate Repair</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Maintenance</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">₦40,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Cash</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-500 text-white">
                                ⏱ Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Bursar</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex">
                                <button onclick="openExpenseDetailsModal()" class="px-3 py-1 border border-primary text-primary rounded-l-lg text-sm hover:bg-primary hover:text-white">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-primary text-primary rounded-r-lg text-sm hover:bg-primary hover:text-white">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 - School Supplies -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">01 Oct 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-primary font-sitka">School Supplies</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Stationery</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">₦10,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">POS</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                ✓ Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex">
                                <button onclick="openExpenseDetailsModal()" class="px-3 py-1 border border-primary text-primary rounded-l-lg text-sm hover:bg-primary hover:text-white">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-primary text-primary rounded-r-lg text-sm hover:bg-primary hover:text-white">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 - Generate Repair -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">03 Oct 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-primary font-sitka">Generate Repair</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Maintenance</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">₦40,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Cash</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-500 text-white">
                                ⏱ Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Bursar</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex">
                                <button onclick="openExpenseDetailsModal()" class="px-3 py-1 border border-primary text-primary rounded-l-lg text-sm hover:bg-primary hover:text-white">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-primary text-primary rounded-r-lg text-sm hover:bg-primary hover:text-white">
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

<!-- Expense Details Modal -->
<div id="expenseDetailsModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4 max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 pt-4">
            <h3 class="text-lg font-semibold font-fredoka text-primary">Expense Details</h3>
            <button onclick="closeExpenseDetailsModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-regular fa-circle-xmark"></i>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-6">
            <!-- Expense Title -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Expense Title
                </label>
                <input type="text" value="Generate Repair" class="w-full outline-none text-primary text-sm" readonly>
            </div>

            <!-- Category -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Category
                </label>
                <select class="w-full outline-none text-primary text-sm">
                    <option value="">Select...</option>
                    <option value="maintenance" selected>Maintenance</option>
                    <option value="salary">Salary</option>
                    <option value="stationery">Stationery</option>
                    <option value="utilities">Utilities</option>
                </select>
            </div>

            <!-- Amount -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Amount
                </label>
                <input type="text" value="₦30,000" class="w-full outline-none text-primary text-sm" readonly>
            </div>

            <!-- Payment Method -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Payment Method
                </label>
                <select class="w-full outline-none text-primary text-sm">
                    <option value="">Select...</option>
                    <option value="cash" selected>Cash</option>
                    <option value="pos">POS</option>
                    <option value="transfer">Transfer</option>
                    <option value="cheque">Cheque</option>
                </select>
            </div>

            <!-- Date -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Date
                </label>
                <input type="text" value="03 Oct. 2025" class="w-full outline-none text-primary text-sm" readonly>
            </div>

            <!-- Status -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Status
                </label>
                <select class="w-full outline-none text-primary text-sm">
                    <option value="">Select...</option>
                    <option value="pending" selected>Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>

            <!-- Added By -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Added By
                </label>
                <select class="w-full outline-none text-primary text-sm">
                    <option value="">Select...</option>
                    <option value="bursar" selected>Bursar</option>
                    <option value="admin">Admin</option>
                    <option value="accountant">Accountant</option>
                </select>
            </div>

            <!-- Description -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Description
                </label>
                <textarea rows="4" class="w-full outline-none text-primary text-sm resize-none" placeholder="Enter expense description..."></textarea>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end px-6 py-4">
            <button class="px-6 py-2 border border-primary text-primary rounded-l-lg hover:bg-primary hover:text-white transition-colors font-medium">
                Delete
            </button>
            <button class="px-6 py-2 border border-primary text-primary hover:bg-primary hover:text-white transition-colors font-medium">
                Reject
            </button>
            <button class="px-6 py-2 rounded-r-lg font-medium bg-accent text-black border border-accent hover:border-accent-hover hover:bg-accent-hover transition-colors" >
                Approve
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Expense Details Modal functions
function openExpenseDetailsModal() {
    const modal = document.getElementById('expenseDetailsModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeExpenseDetailsModal() {
    const modal = document.getElementById('expenseDetailsModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'expenseDetailsModal') {
        closeExpenseDetailsModal();
    }
});
</script>
@endpush

@endsection

