@extends('layouts.admin', ['active' => 'classes'])

@section('title', 'Classes')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-8">
        <!-- Header with Filters -->
        <div class="mb-10 flex flex-col gap-5">

            <div class="flex items-start justify-between gap-3">
                <div class="flex flex-col gap-1">
                    <h2 class="text-2xl font-bold text-primary font-fredoka">Classes</h2>
                    <p class="text-xs text-primary font-sitka">Manage staff information and enrollment</p>
                </div>
                <div class="flex align-items-center">
                    <button
                        class="px-4 py-2 bg-white text-body3 border border-primary text-primary rounded-l-lg font-semibold hover:bg-primary hover:text-white transition-colors">
                        Download PDF Report
                    </button>
                    <button
                        class="px-4 py-2 bg-accent text-body3 text-black rounded-r-lg font-semibold hover:bg-yellow-500 transition-colors flex items-center">
                        Download Excel Report
                    </button>
                </div>
            </div>

            <!-- Filters and Search -->
            <div class="flex items-center space-x-4 ">
                <!-- Select Level Dropdown -->
                <div class="border border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                    <label for=""
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        level</label>

                    <select class="w-full outline-none text-primary text-sm">
                        <option>Select level</option>
                        <option>Nursery</option>
                        <option>Primary</option>
                        <option>Secondary</option>
                    </select>
                </div>

                <!-- Select Arm Dropdown -->
                <div class="border border-primary rounded-xl relative px-4 py-3 mt-3 w-full"><label for=""
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        arm</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Select arm</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                    </select>
                </div>
                <!-- Search Bar -->

            </div>
            <div class="flex-1 relative bg-white rounded-full shadow py-1">
                <input type="text" placeholder="Search for classes" class="w-full pl-10 pr-4 py-2 text-sm text-search">
                <svg class="w-5 h-5 text-search absolute left-3 top-2.5" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <!-- Classes Grid -->
        <div class="grid grid-cols-3 gap-6 mb-6">
            @for ($i = 1; $i <= 12; $i++)
                <div class="bg-white rounded-lg border-4 border-orange50 p-6 hover:shadow-lg transition-shadow">
                    <!-- Status Badge -->
                    <div class="flex mb-3">
                        <span
                            class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green300 text-black">
                            ● Active
                        </span>
                    </div>

                    <!-- Class Name -->
                    <h3 class="text-lg font-bold text-primary font-sitka mb-2">Nursery {{ $i }} - t-A</h3>
                    <p class="text-sm text-primary font-sitka mb-4">Second Term, 2025/2026 Session</p>

                    <!-- Teacher Info -->
                    <div class="space-y-2 mb-4">
                        <div class="flex items-start gap-2">
                            <span class="text-xs text-primary font-semibold font-sitka">Teacher:</span>
                            <span class="text-xs text-primary font-semibold font-sitka">Adewale Adebayo</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="text-xs text-primary font-semibold font-sitka">Asst. Teacher:</span>
                            <span class="text-xs text-primary font-semibold font-sitka">Chioma Okafor</span>
                        </div>
                    </div>

                    <!-- Enrollment Progress -->
                    <div class="mb-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-xs text-primary font-sitka">Enrollment</span>
                            <span class="text-xs font-semibold text-primary font-sitka">40/100</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-orange-400 h-2 rounded-full" style="width: 40%"></div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex space-x-2">
                        <a href='/admin/classes/subjects'
                            class="flex-1 px-3 py-1 flex justify-center items-center gap-1 bg-accent text-black rounded-lg hover:bg-accent-hover transition-colors text-xs font-medium">
<i class="fa-solid fa-eye"></i>
                            View Class
                    </a>
                        <button onclick="openAssignTeacherModal()"
                            class="flex-1 px-2 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-xs font-medium">
<i class="fa-solid fa-user-plus"></i>
                            Assign Teacher
                        </button>
                    </div>
                </div>
            @endfor
        </div>

        <!-- Pagination and Export Buttons -->
        <div class="">
            <!-- Pagination -->
            <div class="flex items-center justify-between space-x-2">
                <button class="px-3 py-1 border border-grey600 rounded-lg text-black100 text-xs font-inter hover:bg-gray-50">
                    Previous
                </button>
                <span class="font-inter text-sm text-grey700">Page 1 of 2</span>
                <button class="px-3 py-1 border border-grey600 rounded-lg text-black100 text-xs font-inter hover:bg-gray-50">
                    Next
                </button>
            </div>

            <!-- Export Buttons -->
            {{-- <div class="flex items-center space-x-3">
                <button
                    class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Download PDF Report
                </button>
                <button
                    class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Download Excel Report
                </button>
            </div> --}}
        </div>
    </div>

    <!-- Assign Teacher Modal -->
    <div id="assignTeacherModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-lg mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 py-4">
                <h3 class="text-lg font-semibold text-primary font-fredoka">Assign Teacher</h3>
                <button onclick="closeAssignTeacherModal()" class="text-black hover:text-gray-600 transition-colors">
                    <i class="fa-regular fa-circle-xmark"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="px-6 py-6 space-y-8">
                <!-- Select Teacher -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Select From Teacher
                    </label>
                    <select
                        class="w-full outline-none text-primary text-sm">
                        <option value="">Select teacher...</option>
                        <option>Adewale Adebayo</option>
                        <option>Chioma Okafor</option>
                        <option>Ibrahim Musa</option>
                        <option>Fatima Hassan</option>
                    </select>
                </div>

                <!-- Select Assistant Teacher -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Select Assistant From Teacher
                    </label>
                    <select
                        class="w-full outline-none text-primary text-sm">
                        <option value="">Select assistant teacher...</option>
                        <option>Adewale Adebayo</option>
                        <option>Chioma Okafor</option>
                        <option>Ibrahim Musa</option>
                        <option>Fatima Hassan</option>
                    </select>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="flex items-center justify-end gap-3 px-6 py-4">
                <button onclick="closeAssignTeacherModal()"
                    class="px-6 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors font-medium"
                   >
                    Cancel
                </button>
                <button class="px-6 py-2 rounded-lg bg-accent text-black font-sitka hover:bg-accent-hover font-medium transition-colors"
                    >
                    Save
                </button>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Modal functions
            function openAssignTeacherModal() {
                const modal = document.getElementById('assignTeacherModal');
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }
            }

            function closeAssignTeacherModal() {
                const modal = document.getElementById('assignTeacherModal');
                if (modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            }

            // Close modal when clicking outside
            document.addEventListener('click', function(event) {
                if (event.target.id === 'assignTeacherModal') {
                    closeAssignTeacherModal();
                }
            });
        </script>
    @endpush

@endsection
