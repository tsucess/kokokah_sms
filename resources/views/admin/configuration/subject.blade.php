@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'Assign Classes')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6 flex items-center gap-1">
        <a href="{{ route('admin.configuration') }}" class="flex items-center text-orange-500 hover:text-orange-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            System Configuration
        </a>
        <span class="text-primary mx-2">/</span>
        <span class="text-primary">Subject</span>
    </div>

    <!-- Header -->
    <div class="mb-6 flex items-center justify-between gap-3">
        <div class="space-y-2">
            <h2 class="text-2xl font-bold text-primary font-fredoka mb-1">Subjects</h2>
            <p class="text-sm text-primary font-sitka">This is a rundown display of all classes and subjects with the approved time slot. You can choose to add or makes change</p>
        </div>

        <button onclick="openCreateSubjectModal()" class="px-4 py-2 bg-accent text-black font-semibold text-sm rounded-lg hover:bg-accent-hover transition-colors flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add New Expenses
        </button>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-4 gap-6 mb-10">
        <!-- Total Students -->
        <div class="bg-white rounded-lg border-t-8 border-blue300 p-6 space-y-1.5 shadow-boardsheet">
            <p class="text-3xl font-bold text-primary font-mulish">10</p>
            <p class="text-xs text-primary font-mulish">Total Number of Subjects</p>
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

        <!-- Subject Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full"> 
                <thead class=" border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4  rounded flex items-center justify-center"><span class="border-2 border-gray100 w-4 h-4"></span></th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">S/N</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Name</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Abbreviation</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Short Name</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Class Level (s)</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Tags</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @for($i = 1; $i <= 14; $i++)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap flex items-center justify-center"><input type="checkbox" name="" id="" class="border-2 border-gray100"></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">{{ $i }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                            English Language
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">ENG</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">English</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Grade 1, JS 3, Grade 5, Grade 3, Grade 6, JS 1,
Pry 6, Pry 3, Pry 4, SS 2, Grade 4, Pry 5, SS 1,
Grade 2, Pry 1, SS 3, Pry 2, JS 2</td>
                        <td class="px-6 py-4 whitespace-nowrap ">
                            <span class="px-2 py-1 bg-orange200 text-secondary font-sitka text-xs rounded flex gap-2 items-center"> <span class="w-2 h-2 inline-block bg-secondary rounded-full"></span>Active</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="relative inline-block text-left">
                                <button class="p-2 bg-gray50 rounded-md hover:text-gray-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                    </svg>
                                </button>
                                <!-- Dropdown Menu (hidden by default) -->
                                <div class="hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10">
                                    <div class="py-1">
                                        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                            View class level
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                            Edit Level
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                            Move to section
                                        </a>
                                        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                            </svg>
                                            Deactivate Class level
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="createSubjectModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center z-50" >
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl max-h-[90vh] overflow-y-scroll mx-4">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4">
            <h3 class="text-2xl font-bold text-primary font-fredoka">Create Subject</h3>
            <button onclick="closeCreateSubjectModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
               <i class="fa-regular fa-circle-xmark"></i>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-7">
            <!-- Name of Subject -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Name of Subject
                </label>
                <input type="text" placeholder="e.g. English Language, Mathematic...." class="w-full outline-none text-primary text-sm">
            </div>

            <!-- Subject Code -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Subject Code
                </label>
                <input type="text" placeholder="e.g. 100, 109, 123" class="w-full outline-none text-primary text-sm">
            </div>

            <!-- Short Name -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Short Name
                </label>
                <input type="text" placeholder="English, MAths, Agric...." class="w-full outline-none text-primary text-sm">
            </div>

            <!-- Subject Abbreviation -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Subject Abbreviation
                </label>
                <input type="text" placeholder="ENG, MTH, AGR" class="w-full outline-none text-primary text-sm">
            </div>
            <div class="grid grid-cols-2 gap-3">
                <!-- Unit(Used in calculating grade score) -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Unit(Used in calculating grade score)
                </label>
                <input type="text" placeholder="----" class="w-full outline-none text-primary text-sm">
            </div>

            <!-- Order(Used in sorting subjects -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Order(Used in sorting subjects
                </label>
                <input type="text" placeholder="ENG, MTH, AGR" class="w-full outline-none text-primary text-sm">
            </div>

            </div>

            <!-- Subject TAG(S) (Used to easily group together subjects) -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Subject TAG(S) (Used to easily group together subjects)
                </label>
                <select class="w-full outline-none text-primary text-sm">
                    <option value="">Select...</option>
                    <option value="nursery">Nursery Section</option>
                    <option value="primary">Primary Section</option>
                    <option value="junior">Junior Secondary Section</option>
                    <option value="senior">Senior Secondary Section</option>
                </select>
            </div>

            <!-- Subject Leve(S) (Select levels that offer this subject)  -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Subject Leve(S) (Select levels that offer this subject)
                </label>
                <select class="w-full outline-none text-primary text-sm">
                    <option value="">Select...</option>
                    <option value="nursery">Nursery Section</option>
                    <option value="primary">Primary Section</option>
                    <option value="junior">Junior Secondary Section</option>
                    <option value="senior">Senior Secondary Section</option>
                </select>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4">
            <button onclick="closeCreateSubjectModal()" class="px-6 py-2 font-sitka text-sm border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors font-semibold" >
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-semibold bg-accent text-black hover:bg-accent-hover transition-colors font-sitka" >
                Submit
            </button>
        </div>
    </div>
</div>


@push('scripts')
<script>
    // Create Class Level Modal functions
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

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'createSubjectModal') {
        closeCreateSubjectModal();
    }
    if (event.target.id === 'createSubjectModal') {
        closeCreateSubjectModal();
    }
});
</script>
@endpush
@endsection

