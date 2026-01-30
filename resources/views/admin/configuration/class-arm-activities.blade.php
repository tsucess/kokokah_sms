@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'Class Arm Activities')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('admin.configuration') }}" class="flex items-center text-orange-500 hover:text-orange-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            System Configuration
        </a>
        <span class="text-gray-400 mx-2">/</span>
        <span class="text-gray-600">Class Arm</span>
    </div>

    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-teal-900 mb-1">First year - 2025/2026</h2>
        <p class="text-sm text-teal-600">Current Term</p>
    </div>

    <!-- Filters -->
    <div class="mb-6 flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    <option>Select Class</option>
                    <option selected>----</option>
                </select>
            </div>
            <div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    <option>Select Term</option>
                    <option selected>First Term</option>
                    <option>Second Term</option>
                    <option>Third Term</option>
                </select>
            </div>
            <div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    <option>Select Session</option>
                    <option selected>----</option>
                </select>
            </div>
        </div>
        <button class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
            Add activity
        </button>
    </div>

    <!-- Activities Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">S/N</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Activity</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Assigned Class</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Activity 1 - Event -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025 - 16/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12:00 PM - 04:40 PM</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 text-xs rounded">Event</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">All Classes</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Activity 2 - Holiday -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025 - 16/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12:00 PM - 04:40 PM</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 text-xs rounded">Holiday</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Nur 1, Nur 2, Pry 1</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center space-x-2">
                                <button class="p-2 text-gray-400 hover:text-gray-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-gray-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Activity 3 - Event -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025 - 16/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12:00 PM - 04:40 PM</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 text-xs rounded">Event</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">All Classes</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Activity 4 - Holiday -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025 - 16/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12:00 PM - 04:40 PM</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 text-xs rounded">Holiday</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Nur 1, Nur 2, Pry 1</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Activity 5 - Event -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025 - 16/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12:00 PM - 04:40 PM</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 text-xs rounded">Event</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">All Classes</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Activity 6 - Holiday -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">10/07/2025 - 16/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">12:00 PM - 04:40 PM</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 text-xs rounded">Holiday</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Nur 1, Nur 2, Pry 1</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="p-2 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Edit Activity Modal -->
<div id="editActivityModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4 max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 sticky top-0 bg-white">
            <h3 class="text-lg font-semibold" style="color: #004A53;">Edit Activity</h3>
            <button onclick="closeEditActivityModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-4">
            <!-- Activity Type -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Activity Type
                </label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    <option value="">Select activity type...</option>
                    <option value="event" selected>Event</option>
                    <option value="holiday">Holiday</option>
                    <option value="exam">Exam</option>
                    <option value="meeting">Meeting</option>
                </select>
            </div>

            <!-- Name of Activity -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Name of Activity
                </label>
                <input type="text" placeholder="Enter activity name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Description
                </label>
                <textarea rows="3" placeholder="Enter description" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700"></textarea>
            </div>

            <!-- Term Start Date and Term End Date -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Term Start Date
                    </label>
                    <input type="text" value="03 Oct, 2025" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Term End Date
                    </label>
                    <input type="text" value="03 Oct, 2025" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                </div>
            </div>

            <!-- All day checkbox -->
            <div class="flex items-center">
                <input type="checkbox" id="allDay" class="w-4 h-4 text-orange-400 border-gray-300 rounded focus:ring-orange-500">
                <label for="allDay" class="ml-2 text-sm text-gray-700">All day</label>
            </div>

            <!-- Start Time and Stop Time -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Start Time
                    </label>
                    <div class="flex items-center gap-2">
                        <input type="text" value="8:00" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                        <div class="flex border border-gray-300 rounded-lg overflow-hidden">
                            <button class="px-3 py-2 bg-orange-400 text-white text-sm font-medium">AM</button>
                            <button class="px-3 py-2 bg-white text-gray-700 text-sm font-medium hover:bg-gray-50">PM</button>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Stop Time
                    </label>
                    <div class="flex items-center gap-2">
                        <input type="text" value="8:00" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                        <div class="flex border border-gray-300 rounded-lg overflow-hidden">
                            <button class="px-3 py-2 bg-orange-400 text-white text-sm font-medium">AM</button>
                            <button class="px-3 py-2 bg-white text-gray-700 text-sm font-medium hover:bg-gray-50">PM</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- All classes checkbox -->
            <div class="flex items-center">
                <input type="checkbox" id="allClasses" class="w-4 h-4 text-orange-400 border-gray-300 rounded focus:ring-orange-500">
                <label for="allClasses" class="ml-2 text-sm text-gray-700">All classes</label>
            </div>

            <!-- Assign tags -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Assign tags
                </label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                    <option value="">Select tags...</option>
                    <option value="important">Important</option>
                    <option value="urgent">Urgent</option>
                    <option value="optional">Optional</option>
                </select>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 sticky bottom-0 bg-white">
            <button onclick="closeEditActivityModal()" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium" style="font-family: 'Sitka', Georgia, serif;">
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                Update Activity
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Modal functions
function openEditActivityModal() {
    const modal = document.getElementById('editActivityModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeEditActivityModal() {
    const modal = document.getElementById('editActivityModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'editActivityModal') {
        closeEditActivityModal();
    }
});
</script>
@endpush

@endsection

