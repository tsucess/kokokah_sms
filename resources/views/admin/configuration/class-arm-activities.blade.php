@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'Class Arm Activities')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6 flex items-center">
        <a href="{{ route('admin.configuration') }}" class="flex items-center text-orange-500 hover:text-orange-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            System Configuration
        </a>
        <span class="text-gray-400 mx-2">/</span>
        <span class="text-gray-600">School Calendar</span>
    </div>

    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-primary font-fredoka mb-1">First year - 2025/2026</h2>
        <p class="text-sm text-primary font-sitka">Current Term</p>
    </div>

    <!-- Filters -->
    <div class="mb-10 flex items-center justify-between">
        <div class="flex items-center space-x-4 w-2/3">
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3" >Select Class</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>Academic</option>
                    <option>Non-Academic</option>
                    <option>Sports</option>
                    <option>Arts</option>
                    <option>Leadership</option>
                </select>
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3" >Select Term</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>Academic</option>
                    <option>Non-Academic</option>
                    <option>Sports</option>
                    <option>Arts</option>
                    <option>Leadership</option>
                </select>
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3" >Select Session</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>Academic</option>
                    <option>Non-Academic</option>
                    <option>Sports</option>
                    <option>Arts</option>
                    <option>Leadership</option>
                </select>
            </div>
        </div>
        <button onclick="openEditActivityModal()" class="px-6 py-2 bg-accent text-black rounded-lg font-semibold font-mulish text-base hover:bg-accent-hover transition-colors">
            Add activity
        </button>
    </div>

    <!-- Activities Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class=" border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">S/N</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Activity</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Date</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Time</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Status</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Assigned Class</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class=" divide-y divide-gray-200">
                    <!-- Activity 1 - Event -->
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025 - 16/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12:00 PM - 04:40 PM</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 text-xs rounded">Event</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">All Classes</td>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">2</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025 - 16/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12:00 PM - 04:40 PM</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 text-xs rounded">Holiday</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Nur 1, Nur 2, Pry 1</td>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025 - 16/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12:00 PM - 04:40 PM</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 text-xs rounded">Event</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">All Classes</td>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">2</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025 - 16/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12:00 PM - 04:40 PM</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 text-xs rounded">Holiday</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Nur 1, Nur 2, Pry 1</td>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025 - 16/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12:00 PM - 04:40 PM</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-orange-100 text-orange-600 text-xs rounded">Event</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">All Classes</td>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">2</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025 - 16/07/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">12:00 PM - 04:40 PM</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 bg-blue-100 text-blue-600 text-xs rounded">Holiday</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Nur 1, Nur 2, Pry 1</td>
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
<div id="editActivityModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-xl mx-4 max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4">
            <h3 class="text-primary text-2xl font-fredoka font-semibold">Edit Activity</h3>
            <button onclick="closeEditActivityModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-regular fa-circle-xmark fa-lg"></i>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-6">
            <!-- Activity Type -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Activity Type
                </label>
                <select class="w-full outline-none text-primary text-sm">
                    <option value="">Select activity type...</option>
                    <option value="event" selected>Event</option>
                    <option value="holiday">Holiday</option>
                    <option value="exam">Exam</option>
                    <option value="meeting">Meeting</option>
                </select>
            </div>

            <!-- Name of Activity -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Name of Activity
                </label>
                <input type="text" placeholder="Enter activity name" class="w-full outline-none text-primary text-sm">
            </div>

            <!-- Description -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Description
                </label>
                <textarea rows="3" placeholder="Enter description" class="w-full outline-none text-primary text-sm resize-none"></textarea>
            </div>

            <!-- Term Start Date and Term End Date -->
            <div class="grid grid-cols-2 gap-4">
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Term Start Date
                    </label>
                    <input type="date" value="03 Oct, 2025" class="w-full outline-none text-primary text-sm">
                </div>
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Term End Date
                    </label>
                    <input type="date" value="03 Oct, 2025" class="w-full outline-none text-primary text-sm">
                </div>
            </div>

            <!-- All day checkbox -->
            <div class="flex items-center">
                <input type="checkbox" id="allDay" class="w-4 h-4 text-orange-400 border-gray-300 rounded focus:ring-orange-500">
                <label for="allDay" class="ml-2 text-sm text-gray-700">All day</label>
            </div>

            <!-- Start Time and Stop Time -->
            <div class=" py-4 flex items-center gap-10">
                <div class="flex flex-col gap-2">
                    <h5 class="text-primary text-xl font-fredoka font-bold">Start Time</h5>
                    <div class="flex items-center">
                        <input type="text" placeholder="8:00" class="text-black300 font-bold text-sm rounded-l border border-primary/30 py-3 text-center w-20">
                        <input type="text" placeholder="AM" class="bg-blue200 text-white font-bold text-sm text-center py-3 w-12 border border-blue200">
                        <input type="text" placeholder="PM" class=" text-black300 font-bold text-sm text-center py-3 w-12 border border-primary/30 rounded-r">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h5 class="text-primary text-xl font-fredoka font-bold">Stop Time</h5>
                    <div class="flex items-center">
                        <input type="text" placeholder="8:00" class="text-black300 font-bold text-sm rounded-l border border-primary/30 py-3 text-center w-20">
                        <input type="text" placeholder="AM" class="bg-blue200 text-white font-bold text-sm text-center py-3 w-12 border border-blue200">
                        <input type="text" placeholder="PM" class=" text-black300 font-bold text-sm text-center py-3 w-12 border border-primary/30 rounded-r">
                    </div>
                </div>

            </div>

            <!-- All classes checkbox -->
            <div class="flex items-center">
                <input type="checkbox" id="allClasses" class="w-4 h-4 text-orange-400 border-gray-300 rounded focus:ring-orange-500">
                <label for="allClasses" class="ml-2 text-sm text-gray-700">All classes</label>
            </div>

            <!-- Assign tags -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                    Assign tags
                </label>
                <select class="w-full outline-none text-primary text-sm">
                    <option value="">Select tags...</option>
                    <option value="important">Important</option>
                    <option value="urgent">Urgent</option>
                    <option value="optional">Optional</option>
                </select>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4">
            <button onclick="closeEditActivityModal()" class="px-10 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors font-medium">
                Cancel
            </button>
            <button class="px-10 py-2 rounded-lg font-medium bg-accent text-black hover:bg-accent-hover transition-colors">
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

