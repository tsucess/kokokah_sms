@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'Academic Sessions')
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
        <span class="text-gray-600">Sessions & Term</span>
    </div>

    <!-- Current Academic Session -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-teal-900 mb-2">Current Academic Session</h2>
        <p class="text-teal-600 text-lg mb-6">2025/2026 Session</p>

        <!-- Tabs -->
        <div class="border-b border-gray-200 mb-6">
            <nav class="flex space-x-8" aria-label="Tabs">
                <button class="py-4 px-1 border-b-2 border-teal-600 text-teal-600 font-medium text-sm">
                    Academic Sessions
                </button>
                <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Term Definitions
                </button>
            </nav>
        </div>

        <!-- Create Button -->
        <div class="mb-6 flex justify-end">
            <button onclick="openCreateAcademicSessionModal()" class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors font-medium flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Create Academic Session
            </button>
        </div>

        <!-- Sessions Table -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Term</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Timeframe</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- First Term -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">First Term</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025 - 10/07/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">---/---</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Settings
                                    </button>
                                    <button class="px-4 py-2 bg-teal-900 text-white rounded-lg text-sm font-medium hover:bg-teal-800 transition-colors">
                                        Set as current
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Second Term -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">Second Term</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025 - 10/07/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                    ● Current Term
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Settings
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Third Term -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="#" class="text-sm font-medium text-teal-600 hover:text-teal-800">Third Term</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025 - 10/07/2025</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">---/---</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center space-x-2">
                                    <button class="px-4 py-2 border border-teal-600 text-teal-600 rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Configure
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

<!-- Create Academic Session Modal -->
<div id="createAcademicSessionModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-3xl mx-4 max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 sticky top-0 bg-white">
            <h3 class="text-lg font-semibold" style="color: #004A53;">Create Academic Session</h3>
            <button onclick="closeCreateAcademicSessionModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-6">
            <!-- Select Session -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Select Session
                </label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    <option value="">Select...</option>
                    <option value="2024-2025">Session 2024/2025</option>
                    <option value="2025-2026">Session 2025/2026</option>
                    <option value="2026-2027">Session 2026/2027</option>
                    <option value="2027-2028">Session 2027/2028</option>
                </select>
            </div>

            <!-- First Term Section -->
            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="text-base font-semibold text-gray-900 mb-4">First Term</h4>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Term Start Date
                        </label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Term End Date
                        </label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Next Term Start Date
                        </label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    </div>
                </div>
            </div>

            <!-- Second Term Section -->
            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="text-base font-semibold text-gray-900 mb-4">Second Term</h4>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Term Start Date
                        </label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Term End Date
                        </label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Next Term Start Date
                        </label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    </div>
                </div>
            </div>

            <!-- Third Term Section -->
            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="text-base font-semibold text-gray-900 mb-4">Third Term</h4>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Term Start Date
                        </label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Term End Date
                        </label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Next Term Start Date
                        </label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 sticky bottom-0 bg-white">
            <button class="px-6 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                Create Session
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Create Academic Session Modal functions
function openCreateAcademicSessionModal() {
    const modal = document.getElementById('createAcademicSessionModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeCreateAcademicSessionModal() {
    const modal = document.getElementById('createAcademicSessionModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'createAcademicSessionModal') {
        closeCreateAcademicSessionModal();
    }
});
</script>
@endpush

@endsection

