@extends('layouts.admin', ['active' => 'staff'])

@section('title', 'Staff Management')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-900 mb-1">Staff Management</h2>
            <p class="text-sm text-gray-600">Manage staff information and enrollment</p>
        </div>
        <div class="flex space-x-3">
            <div class="relative">
                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors flex items-center">
                    Export as
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                Bulk Upload Staff
            </button>
            <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add New Staff
            </button>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-4 gap-6 mb-6">
        <!-- Total Staff -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Total Staff</p>
                <div class="relative">
                    <div class="w-16 h-16">
                        <svg class="transform -rotate-90" viewBox="0 0 36 36">
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#e5e7eb" stroke-width="3" />
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#f97316" stroke-width="3" stroke-dasharray="100, 100" stroke-linecap="round" />
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-xs font-semibold">100</span>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-4xl font-bold text-teal-900 mb-2">1,247</p>
            <div class="flex items-center text-xs text-gray-600 mb-3">
                <span class="inline-block w-2 h-2 bg-teal-600 rounded-full mr-1"></span>
                <span class="mr-3">MALE (33%)</span>
                <span class="inline-block w-2 h-2 bg-orange-400 rounded-full mr-1"></span>
                <span>FEMALE (74%)</span>
            </div>
            <div class="flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this term
            </div>
        </div>

        <!-- Total Academic Teachers -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Total Academic Teachers</p>
                <div class="relative">
                    <div class="w-16 h-16">
                        <svg class="transform -rotate-90" viewBox="0 0 36 36">
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#e5e7eb" stroke-width="3" />
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#f97316" stroke-width="3" stroke-dasharray="100, 100" stroke-linecap="round" />
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-xs font-semibold">100</span>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-4xl font-bold text-teal-900 mb-2">300</p>
            <div class="flex items-center text-xs text-gray-600 mb-3">
                <span class="inline-block w-2 h-2 bg-teal-600 rounded-full mr-1"></span>
                <span class="mr-3">MALE (33%)</span>
                <span class="inline-block w-2 h-2 bg-orange-400 rounded-full mr-1"></span>
                <span>FEMALE (74%)</span>
            </div>
            <div class="flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this term
            </div>
        </div>

        <!-- Total Non Academic Teachers -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-start justify-between mb-4">
                <p class="text-sm text-gray-600">Total Non Academic Teachers</p>
                <div class="relative">
                    <div class="w-16 h-16">
                        <svg class="transform -rotate-90" viewBox="0 0 36 36">
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#e5e7eb" stroke-width="3" />
                            <circle cx="18" cy="18" r="16" fill="none" stroke="#f97316" stroke-width="3" stroke-dasharray="100, 100" stroke-linecap="round" />
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-xs font-semibold">100</span>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-4xl font-bold text-teal-900 mb-2">1,247</p>
            <div class="flex items-center text-xs text-gray-600 mb-3">
                <span class="inline-block w-2 h-2 bg-teal-600 rounded-full mr-1"></span>
                <span class="mr-3">MALE (33%)</span>
                <span class="inline-block w-2 h-2 bg-orange-400 rounded-full mr-1"></span>
                <span>FEMALE (74%)</span>
            </div>
            <div class="flex items-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this term
            </div>
        </div>

        <!-- Additional Stats Card -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="relative mb-4">
                <div class="w-16 h-16 mx-auto">
                    <svg class="transform -rotate-90" viewBox="0 0 36 36">
                        <circle cx="18" cy="18" r="16" fill="none" stroke="#e5e7eb" stroke-width="3" />
                        <circle cx="18" cy="18" r="16" fill="none" stroke="#f97316" stroke-width="3" stroke-dasharray="100, 100" stroke-linecap="round" />
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-xs font-semibold">100</span>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p class="text-sm text-gray-600 mb-2">ACTIVE STAFF (40%)</p>
                <p class="text-sm text-gray-600">DEACTIVATE STAFF (60%)</p>
            </div>
            <div class="mt-3 flex items-center justify-center text-sm text-green-600">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                +2% this term
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="mb-6 border-b border-gray-200">
        <nav class="flex space-x-8">
            <a href="#" class="text-teal-900 py-4 px-1 border-b-2 border-orange-400 font-medium text-sm">
                Staff
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Roles
            </a>
        </nav>
    </div>

    <!-- Filters -->
    <div class="mb-6 flex items-center space-x-4">
        <div class="flex-1">
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Select staff type</option>
                <option selected>Academic</option>
                <option>Non-Academic</option>
            </select>
        </div>
        <div class="flex-1">
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Select Status</option>
                <option selected>Active</option>
                <option>Inactive</option>
            </select>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <div class="relative">
            <input type="text" placeholder="Search staff" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Staff Role Cards Grid -->
    <div class="grid grid-cols-3 gap-6">
        @for($i = 1; $i <= 9; $i++)
        <div class="bg-white rounded-lg border-2 border-orange-400 p-4">
            <div class="flex items-start justify-between mb-3">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold text-teal-900 mb-1">Director</h3>
                    <p class="text-sm text-gray-600 mb-3">School Director</p>
                </div>
                <button class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
            </div>
            <div class="mb-4">
                <div class="px-4 py-2 border border-gray-300 rounded-lg text-center">
                    <p class="text-sm text-gray-600">No. of staff: 10</p>
                </div>
            </div>
            <button onclick="openAssignStaffModal()" class="w-full px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center justify-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Staff
            </button>
        </div>
        @endfor
    </div>
</div>

<!-- Assign Staff Modal -->
<div id="assignStaffModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
            <div>
                <h3 class="text-lg font-semibold" style="color: #004A53;">Assign Staff</h3>
                <p class="text-xs text-gray-600 mt-1">Role: DIRECTOR</p>
            </div>
            <button onclick="closeAssignStaffModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6">
            <!-- Select Staff -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Select Staff
                </label>
                <div class="relative">
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700 appearance-none">
                        <option value="">Select...</option>
                        <option value="staff1">John Doe - Teacher</option>
                        <option value="staff2">Jane Smith - Administrator</option>
                        <option value="staff3">David Brown - Director</option>
                        <option value="staff4">Sarah Johnson - Teacher</option>
                    </select>
                    <svg class="w-5 h-5 text-gray-400 absolute right-3 top-3 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200">
            <button onclick="closeAssignStaffModal()" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium" style="font-family: 'Sitka', Georgia, serif;">
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                Save & Apply
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Assign Staff Modal functions
function openAssignStaffModal() {
    const modal = document.getElementById('assignStaffModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeAssignStaffModal() {
    const modal = document.getElementById('assignStaffModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'assignStaffModal') {
        closeAssignStaffModal();
    }
});
</script>
@endpush

@endsection
