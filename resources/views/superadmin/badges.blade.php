@extends('layouts.superadmin', ['active' => 'starboard'])

@section('title', 'Kokokah Starboard Badges')
@section('page-title', 'Kokokah Starboard Badges')
@section('page-description', 'Manage and oversee your school management platform')

@section('header-actions')
    <button onclick="openBadgeModal()" class="px-4 py-2 rounded-lg font-medium text-black text-body3 font-inter bg-accent hover:bg-accent-hover hover:cursor-pointer transition-colors" >
        + Add New Badge
    </button>
@endsection

@section('content')
<div class="p-8 space-y-6">
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Total Number of Academic Badges -->
        <div class="bg-white rounded-lg border border-school-btn p-6">
            <div class="flex items-center justify-between mb-4">
                <p class="text-sm font-medium font-fredoka text-primary" >Total Number of Academic Badges</p>
                <div class="w-10 h-10 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-black"  fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
            </div>
            <p class="text-4xl font-bold mb-4 font-fredoka text-primary" >1,247</p>
            <div class="flex items-center text-sm">
                <svg class="w-4 h-4 mr-1 text-green100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-green100">+2% this month</span>
            </div>
        </div>

        <!-- Total Number of Non-Academic Badges -->
        <div class="bg-white rounded-lg border border-school-btn p-6">
            <div class="flex items-center justify-between mb-4">
                <p class="text-sm font-medium font-fredoka text-primary" >Total Number of Non-Academic Badges</p>
                <div class="w-10 h-10 rounded-lg flex items-center justify-center" >
                    <svg class="w-6 h-6"  fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    </svg>
                </div>
            </div>
            <p class="text-4xl font-bold mb-4 font-fredoka text-primary">834</p>
            <div class="flex items-center text-sm" >
                <svg class="w-4 h-4 mr-1 text-green100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                <span class="text-green100">+2% this month</span>
            </div>
        </div>
    </div>

    <!-- List of Badges -->
    <div class="bg-white rounded-lg border border-school-btn">
        <div class="px-6 py-4">
            <h2 class="text-xl font-semibold font-fredoka text-primary" >List of Badges</h2>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="border-b border-school-btn">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold tracking-wider font-sitka" >Badge ID</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold tracking-wider font-sitka" >Badge Name</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold tracking-wider font-sitka" >Category</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold tracking-wider font-sitka" >Description</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold tracking-wider font-sitka" >Requirement</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold tracking-wider font-sitka" >Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 font-sitka">
                    <!-- Badge Row 1 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-primary" >B0001</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-primary" >Attendance Star</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-primary" >Academic</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-primary" >Awarded for consistent attendance</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-primary" >≥ 95% attendance</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-black hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Badge Row 2 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-primary" >B0001</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-primary" >Attendance Star</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-primary" >Academic</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-primary" >Awarded for consistent attendance</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-primary" >≥ 95% attendance</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-black hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Badge Row 3 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-primary" >B0001</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-primary" >Attendance Star</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-primary" >Academic</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-primary" >Awarded for consistent attendance</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-primary" >≥ 95% attendance</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-black hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Badge Row 4 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-primary" >B0001</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-primary" >Attendance Star</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-primary" >Academic</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-primary" >Awarded for consistent attendance</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-primary" >≥ 95% attendance</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-black hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Badge Row 5 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-primary" >B0001</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-primary" >Attendance Star</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-primary" >Academic</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-primary" >Awarded for consistent attendance</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-primary" >≥ 95% attendance</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-black hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                    <!-- Badge Row 6 -->
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-primary" >B0001</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-primary" >Attendance Star</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-primary" >Academic</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-primary" >Awarded for consistent attendance</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-primary" >≥ 95% attendance</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="text-black hover:text-gray-600 transition-colors">
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
        <div class="px-6 py-4 border-t border-school-btn flex items-center justify-between">
            <button class="px-4 py-1 text-sm font-medium rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors" >
                Previous
            </button>
            <p class="text-sm text-pageColor" >Page 1 of 32</p>
            <button class="px-4 py-1 text-sm font-medium rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors" >
                Next
            </button>
        </div>
    </div>
</div>

<!-- Add New Badge Modal -->
<div id="badgeModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center py-10 z-50" >
    <div class="bg-white rounded-lg shadow-xl w-full max-w-xl mx-4 max-h-[90vh] overflow-y-scroll">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4">
            <div class="flex flex-col gap-1">
                <h3 class="text-lg font-semibold font-fredoka text-primary" >Add New Badge</h3>
                <p class="text-sm font-fredoka text-primary">Kokokah Starboard</p>
            </div>

            <button onclick="closeBadgeModal()" class="text-gray-700 hover:text-gray-900 transition-colors">
                <i class="fa-regular fa-circle-xmark fa-lg"></i>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-4 flex flex-col gap-3">
            <!-- Badge ID and Badge Name Row -->
            <div class="grid grid-cols-1 gap-5">
                <div class="border border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3" >Badge ID</label>
                    <input type="text" placeholder="Enter badge ID" class="w-full outline-none text-primary text-sm" >
                </div>
                <div class="border border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3" >Badge Name</label>
                    <input type="text" placeholder="Enter badge name" class="w-full outline-none text-primary text-sm" >
                </div>
            </div>

            <!-- Category -->
            <div class="border border-primary rounded-xl relative px-4 py-3 mt-3">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3" >Category</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>Academic</option>
                    <option>Non-Academic</option>
                    <option>Sports</option>
                    <option>Arts</option>
                    <option>Leadership</option>
                </select>
            </div>

            <!-- Description -->
            <div class="border border-primary rounded-xl relative px-4 py-3 mt-3 h-30">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Description</label>
                <textarea rows="4" placeholder="Enter badge description" class="w-full outline-none text-primary text-sm resize-none h-full" ></textarea>
            </div>

            <!-- Requirement -->
            <div class="border border-primary rounded-xl relative px-4 py-3 mt-3 h-30">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Requirement</label>
                <textarea rows="4" placeholder="Enter badge description" class="w-full outline-none text-primary text-sm resize-none h-full" ></textarea>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4">
            <button onclick="closeBadgeModal()" class="px-6 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors font-medium" >
                Cancel
            </button>
            <button class="px-6 py-2 rounded-lg font-medium bg-accent text-black hover:bg-accent-hover transition-colors" >
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
