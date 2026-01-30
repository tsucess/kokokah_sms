@extends('layouts.admin', ['active' => 'classes'])

@section('title', 'Class Members')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Navigation -->
    <div class="mb-6 flex items-center justify-between">
        <a href="#" class="text-teal-600 hover:text-teal-800 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back | Nur
        </a>
        <div class="flex space-x-3">
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                Bulk Upload Student
            </button>
            <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add New Class Member
            </button>
        </div>
    </div>

    <!-- Class Info Card -->
    <div class="bg-white rounded-lg border-2 border-orange-400 p-6 mb-6">
        <div class="flex items-start justify-between">
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-teal-900 mb-2">Nursery 1 - 1-A</h2>
                <p class="text-sm text-gray-600 mb-4">Full Day | 2025/2026</p>
                
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm text-gray-600 mb-1">Teacher: ------</label>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 mb-1">Asst. Teacher: ------</label>
                    </div>
                </div>

                <div class="mb-2">
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-sm text-gray-600">Enrollment</span>
                        <span class="text-sm font-semibold text-gray-900">0%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-orange-400 h-2 rounded-full" style="width: 0%;"></div>
                    </div>
                </div>
            </div>
            
            <div class="ml-6">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="mb-6 border-b border-gray-200">
        <nav class="flex space-x-8">
            <a href="#" class="text-teal-900 py-4 px-1 border-b-2 border-orange-400 font-medium text-sm">
                Class Members
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Subjects
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Results
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Skills
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Attendance
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Timetable
            </a>
        </nav>
    </div>

    <!-- Download Buttons -->
    <div class="mb-6 flex space-x-3">
        <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
            Download PDF Report
        </button>
        <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
            Download Excel Report
        </button>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <div class="relative">
            <input type="text" placeholder="Search class..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Student Cards Grid -->
    <div class="grid grid-cols-5 gap-4 mb-6">
        @for($i = 1; $i <= 20; $i++)
        <div class="bg-white rounded-lg border-2 border-orange-400 p-4 relative">
            <!-- Three-dot menu -->
            <div class="absolute top-3 right-3">
                <button class="text-gray-400 hover:text-gray-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                    </svg>
                </button>
            </div>

            <!-- Avatar -->
            <div class="flex justify-center mb-3">
                <div class="w-16 h-16 bg-teal-800 rounded-full flex items-center justify-center text-white text-xl font-bold">
                    ES
                </div>
            </div>

            <!-- Student Info -->
            <div class="text-center">
                <h3 class="text-sm font-semibold text-teal-900 mb-1">Emmanuel S...</h3>
                <p class="text-xs text-gray-600 mb-3">Jss 1 - 1-A</p>

                <!-- Action Links -->
                <div class="space-y-2 text-xs">
                    <a href="#" class="flex items-center justify-center text-teal-600 hover:text-teal-800">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        View Profile
                    </a>
                    <a href="#" onclick="openTransferStudentModal(); return false;" class="flex items-center justify-center text-teal-600 hover:text-teal-800">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                        </svg>
                        Transfer student
                    </a>
                    <a href="#" class="flex items-center justify-center text-teal-600 hover:text-teal-800">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        Remove from class
                    </a>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <!-- Bottom Action Buttons -->
    <div class="flex items-center justify-between mb-6">
        <button class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
            Delete all Students
        </button>
        <button class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
            Transfer all Students
        </button>
    </div>

    <!-- Footer -->
    <div class="mt-8 text-center">
        <p class="text-sm text-gray-500">COPYRIGHT © 2025</p>
    </div>
</div>

<!-- Transfer Student Modal -->
<div id="transferStudentModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold" style="color: #004A53;">Transfer Student</h3>
            <button onclick="closeTransferStudentModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-4">
            <!-- Student Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Student Name
                </label>
                <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                    <span class="inline-flex items-center px-3 py-1.5 bg-teal-600 text-white text-sm rounded-md">
                        Elene Smith (003)
                        <button type="button" class="ml-2 text-white hover:text-gray-200">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </span>
                </div>
            </div>

            <!-- Transferring to -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Transferring to
                </label>
                <div class="relative">
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700 appearance-none">
                        <option value="">Select New Class</option>
                        <option value="nursery1">Nursery 1 - A</option>
                        <option value="nursery2">Nursery 2 - A</option>
                        <option value="jss1">JSS 1 - A</option>
                        <option value="jss2">JSS 2 - A</option>
                        <option value="jss3">JSS 3 - A</option>
                    </select>
                    <svg class="w-5 h-5 text-gray-400 absolute right-3 top-3 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200">
            <button onclick="closeTransferStudentModal()" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium" style="font-family: 'Sitka', Georgia, serif;">
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                Transfer
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Transfer Student Modal functions
function openTransferStudentModal() {
    const modal = document.getElementById('transferStudentModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeTransferStudentModal() {
    const modal = document.getElementById('transferStudentModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'transferStudentModal') {
        closeTransferStudentModal();
    }
});
</script>
@endpush

@endsection

