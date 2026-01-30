@extends('layouts.admin', ['active' => 'students'])

@section('title', 'Student Management')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-900 mb-1">Student Management</h2>
            <p class="text-sm text-gray-600">Manage student information and enrollment</p>
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
                Bulk Upload Student
            </button>
            <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add New Student
            </button>
        </div>
    </div>

    <!-- Statistics Card -->
    <div class="bg-white rounded-lg border-2 border-orange-400 p-6 mb-6 inline-block">
        <div class="flex items-center space-x-8">
            <div>
                <div class="flex items-center mb-2">
                    <svg class="w-5 h-5 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="text-sm text-gray-600">Total Students</span>
                </div>
                <p class="text-4xl font-bold text-teal-900 mb-2">1,247</p>
                <div class="flex items-center text-sm text-teal-600">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    +2 this month
                </div>
            </div>
            <div class="relative">
                <div class="w-24 h-24">
                    <svg class="transform -rotate-90" viewBox="0 0 36 36">
                        <circle cx="18" cy="18" r="16" fill="none" stroke="#e5e7eb" stroke-width="3" />
                        <circle cx="18" cy="18" r="16" fill="none" stroke="#f97316" stroke-width="3" stroke-dasharray="100, 100" stroke-linecap="round" />
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-lg font-semibold">100</span>
                    </div>
                </div>
            </div>
            <div class="border-l border-gray-300 pl-8">
                <div class="flex items-center mb-2">
                    <span class="inline-block w-3 h-3 bg-teal-900 rounded-full mr-2"></span>
                    <span class="text-sm text-gray-600">MALE (33%)</span>
                </div>
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 bg-orange-400 rounded-full mr-2"></span>
                    <span class="text-sm text-gray-600">FEMALE (74%)</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="mb-6 grid grid-cols-4 gap-4">
        <div>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>School Session</option>
                <option selected>2025-2026</option>
            </select>
        </div>
        <div>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Term</option>
                <option selected>First Term</option>
                <option>Second Term</option>
                <option>Third Term</option>
            </select>
        </div>
        <div>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Select class section</option>
                <option selected>1</option>
            </select>
        </div>
        <div>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Select class level</option>
                <option selected>1</option>
            </select>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <div class="relative">
            <input type="text" placeholder="Search students" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Student Cards Grid -->
    <div class="grid grid-cols-4 gap-6 mb-6">
        @for($i = 1; $i <= 8; $i++)
        <div class="bg-white rounded-lg border-2 border-orange-400 p-4">
            <div class="flex items-start justify-between mb-3">
                <span class="px-2 py-1 bg-green-500 text-white text-xs rounded">Active</span>
                <button class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
            </div>
            <h3 class="text-lg font-semibold text-teal-900 mb-1">Emmanuel Sanusi Lamido</h3>
            <p class="text-sm text-gray-600 mb-3">Jss 1 - A</p>
            
            <div class="space-y-2 text-sm mb-3">
                <div class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    View Profile
                </div>
                <div class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Link Student
                </div>
            </div>

            <div class="space-y-2 text-sm">
                <div class="flex items-start">
                    <span class="text-gray-600 w-32">Parent/Guardian:</span>
                    <span class="text-teal-600 flex-1">Rose Akinola</span>
                </div>
                <div class="flex items-start">
                    <span class="text-gray-600 w-32">Fees Paid</span>
                </div>
                <div class="flex items-start">
                    <span class="text-gray-600 w-32">Attendance:</span>
                    <span class="text-gray-900 flex-1">92%</span>
                </div>
                <div class="flex items-start">
                    <span class="text-gray-600 w-32">Enrollment:</span>
                    <span class="text-gray-900 flex-1">11/1/2025</span>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-between">
        <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
            Previous
        </button>
        <div class="flex items-center space-x-2">
            <span class="text-sm text-gray-600">Page 1 of 12</span>
        </div>
        <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
            Next
        </button>
    </div>
</div>

<!-- Link Parent Modal -->
<div id="linkParentModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-3xl mx-4 max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 sticky top-0 bg-white">
            <div>
                <h3 class="text-lg font-semibold" style="color: #004A53;">Link Parent</h3>
                <p class="text-sm text-gray-600 mt-1">Parents Linked to Samuel Musa Ali</p>
            </div>
            <button onclick="closeLinkParentModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-6">
            <!-- Linked Parents Display -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Parent 1 -->
                <div class="bg-gray-50 rounded-lg p-4 flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-teal-800 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Bose Oloude</p>
                            <p class="text-xs text-gray-600">boseoloude@gmail.com</p>
                        </div>
                    </div>
                    <button class="text-red-500 hover:text-red-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Parent 2 -->
                <div class="bg-gray-50 rounded-lg p-4 flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-teal-800 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Bose Oloude</p>
                            <p class="text-xs text-gray-600">boseoloude@gmail.com</p>
                        </div>
                    </div>
                    <button class="text-red-500 hover:text-red-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-gray-200"></div>

            <!-- Form Section -->
            <div>
                <h4 class="text-base font-semibold text-gray-900 mb-4">Samuel Musa Ali</h4>
                <p class="text-sm text-gray-600 mb-4">Select a parent and the relationship this parent has with this child.</p>

                <div class="grid grid-cols-2 gap-4">
                    <!-- Select Parent -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Select Parent
                        </label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                            <option value="">Select...</option>
                            <option value="parent1">John Doe</option>
                            <option value="parent2">Jane Smith</option>
                            <option value="parent3">Michael Brown</option>
                        </select>
                    </div>

                    <!-- Select Relationship -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Select Relationship
                        </label>
                        <div class="flex items-center space-x-2">
                            <select class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                                <option value="">Select...</option>
                                <option value="father">Father</option>
                                <option value="mother">Mother</option>
                                <option value="guardian">Guardian</option>
                                <option value="uncle">Uncle</option>
                                <option value="aunt">Aunt</option>
                            </select>
                            <button class="px-4 py-2 rounded-lg font-medium transition-colors whitespace-nowrap" style="background-color: #FDAF22; color: #000;">
                                + Add to list
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 sticky bottom-0 bg-white">
            <button onclick="closeLinkParentModal()" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium" style="font-family: 'Sitka', Georgia, serif;">
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                Save Parent
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Link Parent Modal functions
function openLinkParentModal() {
    const modal = document.getElementById('linkParentModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeLinkParentModal() {
    const modal = document.getElementById('linkParentModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'linkParentModal') {
        closeLinkParentModal();
    }
});
</script>
@endpush

@endsection

