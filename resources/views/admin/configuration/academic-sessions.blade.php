@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'Academic Sessions')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <style>
        .active-tab {
            border-bottom-color: #FDAF22;
            color: #FDAF22;
        }

        .hidden {
            display: none;
        }

        /* Modal Styles */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 50;
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            max-width: 600px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
        }
    </style>
    <div class="p-8">
        <!-- Breadcrumb -->
        <div class="mb-6">
            <a href="{{ route('admin.configuration') }}"
                class="inline-flex items-center text-sm text-orange50 hover:text-orange100">
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
            <h2 class="text-2xl font-bold text-primary font-fredoka">Current Academic Session</h2>
            <p class="text-primary font-sitka text-sm mb-8">2025/2026 Session</p>

            <!-- Tabs -->
            <div class=" mb-6">
                <nav class="flex space-x-8 mb-6" aria-label="Tabs">
                    <button onclick="showTab('academic-sessions')" id="tab-academic-sessions"
                        class="active-tab py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                        Academic Sessions
                    </button>
                    <button onclick="showTab('term')" id="tab-term"
                        class="py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                        Term Definitions
                    </button>
                </nav>
            </div>

            <div class="tab-content hidden" id="content-academic-sessions">
                <!-- Create Button -->
                <div class="mb-6 flex justify-end">
                    <button onclick="openCreateAcademicSessionModal()"
                        class="px-6 py-2 bg-accent text-black font-semibold rounded-lg hover:bg-accent-hover transition-colors flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Create Academic Session
                    </button>
                </div>

                <!-- Sessions Table -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class=" border-b border-gray-200">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                        Term</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                        Timeframe</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class=" divide-y divide-gray-200">
                                <!-- First Term -->
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="#" class="text-sm font-medium text-primary font-sitka">First Term</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025 -
                                        10/07/2025
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">---/---</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-2">
                                            <button
                                                class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                                Settings
                                            </button>
                                            <button
                                                class="px-4 py-2 bg-primary  text-white rounded-lg text-sm font-medium hover:bg-primary2  font-sitka transition-colors">
                                                Set as current
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Second Term -->
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="#" class="text-sm font-medium text-primary font-sitka">Second
                                            Term</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025 -
                                        10/07/2025
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-500 text-white">
                                            ● Current Term
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-2">
                                            <button
                                                class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                                Settings
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Third Term -->
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="#" class="text-sm font-medium text-primary font-sitka">Third Term</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">10/07/2025 -
                                        10/07/2025
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">---/---</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-2">
                                            <button
                                                class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
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

            <div class="tab-content hidden" id="content-term">
                <!-- Create Button -->
                <div class="mb-6 flex justify-end">
                    <button onclick="openTermModal()"
                        class="px-6 py-2 bg-accent text-black font-semibold rounded-lg hover:bg-accent-hover transition-colors flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Add Term
                    </button>
                </div>

                <!-- Sessions Table -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class=" border-b border-gray-200">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                        S/N</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                        Term</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                        Term Definition</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                        Default</th>
                                        <th
                                        class="px-6 py-3 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class=" divide-y divide-gray-200">
                                <!-- First Term -->
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                        1
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="#" class="text-sm font-medium text-primary font-sitka">First
                                            Term</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">1
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">System Default
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                            <button onclick="openTermModal()"
                                                class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                                Edit Term Name
                                            </button>
                                    </td>
                                </tr>

                                <!-- Second Term -->
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                        1
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="#" class="text-sm font-medium text-primary font-sitka">First
                                            Term</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">1
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">System Default
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                            <button onclick="openTermModal()"
                                                class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                                Edit Term Name
                                            </button>
                                    </td>
                                </tr>

                                <!-- Third Term -->
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                        1
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="#" class="text-sm font-medium text-primary font-sitka">First
                                            Term</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">1
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">System Default
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                            <button onclick="openTermModal()"
                                                class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                                Edit Term Name
                                            </button>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                        1
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="#" class="text-sm font-medium text-primary font-sitka">First
                                            Term</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">1
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">System Default
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                            <button onclick="openTermModal()"
                                                class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                                Edit Term Name
                                            </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Create Academic Session Modal -->
    <div id="createAcademicSessionModal"
        class="fixed inset-0 bg-primary/50 hidden items-center justify-center z-50"
        style="font-family: 'Sitka', Georgia, serif;">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl mx-4 max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 py-4">
                <h3 class="text-lg font-semibold font-fredoka text-primary">Create Academic Session</h3>
                <button onclick="closeCreateAcademicSessionModal()"
                    class="text-gray-700 hover:text-gray-900 transition-colors">
                <i class="fa-regular fa-circle-xmark fa-lg"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="px-6 py-6 space-y-6">
                <!-- Select Session -->

                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Select Session
                    </label>
                    <select
                        class="w-full outline-none text-primary text-sm">
                        <option value="">Select...</option>
                        <option value="2024-2025">Session 2024/2025</option>
                        <option value="2025-2026">Session 2025/2026</option>
                        <option value="2026-2027">Session 2026/2027</option>
                        <option value="2027-2028">Session 2027/2028</option>
                    </select>
                </div>

                <!-- First Term Section -->
                <div class="border border-gray-200 rounded-lg p-4">
                    <h4 class="text-base font-semibold text-primary font-sitka mb-4">First Term</h4>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                Term Start Date
                            </label>
                            <input type="date"
                                class="w-full outline-none text-primary text-sm">
                        </div>
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                Term End Date
                            </label>
                            <input type="date"
                                class="w-full outline-none text-primary text-sm">
                        </div>
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                Next Term Start Date
                            </label>
                            <input type="date"
                                class="w-full outline-none text-primary text-sm">
                        </div>
                    </div>
                </div>

                <!-- Second Term Section -->
                <div class="border border-gray-200 rounded-lg p-4">
                    <h4 class="text-base font-semibold text-primary font-sitka mb-4">Second Term</h4>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                Term Start Date
                            </label>
                            <input type="date"
                                class="w-full outline-none text-primary text-sm">
                        </div>
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                Term End Date
                            </label>
                            <input type="date"
                                class="w-full outline-none text-primary text-sm">
                        </div>
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                Next Term Start Date
                            </label>
                            <input type="date"
                                class="w-full outline-none text-primary text-sm">
                        </div>
                    </div>
                </div>

                <!-- Third Term Section -->
                <div class="border border-gray-200 rounded-lg p-4">
                    <h4 class="text-base font-semibold text-primary font-sitka mb-4">Third Term</h4>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                Term Start Date
                            </label>
                            <input type="date"
                                class="w-full outline-none text-primary text-sm">
                        </div>
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                Term End Date
                            </label>
                            <input type="date"
                                class="w-full outline-none text-primary text-sm">
                        </div>
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                            <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                                Next Term Start Date
                            </label>
                            <input type="date"
                                class="w-full outline-none text-primary text-sm">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="flex items-center gap-3 px-6 py-4">
                <button class="px-10 py-2 rounded-lg font-medium bg-accent text-black hover:bg-accent-hover transition-colors">
                    Create Session
                </button>
            </div>
        </div>
    </div>

    {{-- add/edit term --}}
    <div id="termModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center py-10 z-50" >
    <div class="bg-white rounded-lg shadow-xl w-full max-w-xl mx-4 max-h-[90vh] overflow-y-scroll">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4">
                <h3 class="text-lg font-semibold font-fredoka text-primary" >Add Term</h3>

            <button onclick="closeTermModal()" class="text-gray-700 hover:text-gray-900 transition-colors">
                <i class="fa-regular fa-circle-xmark fa-lg"></i>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="px-6 py-6 space-y-4 flex flex-col gap-3">
            <!-- Term ID and Term Name Row -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3" >Term Name</label>
                    <input type="text" placeholder="Enter Term name" class="w-full outline-none text-primary text-sm" >
                </div>

            <!-- Category -->
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3" >Term Order</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>Academic</option>
                    <option>Non-Academic</option>
                    <option>Sports</option>
                    <option>Arts</option>
                    <option>Leadership</option>
                </select>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="flex items-center justify-end gap-3 px-6 py-4">
            <button onclick="closeTermModal()" class="px-10 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors font-medium" >
                Cancel
            </button>
            <button class="px-10 py-2 rounded-lg font-medium bg-accent text-black hover:bg-accent-hover transition-colors" >
                Save
            </button>
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
                showTab('academic-sessions');
            });

             function openTermModal() {
        const modal = document.getElementById('termModal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    function closeTermModal() {
        const modal = document.getElementById('termModal');
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    }

    // Close modal when clicking outside
    document.addEventListener('click', function(event) {
        if (event.target.id === 'termModal') {
            closeTermModal();
        }
    });
        </script>
    @endpush

@endsection
