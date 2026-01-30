@extends('layouts.admin', ['active' => 'timetable'])

@section('title', 'Timetable - Primary 1')
@section('page-title', 'Timetable')

@section('content')
<div class="p-8">
    <!-- Back Navigation -->
    <div class="mb-6">
        <a href="{{ route('school.timetable-overview') }}" class="text-teal-600 hover:text-teal-800 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Timetable | Primary 1
        </a>
    </div>

    <!-- Class Tabs -->
    <div class="mb-6 border-b border-gray-200">
        <nav class="flex space-x-8">
            <a href="#" class="text-white bg-orange-400 py-3 px-4 rounded-t-lg font-medium text-sm">
                Primary 1 A
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-3 px-4 border-b-2 border-transparent font-medium text-sm">
                Primary 1 B
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-3 px-4 border-b-2 border-transparent font-medium text-sm">
                Primary 1 C
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-3 px-4 border-b-2 border-transparent font-medium text-sm">
                Primary 1 D
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-3 px-4 border-b-2 border-transparent font-medium text-sm">
                Primary 1 E
            </a>
        </nav>
    </div>

    <!-- Filters and Add Period Button -->
    <div class="mb-6 flex items-center space-x-4">
        <div class="flex-1">
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>School Session</option>
                <option selected>2025-2026</option>
            </select>
        </div>
        <div class="flex-1">
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Term</option>
                <option selected>First Term</option>
                <option>Second Term</option>
                <option>Third Term</option>
            </select>
        </div>
        <div class="flex-1">
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option selected>Select Subject</option>
                <option>English Language</option>
                <option>Mathematics</option>
                <option>Basic Studies</option>
            </select>
        </div>
        <button onclick="openPeriodModal()" class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center whitespace-nowrap">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add Period
        </button>
    </div>

    <!-- Timetable Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden mb-6">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Monday</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tuesday</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Wednesday</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thursday</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Friday</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Saturday</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @php
                        $schedule = [
                            ['time' => '9:00 - 10:00', 'mon' => 'English Language', 'tue' => 'Mathematics', 'wed' => 'English Language', 'thu' => 'Basic Studies', 'fri' => 'Social Studies', 'sat' => 'Free Slot'],
                            ['time' => '9:00 - 10:00', 'mon' => 'Mathematics', 'tue' => 'English Language', 'wed' => 'Basic Studies', 'thu' => 'Mathematics', 'fri' => 'English Language', 'sat' => 'Free Slot'],
                            ['time' => '9:00 - 10:00', 'mon' => 'Basic Studies', 'tue' => 'Social Studies', 'wed' => 'Mathematics', 'thu' => 'English Language', 'fri' => 'Basic Studies', 'sat' => 'Free Slot'],
                            ['time' => '9:00 - 10:00', 'mon' => 'Social Studies', 'tue' => 'Basic Studies', 'wed' => 'Social Studies', 'thu' => 'Free Slot', 'fri' => 'Mathematics', 'sat' => 'Free Slot'],
                            ['time' => '9:00 - 10:00', 'mon' => 'English Language', 'tue' => 'Mathematics', 'wed' => 'English Language', 'thu' => 'Social Studies', 'fri' => 'Free Slot', 'sat' => 'Free Slot'],
                        ];
                    @endphp
                    @foreach($schedule as $row)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $row['time'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $row['mon'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $row['tue'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $row['wed'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $row['thu'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $row['fri'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $row['sat'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <div class="mt-8 text-center">
        <p class="text-sm text-gray-500">COPYRIGHT © 2025</p>
    </div>
</div>

<!-- Period Modal -->
<div id="periodModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4 max-h-[90vh] overflow-y-auto">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 sticky top-0 bg-white">
            <div>
                <h3 class="text-lg font-semibold" style="color: #004A53;">Period</h3>
                <span class="inline-block px-3 py-1 bg-green-500 text-white text-xs rounded-full mt-1">Primary 1 A</span>
            </div>
            <button onclick="closePeriodModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-4">
            <!-- Period Days -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Period
                </label>
                <div class="grid grid-cols-6 gap-3">
                    <div class="flex items-center">
                        <input type="checkbox" id="day-monday" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="day-monday" class="text-sm text-gray-700">Monday</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="day-tuesday" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="day-tuesday" class="text-sm text-gray-700">Tuesday</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="day-wednesday" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="day-wednesday" class="text-sm text-gray-700">Wednesday</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="day-thursday" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="day-thursday" class="text-sm text-gray-700">Thursday</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="day-friday" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="day-friday" class="text-sm text-gray-700">Friday</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="day-saturday" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                        <label for="day-saturday" class="text-sm text-gray-700">Saturday</label>
                    </div>
                </div>
            </div>

            <!-- Select Subject -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Select Subject
                </label>
                <div class="relative">
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700 appearance-none">
                        <option value="">Select...</option>
                        <option value="english">English Language</option>
                        <option value="mathematics">Mathematics</option>
                        <option value="basic">Basic Studies</option>
                        <option value="social">Social Studies</option>
                    </select>
                    <svg class="w-5 h-5 text-gray-400 absolute right-3 top-3 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>

            <!-- Select Teacher -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Select Teacher
                </label>
                <div class="relative">
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700 appearance-none">
                        <option value="">Select...</option>
                        <option value="teacher1">Mr. John Doe</option>
                        <option value="teacher2">Mrs. Jane Smith</option>
                        <option value="teacher3">Mr. David Brown</option>
                    </select>
                    <svg class="w-5 h-5 text-gray-400 absolute right-3 top-3 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>

            <!-- This is break period -->
            <div class="flex items-center">
                <input type="checkbox" id="break-period" class="rounded border-gray-300 text-orange-400 focus:ring-orange-500 mr-2">
                <label for="break-period" class="text-sm text-gray-700">This is break period</label>
            </div>

            <!-- Time slot -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Time slot
                </label>
                <p class="text-xs text-gray-500 mb-3">Select what time this schedule will hold and if it is a double period</p>

                <!-- Double period class toggle -->
                <div class="flex items-center mb-4">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-400"></div>
                        <span class="ml-3 text-sm text-gray-700">Double period class</span>
                    </label>
                </div>

                <!-- Start Time and Stop Time -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Start Time -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Start Time</label>
                        <div class="flex items-center space-x-2">
                            <input type="text" value="8:00" class="w-20 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-center">
                            <div class="flex rounded-lg overflow-hidden border border-gray-300">
                                <button class="px-3 py-2 bg-blue-500 text-white text-sm font-medium">AM</button>
                                <button class="px-3 py-2 bg-white text-gray-700 text-sm font-medium hover:bg-gray-50">PM</button>
                            </div>
                        </div>
                    </div>

                    <!-- Stop Time -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Stop Time</label>
                        <div class="flex items-center space-x-2">
                            <input type="text" value="8:00" class="w-20 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-center">
                            <div class="flex rounded-lg overflow-hidden border border-gray-300">
                                <button class="px-3 py-2 bg-blue-500 text-white text-sm font-medium">AM</button>
                                <button class="px-3 py-2 bg-white text-gray-700 text-sm font-medium hover:bg-gray-50">PM</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200 sticky bottom-0 bg-white">
            <button onclick="closePeriodModal()" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium" style="font-family: 'Sitka', Georgia, serif;">
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                Add Period
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Period Modal functions
function openPeriodModal() {
    const modal = document.getElementById('periodModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closePeriodModal() {
    const modal = document.getElementById('periodModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'periodModal') {
        closePeriodModal();
    }
});
</script>
@endpush

@endsection

