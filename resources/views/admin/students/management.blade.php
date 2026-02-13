@extends('layouts.admin', ['active' => 'students'])

@section('title', 'Student Management')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-8">
        <!-- Header -->
        <div class="mb-10 flex items-start justify-between gap-6">
            <div class="space-y-2">
                <h2 class="text-xl font-bold text-primary font-fredoka">Student Management</h2>
                <p class="text-sm text-primary font-sitka">Manage student information and enrollment</p>
            </div>
            <div class="flex items-center justify-end space-x-3 ">
                <select name="" id=""
                    class="px-4 py-2 border border-communicationBtn text-sm font-semibold text-primary group rounded-lg hover:bg-communicationBtn transition-colors gap-1 flex items-center">
                    <option value="">Export PDF</option>
                </select>

                <div class="flex items-center ">
                    <button
                        class="px-4 py-2 border font-semibold group border-primary text-primary gap-1 text-sm rounded-l-lg hover:bg-primary hover:text-white transition-colors flex items-center">
                        Bulk Upload Student
                    </button>
                    <button
                        class="px-4 py-2 bg-accent font-semibold gap-1 border border-accent text-black text-sm rounded-r-lg hover:border-accent-hover hover:bg-accent-hover transition-colors flex items-center">
                        <i class="fa-solid fa-plus text-black"></i>
                        Add New Student
                    </button>
                </div>
            </div>
        </div>

        <!-- Statistics Card -->
        <div class="grid grid-cols-3 mb-10">
            <div
                class="border-t-8 border-t-primary rounded-xl py-7 px-6 flex flex-col gap-2 justify-center shadow-boardsheet">
                <div class="flex items-center justify-between">
                    <div class="space-y-2">
                        <i class="fa-solid fa-user-graduate"></i>
                        <!-- Left Big Number -->
                        <p class="text-h5 font-bold text-primary font-sitka">1,247</p>
                        <h3 class="text-sm font-mulish text-primary">Total Students</h3>
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
                <span class="text-sm font-medium text-blue600">+2% this month</span>
            </div>
        </div>

        <!-- Filters -->
        <div class="mb-8 grid grid-cols-5 gap-4">
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Session</label>
                <select
                    class="w-full outline-none text-primary text-sm">
                    <option>School Session</option>
                    <option selected>2025-2026</option>
                </select>
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Term</label>
                <select
                    class="w-full outline-none text-primary text-sm">
                    <option>Term</option>
                    <option selected>First Term</option>
                    <option>Second Term</option>
                    <option>Third Term</option>
                </select>
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Class Session</label>
                <select
                    class="w-full outline-none text-primary text-sm">
                    <option>Select class section</option>
                    <option selected>1</option>
                </select>
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Class Level</label>
                <select
                    class="w-full outline-none text-primary text-sm">
                    <option>Select class level</option>
                    <option selected>1</option>
                </select>
            </div>

            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Status</label>
                <select
                    class="w-full outline-none text-primary text-sm">
                    <option>Select class level</option>
                    <option selected>1</option>
                </select>
            </div>
        </div>

        <!-- Search -->
    <div class="relative mb-8">
            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" placeholder="Search for class..."
                class="w-full pl-10 pr-4 py-4 text-body5 text-search bg-white shadow-sm rounded-full focus:ring-2 focus:ring-rimary focus:border-transparent">
        </div>

        <!-- Student Cards Grid -->
        <div class="grid grid-cols-3 gap-6 mb-6">
            @for ($i = 1; $i <= 8; $i++)
                <div class="bg-white rounded-lg border-4 border-orange50 p-4">
                    <div class="flex items-start justify-between mb-3">
                        <span class="px-2 py-1 bg-green300 text-black font-mulish font-semibold text-xs rounded">Active</span>
                        <button onclick="openLinkParentModal()" class="text-gray-400 hover:text-primary">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                        </button>
                    </div>
                    <h3 class="text-lg font-semibold text-primary font-sitka mb-1">Emmanuel Sanusi Lamido</h3>
                    <p class="text-xs text-primary font-sitka mb-3">Jss 1 - A</p>

                    <div class="space-y-2 text-sm">
                        <div class="flex items-start font-sitka">
                            <span class="text-primary w-32 font-semibold">Parent/Guardian:</span>
                            <span class="text-primary flex-1">Rose Akinola</span>
                        </div>
                        <div class="flex items-start font-sitka">
                            <span class="text-primary w-32 font-semibold">Fees: </span>
                            <span class="text-primary flex-1">Paid</span>
                        </div>
                        <div class="flex items-start font-sitka">
                            <span class="text-primary w-32 font-semibold">Attendance:</span>
                            <span class="text-primary flex-1">92%</span>
                        </div>
                        <div class="flex items-start font-sitka">
                            <span class="text-primary w-32 font-semibold">Enrollment:</span>
                            <span class="text-primary flex-1">11/1/2025</span>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between">
            <button class="px-4 py-1 border border-grey600 text-black200 text-xs rounded-lg hover:bg-gray-50 transition-colors">
                Previous
            </button>
            <div class="flex items-center space-x-2">
                <span class="text-xs text-grey700 font-sitka">Page 1 of 12</span>
            </div>
            <button class="px-4 py-1 border border-grey600 text-black200 text-xs rounded-lg hover:bg-gray-50 transition-colors">
                Next
            </button>
        </div>
    </div>

    <!-- Link Parent Modal -->
    <div id="linkParentModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center z-50"
        style="font-family: 'Sitka', Georgia, serif;">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-3xl mx-4 max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 py-4">
                <div>
                    <h3 class="text-lg font-semibold text-primary font-fredoka">Link Parent</h3>
                    <p class="text-sm text-primary font-fredoka mt-1">Parents Linked to Samuel Musa Ali</p>
                </div>
                <button onclick="closeLinkParentModal()" class="text-gray-400 hover:text-primary transition-colors">
                    <i class="fa-regular fa-circle-xmark"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="px-6 py-6 space-y-6">
                <!-- Linked Parents Display -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Parent 1 -->
                    <div class="bg-gray200 rounded-lg p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 border-2 border-black rounded-full flex items-center justify-center">
                                <i class="fa-regular fa-user text-black fa-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-primary font-fredoka">Bose Oloude</p>
                                <p class="text-xs text-primary font-fredoka">boseoloude@gmail.com</p>
                            </div>
                        </div>
                        <button class="text-red50 hover:text-red-400 transition-all">
                            <i class="fa-solid fa-circle-xmark fa-lg"></i>
                        </button>
                    </div>

                    <!-- Parent 2 -->
                    <div class="bg-gray200 rounded-lg p-4 flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 border-2 border-black rounded-full flex items-center justify-center">
                                <i class="fa-regular fa-user text-black fa-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-primary font-fredoka">Bose Oloude</p>
                                <p class="text-xs text-primary font-fredoka">boseoloude@gmail.com</p>
                            </div>
                        </div>
                        <button class="text-red50 hover:text-red-400 transition-all">
                            <i class="fa-solid fa-circle-xmark fa-lg"></i>
                        </button>
                    </div>
                </div>

                <!-- Form Section -->
                <div>
                    <h4 class="text-base font-semibold text-primary font-fredoka mb-4">Samuel Musa Ali</h4>
                    <p class="text-sm text-primary font-fredoka mb-4">Select a parent and the relationship this parent has with this
                        child.</p>

                    <div class="grid grid-cols-5 gap-4">
                        <!-- Select Parent -->
                        <div class="border-[1.5px] col-span-2 border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                Select Parent
                            </label>
                            <select
                                class="w-full outline-none text-primary text-sm">
                                <option value="">Select...</option>
                                <option value="parent1">John Doe</option>
                                <option value="parent2">Jane Smith</option>
                                <option value="parent3">Michael Brown</option>
                            </select>
                        </div>

                        <!-- Select Relationship -->
                        <div class="border-[1.5px] col-span-2 border-primary rounded-xl relative px-4 py-4 mt-3 w-full">
                            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                Select Relationship
                            </label>
                                <select
                                     class="w-full outline-none text-primary text-sm">
                                    <option value="">Select...</option>
                                    <option value="father">Father</option>
                                    <option value="mother">Mother</option>
                                    <option value="guardian">Guardian</option>
                                    <option value="uncle">Uncle</option>
                                    <option value="aunt">Aunt</option>
                                </select>

                        </div>
                        <button class="px-4 py-2 self-end rounded-lg font-medium bg-accent text-black font-sitka hover:bg-accent-hover transition-colors whitespace-nowrap">
                                    + Add to list
                                </button>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="flex items-center justify-end gap-3 px-6 py-4">
                <button onclick="closeLinkParentModal()"
                    class="px-6 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors font-medium"
                   >
                    Cancel
                </button>
                <button class="px-6 py-2 rounded-lg font-medium transition-colors font-sitka text-black bg-accent hover:bg-accent-hover">
                    Save Parent
                </button>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Link Parent Modal functions
            function openLinkParentModal() {
                const modal = document.getElementById('linkParentModal');
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }
            }

            function closeLinkParentModal() {
                const modal = document.getElementById('linkParentModal');
                if (modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            }

            // Close modal when clicking outside
            document.addEventListener('click', function(event) {
                if (event.target.id === 'linkParentModal') {
                    closeLinkParentModal();
                }
            });
        </script>
    @endpush

@endsection
