@extends('layouts.superadmin', ['active' => 'starboard'])

@section('title', 'Kokokah Starboard Badges')
@section('page-title', 'Kokokah Starboard Badges')
@section('page-description', 'Manage and oversee your school management platform')

@section('header-actions')
    <button onclick="openBadgeModal()" class="px-4 py-2 rounded-lg font-medium transition-colors" style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
        + Add New Badge
    </button>
@endsection

@section('content')
<div class="p-8 space-y-6">
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Total Number of Academic Badges -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <p class="text-sm font-medium" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Total Number of Academic Badges</p>
                <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background-color: #F3F4F6;">
                    <svg class="w-6 h-6" style="color: #004A53;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
            </div>
            <p class="text-4xl font-bold mb-2" style="font-family: 'Fredoka', cursive; color: #004A53;">1,247</p>
            <div class="flex items-center text-sm" style="color: #10B981;">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span style="font-family: 'Sitka', Georgia, serif;">+2% this month</span>
            </div>
        </div>

        <!-- Total Number of Non-Academic Badges -->
        <div class="bg-white rounded-lg border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <p class="text-sm font-medium" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Total Number of Non-Academic Badges</p>
                <div class="w-10 h-10 rounded-lg flex items-center justify-center" style="background-color: #F3F4F6;">
                    <svg class="w-6 h-6" style="color: #004A53;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    </svg>
                </div>
            </div>
            <p class="text-4xl font-bold mb-2" style="font-family: 'Fredoka', cursive; color: #004A53;">834</p>
            <div class="flex items-center text-sm" style="color: #10B981;">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span style="font-family: 'Sitka', Georgia, serif;">+2% this month</span>
            </div>
        </div>
    </div>

    <!-- List of Badges -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">List of Badges</h2>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Badge ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Badge Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Requirement</th>
                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Badge Row 1 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">B0001</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Attendance Star</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Academic</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Awarded for consistent attendance</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">≥ 95% attendance</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Badge Row 2 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">B0001</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Attendance Star</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Academic</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Awarded for consistent attendance</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">≥ 95% attendance</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Badge Row 3 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">B0001</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Team Player Badge</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Non-Academic</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">For learners who work well with others</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Group activity participation + peer rating.</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Badge Row 4 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">B0001</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Team Player Badge</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Non-Academic</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">For learners who work well with others</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Group activity participation + peer rating.</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Badge Row 5 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">B0001</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Kindness Champion</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Non-Academic</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">For showing empathy and helping others</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Teacher nomination or peer votes.</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Badge Row 6 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">B0001</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Kindness Champion</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">Non-Academic</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">For showing empathy and helping others</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Teacher nomination or peer votes.</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <button class="px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">
                Previous
            </button>
            <p class="text-sm" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">Page 1 of 32</p>
            <button class="px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors" style="font-family: 'Sitka', Georgia, serif; color: #6B7280;">
                Next
            </button>
        </div>
    </div>
</div>

<!-- Add New Badge Modal -->
<div id="badgeModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" style="font-family: 'Sitka', Georgia, serif;">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold" style="color: #004A53;">Add New Badge</h3>
            <button onclick="closeBadgeModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-4">
            <!-- Badge ID and Badge Name Row -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-2" style="color: #004A53;">Badge ID</label>
                    <input type="text" placeholder="Enter badge ID" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent" style="font-family: 'Sitka', Georgia, serif;">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2" style="color: #004A53;">Badge Name</label>
                    <input type="text" placeholder="Enter badge name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent" style="font-family: 'Sitka', Georgia, serif;">
                </div>
            </div>

            <!-- Category -->
            <div>
                <label class="block text-sm font-medium mb-2" style="color: #004A53;">Category</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent" style="font-family: 'Sitka', Georgia, serif; color: #004A53;">
                    <option>Academic</option>
                    <option>Non-Academic</option>
                    <option>Sports</option>
                    <option>Arts</option>
                    <option>Leadership</option>
                </select>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-medium mb-2" style="color: #004A53;">Description</label>
                <textarea rows="4" placeholder="Enter badge description" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent resize-none" style="font-family: 'Sitka', Georgia, serif;"></textarea>
            </div>

            <!-- Requirement -->
            <div>
                <label class="block text-sm font-medium mb-2" style="color: #004A53;">Requirement</label>
                <textarea rows="4" placeholder="Enter badge requirements" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:border-transparent resize-none" style="font-family: 'Sitka', Georgia, serif;"></textarea>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200">
            <button onclick="closeBadgeModal()" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium" style="font-family: 'Sitka', Georgia, serif;">
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
// Modal functions
function openBadgeModal() {
    const modal = document.getElementById('badgeModal');
    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }
}

function closeBadgeModal() {
    const modal = document.getElementById('badgeModal');
    if (modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
}

// Close modal when clicking outside
document.addEventListener('click', function(event) {
    if (event.target.id === 'badgeModal') {
        closeBadgeModal();
    }
});
</script>
@endpush

@endsection
