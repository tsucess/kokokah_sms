@extends('layouts.teacher', ['active' => 'result'])

@section('title', 'Result')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <style>
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
    <div class="p-4 md:px-8 space-y-6">
        <!-- Header -->
        <div class="flex flex-col gap-1 mb-7">
            <h2 class="text-2xl font-bold text-primary font-fredoka">Results Input</h2>
            <p class="text-sm text-primary font-sitka">Historical attendance dat</p>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <!-- Total Students -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                <div class="h-2 bg-blue300"></div>
                <div class="px-4 py-6">
                    <p class="text-3xl font-sitka text-primary font-semibold">290</p>
                    <p class="text-sm font-semibold text-primary font-mulish">Total Students</p>

                </div>
            </div>

            <!-- Average Subject Score -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                <div class="h-2 bg-green400"></div>
                <div class="px-4 py-6">
                    <p class="text-3xl font-sitka text-primary font-semibold">72%</p>
                    <p class="text-sm font-semibold text-primary font-mulish">Average Subject Score</p>
                </div>
            </div>

            <!-- Top Performing Student -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                <div class="h-2 bg-red50"></div>
                <div class="px-4 py-6">
                    <p class="text-3xl font-sitka text-primary font-semibold">SS2A (83%)</p>
                    <p class="text-sm font-semibold text-primary font-mulish">Top Performing Student</p>
                </div>
            </div>

            <!-- Lowest Performing Student -->
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
                <div class="h-2 bg-red50"></div>
                <div class="px-4 py-6">
                    <p class="text-3xl font-sitka text-primary font-semibold">Mathematics</p>
                    <p class="text-sm font-semibold text-primary font-mulish">Lowest Performing Student</p>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="mb-10 flex flex-col gap-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
                <!-- Select Class -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        Class</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Category</option>
                        <option>Stationery</option>
                        <option>Furniture</option>
                        <option>Electronics</option>
                    </select>
                </div>

                <!-- Select Subject -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        Subject</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Category</option>
                        <option>Stationery</option>
                        <option>Furniture</option>
                        <option>Electronics</option>
                    </select>
                </div>

                <!-- Select Session -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        Session</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Category</option>
                        <option>Stationery</option>
                        <option>Furniture</option>
                        <option>Electronics</option>
                    </select>
                </div>

                <!-- Select Term -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        Term</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Status</option>
                        <option>In Stock</option>
                        <option>Low Stock</option>
                        <option>Out of Stock</option>
                    </select>
                </div>
            </div>

            <div class="relative">
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Search schools..."
                    class="w-full pl-10 pr-4 py-4 text-body5 text-search bg-white shadow-sm rounded-full focus:ring-2 focus:ring-rimary focus:border-transparent">
            </div>
        </div>

        <div class="bg-white shadow-md rounded-2xl">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class=" border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                Student ID</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                Student</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">CA
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">CA2
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Test
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Exam
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Total
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">Grade
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                Observation</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @for ($i = 1; $i <= 7; $i++)
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">93001</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">John
                                    Adewale</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">18
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">78
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">78
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">85
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">200
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">A</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-primary font-sitka">
                                    Excellent</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="relative">
                                        <button
                                            class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100 more-btn">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>

                                        {{-- dropdown menu --}}
                                        <div
                                            class="action-menu opacity-0 scale-95 pointer-events-none absolute right-2 top-8 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-50 transition-all duration-200 ease-out">
                                            <button onclick="openInputResultModal()"
                                                class=" w-full text-left px-4 py-2 text-body5 font-sitka text-primary flex items-center gap-2 hover:bg-gray-100">
                                                <i class="fa-solid fa-pen text-primary"></i>Input results</button>
                                            <button
                                                class="w-full text-left px-4 py-2 text-body5 font-sitka flex items-center gap-2 text-primary hover:bg-red-50">
                                                <i class="fa-regular fa-eye"></i>View student result</button>
                                            <button
                                                class="w-full text-left px-4 py-2 text-body5 font-sitka flex items-center gap-2 text-primary hover:bg-red-50">
                                                <i class="fa-regular fa-user"></i>Date Student</button>
                                        </div>
                                    </div>
                                </td>


                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="bg-white px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                <div class="flex items-center">
                    <button class="px-3 py-1 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 text-xs">
                        Previous
                    </button>
                </div>
                <div class="text-xs text-gray-600">
                    Page 1 of 12
                </div>
                <div class="flex items-center">
                    <button class="px-3 py-1 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 text-xs">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Input result -->
    <div id="inputResultModal" class="modal-overlay bg-primary/50 mb-0">
        <div class="modal-content p-8">

            <div class="flex justify-end items-center mb-6">
                <button onclick="closeInputResultModal()" class="text-gray-700 hover:text-gray-900 transition-colors">
                    <i class="fa-regular fa-circle-xmark fa-lg"></i>
                </button>
            </div>



            <form id="messageForm" class="space-y-6 flex flex-col">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Continuous Assessment (CA1)</label>
                        <input type="text" placeholder="18" class="w-full outline-none text-primary text-sm">

                    </div>

                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Continuous Assessment (CA2)</label>
                        <input type="text" placeholder="18" class="w-full outline-none text-primary text-sm">

                    </div>

                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Test Mark</label>
                        <input type="text" placeholder="18" class="w-full outline-none text-primary text-sm">

                    </div>

                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Examination Mark</label>
                        <input type="text" placeholder="18" class="w-full outline-none text-primary text-sm">

                    </div>

                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Total Mark</label>
                        <input type="text" placeholder="18" class="w-full outline-none text-primary text-sm">

                    </div>

                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                        <label
                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Grade</label>
                        <input type="text" placeholder="A" class="w-full outline-none text-primary text-sm">

                    </div>

                </div>

                <!-- Message -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-16">
                    <label
                        class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Observation</label>
                    <textarea placeholder="Excellent"
                        class="w-full outline-none text-primary text-sm resize-none h-full"></textarea>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-end gap-3 py-4">
                    <button type="button" onclick="closeInputResultModal()"
                        class="px-6 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors font-medium">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-6 py-2 rounded-lg bg-accent text-black hover:bg-accent-hover font-medium transition-colors">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const buttons = document.querySelectorAll(".more-btn");

                function closeAllMenus() {
                    document.querySelectorAll(".action-menu").forEach(menu => {
                        menu.classList.add("opacity-0", "scale-95", "pointer-events-none");
                        menu.classList.remove("opacity-100", "scale-100");
                    });
                }

                buttons.forEach(btn => {
                    const menu = btn.closest(".relative").querySelector(".action-menu");

                    btn.addEventListener("click", (e) => {
                        e.stopPropagation();

                        const isOpen = menu.classList.contains("opacity-100");
                        closeAllMenus();

                        if (!isOpen) {
                            menu.classList.remove("opacity-0", "scale-95", "pointer-events-none");
                            menu.classList.add("opacity-100", "scale-100");
                        }
                    });
                });

                document.addEventListener("click", closeAllMenus);
            });

            function openInputResultModal() {
                document.getElementById('inputResultModal').classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeInputResultModal() {
                document.getElementById('inputResultModal').classList.remove('active');
                document.body.style.overflow = 'auto';
            }

            // Close modal when clicking outside
            document.addEventListener('click', function(event) {
                const inputResultModal = document.getElementById('inputResultModal');

                if (event.target === inputResultModal) {
                    closeInputResultModal();
                }
            });
        </script>
    @endpush

@endsection
