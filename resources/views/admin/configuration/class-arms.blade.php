@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'Class Arms')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Breadcrumb -->
    <div class="mb-6">
        <a href="{{ route('admin.configuration') }}" class="inline-flex items-center text-sm text-orange-500 hover:text-orange-600">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            System Configuration
        </a>
        <span class="text-gray-400 mx-2">/</span>
        <span class="text-gray-600">Class Arm</span>
    </div>

    <!-- Header with Action Buttons -->
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-teal-900">Class Arms</h2>
        <div class="flex space-x-3">
            <button onclick="openSelectClassArmsModal()" class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                Use Template
            </button>
            <button onclick="openAddArmModal()" class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
                Create Arm
            </button>
        </div>
    </div>

    <!-- Arms Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Arm Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Created</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @php
                        $arms = ['No Arm', 'A', 'B', 'C', 'D', 'E', 'F'];
                    @endphp
                    @foreach($arms as $arm)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">{{ $arm }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">22/04/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                ● Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="relative">
                                <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu would go here -->
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Dropdown Menu Template (hidden by default) -->
<div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-10">
    <div class="py-1">
        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            View Arm
        </a>
        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
            Edit Arm
        </a>
        <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
            </svg>
            Deactivate Arm
        </a>
    </div>
</div>

<!-- Select Class Arms Modal -->
<div id="selectClassArmsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl mx-4 max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 sticky top-0 bg-white">
            <h3 class="text-lg font-semibold" style="color: #004A53;">Select Class Arms</h3>
            <button onclick="closeSelectClassArmsModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-6">
            <!-- Alphabet Section -->
            <div class="bg-gray-50 rounded-lg p-4">
                <div class="flex items-center mb-3">
                    <input type="checkbox" id="alphabet-all" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-3">
                    <label for="alphabet-all" class="text-sm font-medium text-gray-700">Alphabet</label>
                </div>
                <div class="grid grid-cols-6 gap-3 ml-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="arm-a" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="arm-a" class="text-sm text-gray-700">A</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="arm-b" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="arm-b" class="text-sm text-gray-700">B</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="arm-c" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="arm-c" class="text-sm text-gray-700">C</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="arm-d" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="arm-d" class="text-sm text-gray-700">D</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="arm-e" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="arm-e" class="text-sm text-gray-700">E</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="arm-f" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="arm-f" class="text-sm text-gray-700">F</label>
                    </div>
                </div>
            </div>

            <!-- Metals Section -->
            <div class="bg-gray-50 rounded-lg p-4">
                <div class="flex items-center mb-3">
                    <input type="checkbox" id="metals-all" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-3">
                    <label for="metals-all" class="text-sm font-medium text-gray-700">Metals</label>
                </div>
                <div class="grid grid-cols-6 gap-3 ml-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="metal-gold" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="metal-gold" class="text-sm text-gray-700">Gold</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="metal-silver" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="metal-silver" class="text-sm text-gray-700">Silver</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="metal-diamond" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="metal-diamond" class="text-sm text-gray-700">Diamond</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="metal-bronze" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="metal-bronze" class="text-sm text-gray-700">Bronze</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="metal-grade5" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="metal-grade5" class="text-sm text-gray-700">Grade Five</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="metal-grade6" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="metal-grade6" class="text-sm text-gray-700">Grade Six</label>
                    </div>
                </div>
            </div>

            <!-- Colours Section -->
            <div class="bg-gray-50 rounded-lg p-4">
                <div class="flex items-center mb-3">
                    <input type="checkbox" id="colours-all" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-3">
                    <label for="colours-all" class="text-sm font-medium text-gray-700">Colours</label>
                </div>
                <div class="grid grid-cols-6 gap-3 ml-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="colour-red" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="colour-red" class="text-sm text-gray-700">Red</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="colour-blue" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="colour-blue" class="text-sm text-gray-700">Blue</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="colour-green" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="colour-green" class="text-sm text-gray-700">Green</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="colour-white" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="colour-white" class="text-sm text-gray-700">white</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="colour-black" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="colour-black" class="text-sm text-gray-700">Black</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="colour-yellow" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="colour-yellow" class="text-sm text-gray-700">Yellow</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 sticky bottom-0 bg-white">
            <button onclick="closeSelectClassArmsModal()" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium" style="font-family: 'Sitka', Georgia, serif;">
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                Create Arms
            </button>
        </div>
    </div>
</div>

<!-- Add Arm Modal -->
<div id="addArmModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold" style="color: #004A53;">Add Arm</h3>
            <button onclick="closeAddArmModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6">
            <!-- Arm Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Arm Name
                </label>
                <input type="text" placeholder="e.g. A, A-Gold, B, C..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200">
            <button onclick="closeAddArmModal()" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium" style="font-family: 'Sitka', Georgia, serif;">
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
// Select Class Arms Modal functions
function openSelectClassArmsModal() {
    const modal = document.getElementById('selectClassArmsModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeSelectClassArmsModal() {
    const modal = document.getElementById('selectClassArmsModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Add Arm Modal functions
function openAddArmModal() {
    const modal = document.getElementById('addArmModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeAddArmModal() {
    const modal = document.getElementById('addArmModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'selectClassArmsModal') {
        closeSelectClassArmsModal();
    }
    if (event.target.id === 'addArmModal') {
        closeAddArmModal();
    }
});
</script>
@endpush

@endsection

