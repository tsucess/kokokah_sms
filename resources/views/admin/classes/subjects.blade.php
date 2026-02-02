@extends('layouts.admin', ['active' => 'classes'])

@section('title', 'Class Subjects')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6">
        <div class="flex justify-between items-center gap-3">
             <a href="{{ route('admin.classes') }}" class="inline-flex items-center gap-2 text-sm text-black hover:text-gray-700">
            <i class="fa-solid fa-arrow-left fa-black"></i>
            Back | Nur
        </a>
            <div class="flex align-items-center">
                    <button
                        class="px-4 py-2 bg-white text-body3 border border-primary text-primary rounded-l-lg font-semibold hover:bg-primary hover:text-white transition-colors">
                        Bulk Upload Student
                    </button>
                    <button
                        class="px-4 py-2 bg-accent text-body3 text-black rounded-r-lg font-semibold hover:bg-yellow-500 transition-colors flex items-center">
                        + Add New Class Member
                    </button>
                </div>
        </div>

    </div>

    <!-- Class Info Card -->
    <div class="border-4 border-orange50 rounded-2xl p-5 mb-6">
        <div class="flex flex-col gap-2">
            <div class="flex justify-between items-center space-x-4">

                <div class="flex flex-col gap-2">
                    <h2 class="text-2xl font-bold font-sitka text-primary">Nursery 1 - t-A</h2>
                    <p class="text-sm font-sitka text-primary">First Term | 2023-2025</p>
                    <div class="flex flex-col gap-1">
                        <span class="text-primary font-sitka text-xs font-semibold">Teacher: -----</span>
                        <span class="text-primary font-sitka text-xs font-semibold">Asst. Teacher: -----</span>
                    </div>
                </div>
                <div>
                    <img src="/images/education_cap.png" alt="">
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <div class="flex items-center justify-between">
<p class="text-sm font-semibold font-sitka text-primary">Enrollment</p>
<p class="text-sm font-semibold font-sitka text-primary">40/100%</p>
                </div>

                <div class="w-full h-2 bg-grey800 rounded-full">
                    <div class="w-3/4 h-2 bg-secondary rounded-full"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="">
        <!-- Tab Headers -->
        <div class="border-b border-gray-200">
            <nav class="flex space-x-8 px-6" aria-label="Tabs">
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Class Members
                </button>
                <button class="py-4 px-1 border-b-2 border-orange-400 text-orange-600 font-medium text-sm">
                    Subjects
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Results
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Star Board
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Attendance
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Timetable
                </button>
            </nav>
        </div>

        <!-- Subjects Content -->
        <div class="p-6">
            <!-- Subjects Table -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject Teacher (s)</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Subject 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button onclick="openAddSubjectTeacherModal()" class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                    <button onclick="openEditSubjectModal()" class="p-2 text-gray-400 hover:text-gray-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 4 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 5 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 6 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 7 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 8 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">English Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-teal-600 hover:text-teal-800">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Subject Teacher Modal -->
<div id="addSubjectTeacherModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold" style="color: #004A53;">Add Subject Teacher</h3>
            <button onclick="closeAddSubjectTeacherModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-4">
            <!-- Select Teacher -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Select Teacher
                </label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    <option value="">Select...</option>
                    <option value="teacher1">Mark John</option>
                    <option value="teacher2">Sarah Williams</option>
                    <option value="teacher3">David Brown</option>
                    <option value="teacher4">Emily Davis</option>
                </select>
            </div>

            <!-- Selected Teacher Tag -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Selected Teacher
                </label>
                <div class="flex flex-wrap gap-2">
                    <span class="inline-flex items-center px-3 py-1.5 bg-orange-100 text-orange-600 text-sm rounded-md border border-orange-300">
                        Mark John
                        <button type="button" class="ml-2 text-orange-600 hover:text-orange-800">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200">
            <button onclick="closeAddSubjectTeacherModal()" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium" style="font-family: 'Sitka', Georgia, serif;">
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                Save
            </button>
        </div>
    </div>
</div>

<!-- Edit Subject Modal -->
<div id="editSubjectModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold" style="color: #004A53;">Edit Subject</h3>
            <button onclick="closeEditSubjectModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Subject Level
                </label>
                <div class="flex flex-wrap gap-2">
                    <button class="px-4 py-2 bg-orange-100 text-orange-600 rounded-lg border border-orange-300 text-sm font-medium hover:bg-orange-200 transition-colors flex items-center">
                        Jss 1
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <button class="px-4 py-2 bg-orange-100 text-orange-600 rounded-lg border border-orange-300 text-sm font-medium hover:bg-orange-200 transition-colors flex items-center">
                        Jss 2
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <button class="px-4 py-2 bg-orange-100 text-orange-600 rounded-lg border border-orange-300 text-sm font-medium hover:bg-orange-200 transition-colors flex items-center">
                        Jss 3
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <button class="px-4 py-2 bg-gray-100 text-gray-600 rounded-lg border border-gray-300 text-sm font-medium hover:bg-gray-200 transition-colors">
                        + Add Level
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200">
            <button onclick="closeEditSubjectModal()" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium" style="font-family: 'Sitka', Georgia, serif;">
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                Save
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Add Subject Teacher Modal functions
function openAddSubjectTeacherModal() {
    const modal = document.getElementById('addSubjectTeacherModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeAddSubjectTeacherModal() {
    const modal = document.getElementById('addSubjectTeacherModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Edit Subject Modal functions
function openEditSubjectModal() {
    const modal = document.getElementById('editSubjectModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeEditSubjectModal() {
    const modal = document.getElementById('editSubjectModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'addSubjectTeacherModal') {
        closeAddSubjectTeacherModal();
    }
    if (event.target.id === 'editSubjectModal') {
        closeEditSubjectModal();
    }
});
</script>
@endpush

@endsection

