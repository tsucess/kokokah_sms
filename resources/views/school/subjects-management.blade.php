@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'Subjects Management')
@section('page-title', 'Subjects')

@section('content')
<div class="p-8">
    <!-- Breadcrumb -->
    <div class="mb-6">
        <p class="text-sm text-gray-600">System Configuration / Subjects</p>
    </div>

    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-teal-900 mb-1">Subjects</h2>
            <p class="text-sm text-gray-600">Manage all subjects in the system</p>
        </div>
        <button onclick="openCreateSubjectModal()" class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add Subject
        </button>
    </div>

    <!-- Statistics Card -->
    <div class="bg-white rounded-lg border-t-4 border-blue-500 p-6 mb-6">
        <p class="text-sm text-gray-600 mb-2">Total Number of Subjects</p>
        <p class="text-4xl font-bold text-teal-900">20</p>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <div class="relative">
            <input type="text" placeholder="Search for subjects" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Subjects Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden mb-6">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left">
                            <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">S/N</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Abbreviation</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Short Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Class Level(s)</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tags</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @for($i = 1; $i <= 10; $i++)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $i }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">English Language</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">ENG</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">English</td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900 max-w-xs">
                                Grade 1, JS 3, Grade 5, Grade 3, Grade 6, JS 1, Pry 6, Pry 3, Pry 4, SS 2, Grade 4, Pry 5, SS 1, Grade 2, Pry 1, SS 3, Pry 3, JS 2
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-orange-100 text-orange-600 text-xs rounded-full border border-orange-300">General</span>
                                <span class="px-3 py-1 bg-orange-100 text-orange-600 text-xs rounded-full border border-orange-300 flex items-center">
                                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-1"></span>
                                    Art
                                </span>
                                <span class="px-3 py-1 bg-orange-100 text-orange-600 text-xs rounded-full border border-orange-300">Language</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <div class="relative inline-block text-left">
                                <button onclick="openEditSubjectModal()" class="p-2 text-gray-400 hover:text-gray-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-between mb-6">
        <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
            Previous
        </button>
        <div class="flex items-center space-x-2">
            <span class="text-sm text-gray-600">Page 1 of 2</span>
        </div>
        <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
            Next
        </button>
    </div>

    <!-- Footer -->
    <div class="mt-8 text-center">
        <p class="text-sm text-gray-500">COPYRIGHT © 2025</p>
    </div>
</div>

<!-- Create Subject Modal -->
<div id="createSubjectModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4 max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 sticky top-0 bg-white">
            <h3 class="text-lg font-semibold" style="color: #004A53;">Create Subject</h3>
            <button onclick="closeCreateSubjectModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-4">
            <!-- Name of Subject -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Name of Subject
                </label>
                <input type="text" placeholder="e.g. English Language, Mathematics..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
            </div>

            <!-- Subject Code -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Subject Code
                </label>
                <input type="text" placeholder="e.g. ENG, MA" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
            </div>

            <!-- Short Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Short Name
                </label>
                <input type="text" placeholder="English, Maths, Agric..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
            </div>

            <!-- Subject Abbreviation -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Subject Abbreviation
                </label>
                <input type="text" placeholder="ENG, MTH, AGR" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
            </div>

            <!-- Unit and Order in two columns -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Unit(Used in calculating grade score)
                    </label>
                    <input type="text" placeholder="ENG, MTH, AGR" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Order(Used in sorting subjects)
                    </label>
                    <input type="text" placeholder="ENG, MTH, AGR" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                </div>
            </div>

            <!-- Subject TAG(S) -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Subject TAG(S) (Used to easily group together subjects)
                </label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    <option value="">Select...</option>
                    <option value="science">Science</option>
                    <option value="arts">Arts</option>
                    <option value="language">Language</option>
                    <option value="mathematics">Mathematics</option>
                </select>
            </div>

            <!-- Subject Level(S) -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Subject Level(S) (Select levels that offer this subject)
                </label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    <option value="">Select...</option>
                    <option value="jss1">JSS 1</option>
                    <option value="jss2">JSS 2</option>
                    <option value="jss3">JSS 3</option>
                    <option value="ss1">SS 1</option>
                    <option value="ss2">SS 2</option>
                    <option value="ss3">SS 3</option>
                </select>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 sticky bottom-0 bg-white">
            <button onclick="closeCreateSubjectModal()" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium" style="font-family: 'Sitka', Georgia, serif;">
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                Save
            </button>
        </div>
    </div>
</div>

<!-- Edit Subject Modal (Configuration) -->
<div id="editSubjectModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4 max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 sticky top-0 bg-white">
            <h3 class="text-lg font-semibold" style="color: #004A53;">Edit Subject</h3>
            <button onclick="closeEditSubjectModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-4">
            <!-- Name of Subject -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Name of Subject
                </label>
                <input type="text" value="Agricultural Science" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
            </div>

            <!-- Subject Code -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Subject Code
                </label>
                <input type="text" value="101" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
            </div>

            <!-- Short Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Short Name
                </label>
                <input type="text" value="Agric" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
            </div>

            <!-- Subject Abbreviation -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Subject Abbreviation
                </label>
                <input type="text" value="AGR" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
            </div>

            <!-- Unit and Order in two columns -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Unit (Used in calculating grade score)
                    </label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Order (Used in sorting subjects)
                    </label>
                    <input type="text" value="1" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                </div>
            </div>

            <!-- Subject TAG(S) -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Subject TAG(S)
                </label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700 mb-2">
                    <option value="">Select...</option>
                    <option value="science">Science</option>
                    <option value="arts">Arts</option>
                    <option value="language">Language</option>
                    <option value="mathematics">Mathematics</option>
                </select>
                <!-- Tags Display -->
                <div class="flex flex-wrap gap-2">
                    <span class="inline-flex items-center px-3 py-1.5 bg-orange-100 text-orange-600 text-sm rounded-md border border-orange-300">
                        Art
                        <button type="button" class="ml-2 text-orange-600 hover:text-orange-800">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </span>
                </div>
            </div>

            <!-- Subject Level(S) -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Subject Level(S)
                </label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700 mb-2">
                    <option value="">Select...</option>
                    <option value="jss1">Jss 1</option>
                    <option value="jss2">Jss 2</option>
                    <option value="jss3">Jss 3</option>
                    <option value="ss1">SS 1</option>
                    <option value="ss2">SS 2</option>
                    <option value="ss3">SS 3</option>
                </select>
                <!-- Tags Display -->
                <div class="flex flex-wrap gap-2">
                    <span class="inline-flex items-center px-3 py-1.5 bg-orange-100 text-orange-600 text-sm rounded-md border border-orange-300">
                        Jss 1
                        <button type="button" class="ml-2 text-orange-600 hover:text-orange-800">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </span>
                    <span class="inline-flex items-center px-3 py-1.5 bg-orange-100 text-orange-600 text-sm rounded-md border border-orange-300">
                        Jss 2
                        <button type="button" class="ml-2 text-orange-600 hover:text-orange-800">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </span>
                    <span class="inline-flex items-center px-3 py-1.5 bg-orange-100 text-orange-600 text-sm rounded-md border border-orange-300">
                        Jss 3
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
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 sticky bottom-0 bg-white">
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
// Create Subject Modal functions
function openCreateSubjectModal() {
    const modal = document.getElementById('createSubjectModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeCreateSubjectModal() {
    const modal = document.getElementById('createSubjectModal');
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
    if (event.target.id === 'createSubjectModal') {
        closeCreateSubjectModal();
    }
    if (event.target.id === 'editSubjectModal') {
        closeEditSubjectModal();
    }
});
</script>
@endpush

@endsection

