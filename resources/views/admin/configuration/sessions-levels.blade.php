@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'Sessions & Term')
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
        <span class="text-gray-400 mx-2">/</span>
        <span class="text-gray-600">Sessions & Term</span>
    </div>

    <!-- Action Buttons -->
    <div class="mb-6 flex justify-end space-x-4">
        <button onclick="openCreateLevelSectionModal()" class="px-4 py-2 border border-communicationBtn text-sm font-semibold text-primary group rounded-lg hover:bg-communicationBtn transition-colors gap-1 flex items-center">
            Create New Level Section
        </button>
        <div class="flex items-center ">
        <button class="px-4 py-2 border font-semibold group border-primary text-primary gap-1 text-sm rounded-l-lg hover:bg-primary hover:text-white transition-colors flex items-center">
            Create New Level with Template
        </button>
        <button onclick="openCreateClassLevelModal()" class="px-4 py-2 bg-accent font-semibold gap-1 border border-accent text-black text-sm rounded-r-lg hover:border-accent-hover hover:bg-accent-hover transition-colors flex items-center">
            Create New Level
        </button>
        </div>
    </div>

    <!-- Levels Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class=" border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Order</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Level Name</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Level Short Name</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Number of Arms</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Date Created</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Status</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Action</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Total</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @for($i = 1; $i <= 14; $i++)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">{{ $i }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Nursery {{ $i }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Nur {{ $i }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">6</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">22/04/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-green-500 text-white text-xs rounded">Active</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="relative inline-block text-left">
                                <button class="p-2 text-gray-400 hover:text-gray-600">
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">18 / 60</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Create Level Section Modal -->
<div id="createLevelSectionModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center z-50" >
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4">
            <h3 class="text-2xl font-bold text-primary font-fredoka">Create Level Section</h3>
            <button onclick="closeCreateLevelSectionModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
               <i class="fa-regular fa-circle-xmark"></i>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-7">
            <!-- Title -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Title
                </label>
                <input type="text" placeholder="e.g. Nursery, Primary, Junior Secondary..." class="w-full outline-none text-primary text-sm">
            </div>

            <!-- Description -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Description
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
            <button onclick="closeCreateLevelSectionModal()" class="px-6 py-2 font-sitka text-sm border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors font-semibold" >
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-semibold bg-accent text-black hover:bg-accent-hover transition-colors font-sitka" >
                Submit
            </button>
        </div>
    </div>
</div>

<!-- Create Class Level Modal -->
<div id="createClassLevelModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center z-50" >
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4">
            <h3 class="text-2xl font-bold text-primary font-fredoka">Create Class Level</h3>
            <button onclick="closeCreateClassLevelModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-regular fa-circle-xmark"></i>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-7">
            <!-- Level Name -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Level Name
                </label>
                <input type="text" placeholder="e.g. Nursery 1, Primary 1, JSS 1..." class="w-full outline-none text-primary text-sm">
            </div>

            <!-- Level Short Name -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Level Short Name
                </label>
                <select class="w-full outline-none text-primary text-sm">
                    <option value="">Select...</option>
                    <option value="nur1">Nur 1</option>
                    <option value="nur2">Nur 2</option>
                    <option value="pry1">Pry 1</option>
                    <option value="pry2">Pry 2</option>
                    <option value="pry3">Pry 3</option>
                    <option value="pry4">Pry 4</option>
                    <option value="pry5">Pry 5</option>
                    <option value="pry6">Pry 6</option>
                    <option value="jss1">Jss 1</option>
                    <option value="jss2">Jss 2</option>
                    <option value="jss3">Jss 3</option>
                    <option value="ss1">SS 1</option>
                    <option value="ss2">SS 2</option>
                    <option value="ss3">SS 3</option>
                </select>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4">
            <button onclick="closeCreateClassLevelModal()" class="px-6 py-2 font-sitka text-sm border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors font-semibold" >
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-semibold bg-accent text-black hover:bg-accent-hover transition-colors font-sitka" >
                Save
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Create Level Section Modal functions
function openCreateLevelSectionModal() {
    const modal = document.getElementById('createLevelSectionModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeCreateLevelSectionModal() {
    const modal = document.getElementById('createLevelSectionModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Create Class Level Modal functions
function openCreateClassLevelModal() {
    const modal = document.getElementById('createClassLevelModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeCreateClassLevelModal() {
    const modal = document.getElementById('createClassLevelModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'createLevelSectionModal') {
        closeCreateLevelSectionModal();
    }
    if (event.target.id === 'createClassLevelModal') {
        closeCreateClassLevelModal();
    }
});
</script>
@endpush

@endsection

