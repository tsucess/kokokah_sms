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
            max-width: 700px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
        }
    </style>
    <div class="p-4 md:px-8 space-y-6">
        <header class="flex flex-col gap-3 md:flex-row justify-between md:items-end">
            <div class="flex items-center gap-3">
                <img src="/images/view result.jpg" alt="" class="w-30 h-30 rounded-full">
                <div class="flex flex-col gap-1">
                    <h2 class="text-primary font-fredoka text-xl font-semibold">Samuel Musa Ali</h2>
                    <p class="text-primary font-mulish text-sm">Class: Primary 1</p>
                    <p class="text-primary font-mulish text-sm">Arm: 1-A</p>

                </div>
            </div>
            <button class="px-4 py-4 rounded bg-primary text-white font-medium font-roboto">Class Position 4th</button>
        </header>
        <section class="flex flex-col gap-3 md:flex-row">
            <div class="border border-gray400 rounded px-3 py-3 flex items-center gap-2 max-w-70 w-full bg-white">
                <div class="flex items-center justify-center bg-gray500 rounded-sm p-3"><i
                        class="fa-regular fa-calendar"></i></div>
                <p class="text-gray600 font-semibold text-sm font-roboto">Present: 89 days</p>
            </div>
            <div class="border border-gray400 rounded px-3 py-3 flex items-center gap-2 max-w-70 w-full bg-white">
                <div class="flex items-center justify-center bg-gray500 rounded-sm p-3"><i
                        class="fa-regular fa-calendar"></i></div>
                <p class="text-gray600 font-semibold text-sm font-roboto">Absent: 3 days</p>
            </div>
            <div class="border border-gray400 rounded px-3 py-3 flex items-center gap-2 max-w-70 w-full bg-white">
                <div class="flex items-center justify-center bg-gray500 rounded-sm p-3"><i
                        class="fa-regular fa-calendar"></i></div>
                <p class="text-gray600 font-semibold text-sm font-roboto">Late: 3 times</p>
            </div>
        </section>

        <!-- Broadsheet Table -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">
                                Subject</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-black font-sitka tracking-wider">CA
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
                                Remark</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">English Language</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                25
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">9</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">86/100</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Excellent</td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">English Language</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                25
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">9</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">86/100</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Excellent</td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">English Language</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                25
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">9</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">86/100</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Excellent</td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">English Language</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                25
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">9</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">86/100</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Excellent</td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">English Language</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">
                                25
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">9</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">86/100</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red50 font-sitka">Excellent</td>
                        </tr>

                        <!-- Row 6 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">English Language</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">
                                25
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">9</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">52</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">86/100</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">A</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-primary font-sitka">Excellent</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <section class="max-w-3xl flex flex-col gap-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 ">
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-20">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Teacher
                        Comment</label>
                    <textarea placeholder="You performed excellently term this term. Keep improving your weaker subjects."
                        class="w-full outline-none text-primary text-sm resize-none h-full"></textarea>
                </div>

                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-20">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Principal
                        Comment</label>
                    <textarea placeholder="You performed excellently term this term. Keep improving your weaker subjects."
                        class="w-full outline-none text-primary text-sm resize-none h-full"></textarea>
                </div>

                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-20">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Status</label>
                    <textarea placeholder="Promoted" class="w-full outline-none text-primary text-sm resize-none h-full"></textarea>
                </div>

                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-20">
                    <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Next
                        Section Begins</label>
                    <input type="date" placeholder="22/2/2025"
                        class="w-full outline-none text-primary text-sm resize-none h-full" />
                </div>
            </div>
            <button onclick="openEditResultModal()"
                class="px-6 py-2 rounded-lg bg-accent text-black font-semibold  hover:bg-accent-hover font-sitka text-xs transition-colors self-end">Edit</button>
        </section>
    </div>

    <!-- Edit result -->
    <div id="editResultModal" class="modal-overlay bg-primary/50 mb-0">
        <div class="modal-content p-8">

            <div class="flex justify-end items-center mb-6">
                <button onclick="closeInputResultModal()" class="text-gray-700 hover:text-gray-900 transition-colors">
                    <i class="fa-regular fa-circle-xmark fa-lg"></i>
                </button>
            </div>



            <form id="messageForm" class="space-y-6 flex flex-col">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 ">
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-20">
                        <label
                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Teacher
                            Comment</label>
                        <textarea placeholder="You performed excellently term this term. Keep improving your weaker subjects."
                            class="w-full outline-none text-primary text-sm resize-none h-full"></textarea>
                    </div>

                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-20">
                        <label
                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Principal
                            Comment</label>
                        <textarea placeholder="You performed excellently term this term. Keep improving your weaker subjects."
                            class="w-full outline-none text-primary text-sm resize-none h-full"></textarea>
                    </div>

                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-20">
                        <label
                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Status</label>
                        <textarea placeholder="Promoted" class="w-full outline-none text-primary text-sm resize-none h-full"></textarea>
                    </div>

                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 h-20">
                        <label
                            class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Next
                            Section Begins</label>
                        <input type="date" placeholder="22/2/2025"
                            class="w-full outline-none text-primary text-sm resize-none h-full" />
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-end gap-3 py-4">
                    <button type="button" onclick="closeEditResultModal()"
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
            function openEditResultModal() {
                document.getElementById('editResultModal').classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeEditResultModal() {
                document.getElementById('editResultModal').classList.remove('active');
                document.body.style.overflow = 'auto';
            }

            // Close modal when clicking outside
            document.addEventListener('click', function(event) {
                const editResultModal = document.getElementById('editResultModal');

                if (event.target === editResultModal) {
                    closeEditResultModal();
                }
            });
        </script>
    @endpush

@endsection
