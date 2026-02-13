@extends('layouts.admin', ['active' => 'staff'])

@section('title', 'Staff Management')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <style>
        .active-tab {
            border-bottom-color: #FDAF22;
            color: #FDAF22;
        }

        .active-tab:hover {
            border-bottom-color: #FECA6C;
            color: #FECA6C;
        }

        .hidden {
            display: none;
        }
    </style>
    <div class="p-8">
        <!-- Header -->
        <div class="mb-10 flex items-start justify-between gap-6">
            <div class="space-y-2">
                <h2 class="text-xl font-bold text-primary font-fredoka">Staff Management</h2>
                <p class="text-sm text-primary font-sitka">Manage staff information and enrollment</p>
            </div>
            <div class="flex items-center justify-end space-x-3 ">
                <select name="" id=""
                    class="px-4 py-2 border border-communicationBtn text-sm font-semibold text-primary group rounded-lg hover:bg-communicationBtn transition-colors gap-1 flex items-center">
                    <option value="">Export PDF</option>
                </select>

                <div class="flex items-center ">
                    <button
                        class="px-4 py-2 border font-semibold group border-primary text-primary gap-1 text-sm rounded-l-lg hover:bg-primary hover:text-white transition-colors flex items-center">
                        Bulk Upload Staff
                    </button>
                    <button
                        class="px-4 py-2 bg-accent font-semibold gap-1 border border-accent text-black text-sm rounded-r-lg hover:border-accent-hover hover:bg-accent-hover transition-colors flex items-center">
                        <i class="fa-solid fa-plus text-black"></i>
                        Add New Staff
                    </button>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-4 gap-6 mb-6">
            <!-- Total Staff -->
            <div class=" rounded-xl py-7 px-6 flex flex-col gap-4 justify-center shadow-boardsheet">
                <h3 class="text-sm font-mulish text-primary">Total Staff</h3>
                <div class="flex items-center justify-between">
                    <div class="space-y-2">
                        <!-- Left Big Number -->
                        <p class="text-h5 font-bold text-primary font-sitka">1,247</p>

                    </div>
                    <!-- Chart Section -->
                    <div class="flex flex-col items-center gap-6">

                        <!-- Donut Chart -->
                        <div class="relative w-16 h-16 rounded-full donut-chart flex items-center justify-center">
                            <div class="w-12 h-12 bg-white rounded-full shadow-inner flex items-center justify-center">
                                <span class="text-base font-bold text-primary font-sitka">100</span>
                            </div>
                        </div>

                        <!-- Legend -->
                        <div class="flex flex-col items-start gap-1 text-xs font-semibold text-primary">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-primary rounded-xs"></span>
                                MALE (50%)
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-secondary rounded-xs"></span>
                                FEMALE (50%)
                            </div>
                        </div>

                    </div>
                </div>
                <span class="text-sm font-medium text-active mt-auto">+2% this month</span>
            </div>

            <!-- Total Academic Teachers -->
            <div class=" rounded-xl py-7 px-6 flex flex-col gap-4 justify-center shadow-boardsheet">
                <h3 class="text-sm font-mulish text-primary">Total Academic Teachers</h3>
                <div class="flex items-center justify-between">
                    <div class="space-y-2">
                        <!-- Left Big Number -->
                        <p class="text-h5 font-bold text-primary font-sitka ">1,247</p>

                    </div>
                    <!-- Chart Section -->
                    <div class="flex flex-col items-center gap-6">

                        <!-- Donut Chart -->
                        <div class="relative w-16 h-16 rounded-full donut-chart flex items-center justify-center">
                            <div class="w-12 h-12 bg-white rounded-full shadow-inner flex items-center justify-center">
                                <span class="text-base font-bold text-primary font-sitka">100</span>
                            </div>
                        </div>

                        <!-- Legend -->
                        <div class="flex flex-col items-start gap-1 text-xs font-semibold text-primary">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-primary rounded-xs"></span>
                                MALE (50%)
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-secondary rounded-xs"></span>
                                FEMALE (50%)
                            </div>
                        </div>

                    </div>
                </div>
                <span class="text-sm font-medium text-active mt-auto">+2% this month</span>
            </div>

            <!-- Total Non Academic Teachers -->
            <div class=" rounded-xl py-7 px-6 flex flex-col gap-4 justify-center shadow-boardsheet">
                <h3 class="text-sm font-mulish text-primary">Total Non Academic Teachers</h3>
                <div class="flex items-center justify-between">
                    <div class="space-y-2">
                        <!-- Left Big Number -->
                        <p class="text-h5 font-bold text-primary font-sitka">1,247</p>

                    </div>
                    <!-- Chart Section -->
                    <div class="flex flex-col items-center gap-6">

                        <!-- Donut Chart -->
                        <div class="relative w-16 h-16 rounded-full donut-chart flex items-center justify-center">
                            <div class="w-12 h-12 bg-white rounded-full shadow-inner flex items-center justify-center">
                                <span class="text-base font-bold text-primary font-sitka">100</span>
                            </div>
                        </div>

                        <!-- Legend -->
                        <div class="flex flex-col items-start gap-1 text-xs font-semibold text-primary">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-primary rounded-xs"></span>
                                MALE (50%)
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-secondary rounded-xs"></span>
                                FEMALE (50%)
                            </div>
                        </div>

                    </div>
                </div>
                <span class="text-sm font-medium text-active mt-auto">+2% this month</span>
            </div>

            <!-- Additional Stats Card -->
            <div class=" rounded-xl py-7 px-6 flex flex-col gap-4 justify-center shadow-boardsheet">
                {{-- <h3 class="text-sm font-mulish text-primary">Total Staff</h3> --}}
                <div class="flex items-center justify-between">
                    <div class="space-y-2">
                        <!-- Left Big Number -->
                        <p class="text-h5 font-bold text-primary font-sitka">1,247</p>

                    </div>
                    <!-- Chart Section -->
                    <div class="flex flex-col items-center gap-6">

                        <!-- Donut Chart -->
                        <div class="relative w-16 h-16 rounded-full donut-chart flex items-center justify-center">
                            <div class="w-12 h-12 bg-white rounded-full shadow-inner flex items-center justify-center">
                                <span class="text-base font-bold text-primary font-sitka">100</span>
                            </div>
                        </div>

                        <!-- Legend -->
                        <div class="flex flex-col items-start gap-1 text-xs font-semibold text-primary">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-primary rounded-xs"></span>
                                MALE (50%)
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-secondary rounded-xs"></span>
                                FEMALE (50%)
                            </div>
                        </div>

                    </div>
                </div>
                <span class="text-sm font-medium text-active mt-auto">+2% this month</span>
            </div>
        </div>

        <!-- Tabs -->
        <div class="mb-6">
            <nav class="flex space-x-8" aria-label="Tabs">
                <button onclick="showTab('staff')" id="tab-staff"
                    class="py-4 px-1 border-b-2 border-transparent text-primary hover:text-gray-700 hover:border-gray-300 font-medium text-sm">
                    Staff
                </button>
                <button onclick="showTab('roles')" id="tab-roles"
                    class="py-4 px-1 border-b-2 border-transparent text-primary font-medium text-sm hover:text-gray-700 hover:border-gray-300">
                    Roles
                </button>
            </nav>
        </div>

        <div id="content-staff" class="tab-content hidden">
            <!-- Filters -->
            <div class="mb-6 flex items-center space-x-4">
                <!-- Select Session Dropdown -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        Session</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Active</option>
                        <option>2024/2025</option>
                        <option>2023/2024</option>
                    </select>
                </div>

                <!-- Select Term Dropdown -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        Term</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Active</option>
                        <option>First Term</option>
                        <option>Second Term</option>
                        <option>Third Term</option>
                    </select>
                </div>
            </div>

            <!-- Search Bar -->
             <div class="flex-1 relative bg-white rounded-full shadow py-1 mb-10">
                <input type="text" placeholder="Search for classes" class="w-full pl-10 pr-4 py-2 text-sm text-search">
                <svg class="w-5 h-5 text-search absolute left-3 top-2.5" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

            <!-- Staff Role Cards Grid -->
            <div class="grid grid-cols-3 gap-6">
                @for ($i = 1; $i <= 9; $i++)
                    <div class="bg-white rounded-lg border-4 border-orange50 p-4">
                    <div class="flex items-start justify-between mb-3">
                        <span class="px-2 py-1 bg-green300 text-black font-mulish font-semibold text-xs rounded">Active</span>
                        <a href="{{ route('admin.staff.profile-next-of-kin') }}" class="text-gray-400 hover:text-primary">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                        </a>
                    </div>
                    <h3 class="text-lg font-semibold text-primary font-sitka mb-1">Emmanuel Osho</h3>
                    <p class="text-xs text-primary font-sitka mb-3">Staff ID: 001</p>

                    <div class="space-y-2 text-sm">
                        <div class="flex items-start font-sitka">
                            <span class="text-primary w-32 font-semibold">Staff Type:</span>
                            <span class="text-primary flex-1">Non Academic</span>
                        </div>
                        <div class="flex items-start font-sitka">
                            <span class="text-primary w-32 font-semibold">Phone Number: </span>
                            <span class="text-primary flex-1"> +234810 000 0000</span>
                        </div>
                        <div class="flex items-start font-sitka">
                            <span class="text-primary w-32 font-semibold">Email: </span>
                            <span class="text-primary flex-1">myemail@email.com</span>
                        </div>
                        <div class="flex items-start font-sitka">
                            <span class="text-primary w-32 font-semibold">Enrollment:</span>
                            <span class="text-primary flex-1">11/1/2025</span>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        <div id="content-roles" class="tab-content hidden">
            <!-- Filters -->
            <div class="mb-6 flex items-center space-x-4">
                <!-- Select Session Dropdown -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        Session</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Active</option>
                        <option>2024/2025</option>
                        <option>2023/2024</option>
                    </select>
                </div>

                <!-- Select Term Dropdown -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        Term</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Active</option>
                        <option>First Term</option>
                        <option>Second Term</option>
                        <option>Third Term</option>
                    </select>
                </div>
            </div>

            <!-- Search Bar -->
             <div class="flex-1 relative bg-white rounded-full shadow py-1 mb-10">
                <input type="text" placeholder="Search for classes" class="w-full pl-10 pr-4 py-2 text-sm text-search">
                <svg class="w-5 h-5 text-search absolute left-3 top-2.5" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

            <!-- Staff Role Cards Grid -->
            <div class="grid grid-cols-3 gap-6">
                @for ($i = 1; $i <= 9; $i++)
                    <div class="bg-white rounded-lg border-4 border-orange50 p-4">
                    <div class="flex items-start justify-between mb-3">
                        <div class="flex flex-col gap-1">
                            <h3 class="text-lg font-semibold text-primary font-sitka">Director</h3>
                    <p class="text-xs text-primary font-sitka mb-3">School Director</p>
                        </div>
                        <button class="text-gray-400 hover:text-primary">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                        </button>
                    </div>


                    <div class="flex items-center gap-3">
                        <button class="border border-primary rounded-md px-5 py-2 text-primary text-sm font-semibold font-mulish hover:bg-primary hover:text-white">No. of staff: 1</button>
                        <button onclick="openAssignStaffModal()" class="border border-accent rounded-md px-5 py-2 text-black font-semibold text-sm space-x-2 bg-accent hover:bg-accent-hover"><i class="fa-solid fa-plus"></i> Add Staff</button>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Assign Staff Modal -->
    <div id="assignStaffModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 py-4">
                <div>
                    <h3 class="text-lg font-semibold font-fredoka text-primary">Assign Staff</h3>
                    <p class="text-xs text-primary">Role: DIRECTOR</p>
                </div>
                <button onclick="closeAssignStaffModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                   <i class="fa-regular fa-circle-xmark"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="px-6 py-6">
                <!-- Select Staff -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Select Staff
                    </label>
                        <select
                            class="w-full outline-none text-primary text-sm">
                            <option value="">Select...</option>
                            <option value="staff1">John Doe - Teacher</option>
                            <option value="staff2">Jane Smith - Administrator</option>
                            <option value="staff3">David Brown - Director</option>
                            <option value="staff4">Sarah Johnson - Teacher</option>
                        </select>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="flex items-center justify-end gap-3 px-6 py-4">
                <button onclick="closeAssignStaffModal()"
                    class="px-6 py-2 border border-primary rounded-md text-primary text-sm font-sitka hover:bg-primary hover:text-white transition-colors font-semibold"
                    >
                    Cancel
                </button>
                <button class="px-6 py-2 rounded-lg font-semibold transition-colors text-sm border border-accent text-black font-sitka bg-accent hover:bg-accent-hover">
                    Save & Apply
                </button>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Assign Staff Modal functions
            function openAssignStaffModal() {
                const modal = document.getElementById('assignStaffModal');
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }
            }

            function closeAssignStaffModal() {
                const modal = document.getElementById('assignStaffModal');
                if (modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            }

            // Close modal when clicking outside
            document.addEventListener('click', function(event) {
                if (event.target.id === 'assignStaffModal') {
                    closeAssignStaffModal();
                }
            });

            function showTab(tabName) {
                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Remove active class from all tabs
                document.querySelectorAll('[id^="tab-"]').forEach(tab => {
                    tab.classList.remove('active-tab');
                });

                // Show selected tab content
                const contentElement = document.getElementById('content-' + tabName);
                if (contentElement) {
                    contentElement.classList.remove('hidden');
                }

                // Add active class to clicked tab
                const activeTab = document.getElementById('tab-' + tabName);
                if (activeTab) {
                    activeTab.classList.add('active-tab');
                }
            }

            // On load
            document.addEventListener('DOMContentLoaded', () => {
                showTab('staff');
            });
        </script>
    @endpush

@endsection
