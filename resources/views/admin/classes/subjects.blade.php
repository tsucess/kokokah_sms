@extends('layouts.admin', ['active' => 'classes'])

@section('title', 'Class Subjects')
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
        <!-- Back Button -->
        <div class="mb-6">
            <div class="flex justify-between items-center gap-3">
                <a href="{{ route('admin.classes') }}"
                    class="inline-flex items-center gap-2 text-sm text-black hover:text-primary font-sitka">
                    <i class="fa-solid fa-arrow-left fa-black"></i>
                    Back | Nur
                </a>
                <div class="flex align-items-center">
                    <button
                        class="px-4 py-2 bg-white text-body3 border border-primary text-primary font-sitka rounded-l-lg font-semibold hover:bg-primary hover:text-white transition-colors">
                        Bulk Upload Student
                    </button>
                    <button
                        class="px-4 py-2 bg-accent text-body3 text-black rounded-r-lg font-semibold hover:bg-yellow-500 transition-colors flex items-center">
                        + Add New Class Member
                    </button>
                </div>
            </div>

        </div>

        <!-- Class Info Card -->
        <div class="border-4 border-orange50 rounded-2xl p-5 mb-6">
            <div class="flex flex-col gap-2">
                <div class="flex justify-between items-center space-x-4">

                    <div class="flex flex-col gap-2">
                        <h2 class="text-2xl font-bold font-sitka text-primary">Nursery 1 - t-A</h2>
                        <p class="text-sm font-sitka text-primary">First Term | 2023-2025</p>
                        <div class="flex flex-col gap-1">
                            <span class="text-primary font-sitka text-xs font-semibold">Teacher: -----</span>
                            <span class="text-primary font-sitka text-xs font-semibold">Asst. Teacher: -----</span>
                        </div>
                    </div>
                    <div>
                        <img src="/images/education_cap.png" alt="">
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-semibold font-sitka text-primary">Enrollment</p>
                        <p class="text-sm font-semibold font-sitka text-primary">40/100%</p>
                    </div>

                    <div class="w-full h-2 bg-grey800 rounded-full">
                        <div class="w-3/4 h-2 bg-secondary rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <nav class="flex space-x-8 mb-10" aria-label="Tabs">
            <button onclick="showTab('class-members')" id="tab-class-members"
                class="active-tab py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Class Members
            </button>
            <button onclick="showTab('subjects')" id="tab-subjects"
                class="py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Subjects
            </button>
            <button onclick="showTab('attendance')" id="tab-attendance"
                class="py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Attendance
            </button>
        </nav>

        {{-- Class member --}}
        <div id="content-class-members" class="tab-content hidden">
            <!-- Search Bar -->
            <div class="relative mb-8">
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Search schools..."
                    class="w-full pl-10 pr-4 py-4 text-body5 text-search bg-white shadow-sm rounded-full focus:ring-2 focus:ring-rimary focus:border-transparent">
            </div>
            <section class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                <div class="px-4 py-5 space-y-4 border-4 rounded-2xl border-orange50">
                    <div class="flex items-start justify-between gap-4">
                        <div class="w-14 h-14 rounded-full bg-primary flex justify-center items-center"><i
                                class="fa-solid fa-user-astronaut text-white"></i></div>
                        <button class="hover:text-grey400 transition-all"><i
                                class="fa-solid fa-ellipsis-vertical "></i></button>
                    </div>
                    <div class="">
                        <h4 class="text-primary text-lg font-sitka font-bold">Emmanuel Sanusi Lamido</h4>
                        <p class="text-primary text-xs font-medium">Jss 1 - 1-A</p>
                    </div>
                </div>
                <div class="px-4 py-5 space-y-4 border-4 rounded-2xl border-orange50">
                    <div class="flex items-start justify-between gap-4">
                        <div class="w-14 h-14 rounded-full bg-primary flex justify-center items-center"><i
                                class="fa-solid fa-user-astronaut text-white"></i></div>
                        <button class="hover:text-grey400 transition-all"><i
                                class="fa-solid fa-ellipsis-vertical "></i></button>
                    </div>
                    <div class="">
                        <h4 class="text-primary text-lg font-sitka font-bold">Emmanuel Sanusi Lamido</h4>
                        <p class="text-primary text-xs font-medium">Jss 1 - 1-A</p>
                    </div>
                </div>
                <div class="px-4 py-5 space-y-4 border-4 rounded-2xl border-orange50">
                    <div class="flex items-start justify-between gap-4">
                        <div class="w-14 h-14 rounded-full bg-primary flex justify-center items-center"><i
                                class="fa-solid fa-user-astronaut text-white"></i></div>
                        <button class="hover:text-grey400 transition-all"><i
                                class="fa-solid fa-ellipsis-vertical "></i></button>
                    </div>
                    <div class="">
                        <h4 class="text-primary text-lg font-sitka font-bold">Emmanuel Sanusi Lamido</h4>
                        <p class="text-primary text-xs font-medium">Jss 1 - 1-A</p>
                    </div>
                </div>
                <div class="px-4 py-5 space-y-4 border-4 rounded-2xl border-orange50">
                    <div class="flex items-start justify-between gap-4">
                        <div class="w-14 h-14 rounded-full bg-primary flex justify-center items-center"><i
                                class="fa-solid fa-user-astronaut text-white"></i></div>
                        <button class="hover:text-grey400 transition-all"><i
                                class="fa-solid fa-ellipsis-vertical "></i></button>
                    </div>
                    <div class="">
                        <h4 class="text-primary text-lg font-sitka font-bold">Emmanuel Sanusi Lamido</h4>
                        <p class="text-primary text-xs font-medium">Jss 1 - 1-A</p>
                    </div>
                </div>
                <div class="px-4 py-5 space-y-4 border-4 rounded-2xl border-orange50">
                    <div class="flex items-start justify-between gap-4">
                        <div class="w-14 h-14 rounded-full bg-primary flex justify-center items-center"><i
                                class="fa-solid fa-user-astronaut text-white"></i></div>
                        <button class="hover:text-grey400 transition-all"><i
                                class="fa-solid fa-ellipsis-vertical "></i></button>
                    </div>
                    <div class="">
                        <h4 class="text-primary text-lg font-sitka font-bold">Emmanuel Sanusi Lamido</h4>
                        <p class="text-primary text-xs font-medium">Jss 1 - 1-A</p>
                    </div>
                </div>
            </section>
            <div class="flex align-items-center justify-end">
                <button
                    class="px-4 py-2 bg-white text-body3 border border-primary text-primary font-sitka rounded-l-lg font-semibold hover:bg-primary hover:text-white transition-colors">
                    Delete all Students
                </button>
                <button
                    class="px-4 py-2 bg-accent text-body3 text-black rounded-r-lg font-semibold hover:bg-accent-hover transition-colors flex items-center">
                    Transfer all Students
                </button>
            </div>

        </div>

        <!-- Subjects Content -->
        <div id="content-subjects" class=" tab-content hidden">
            <!-- Subjects Table -->
            <div class="overflow-x-auto ">
                <table class="w-full bg-white shadow rounded-2xl">
                    <thead class=" border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left">
                                <input type="checkbox"
                                    class="rounded border-primary text-orange-400 focus:ring-orange-500">
                            </th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Name</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Subject Teacher (s)</th>
                            <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class=" divide-y divide-gray-200">
                        <!-- Subject 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox"
                                    class="rounded border-primary text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-primary font-sitka">English
                                    Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-primary font-sitka">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button onclick="openAddSubjectTeacherModal()"
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                    {{-- <button onclick="openEditSubjectModal()" class="p-2 text-gray-400 hover:text-gray-600">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                        </svg>
                                    </button> --}}
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox"
                                    class="rounded border-primary text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-primary font-sitka">English
                                    Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-primary font-sitka">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button onclick="openAddSubjectTeacherModal()"
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox"
                                    class="rounded border-primary text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-primary font-sitka">English
                                    Language (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-primary font-sitka">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button onclick="openAddSubjectTeacherModal()"
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 4 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox"
                                    class="rounded border-primary text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-primary font-sitka">English
                                    Language
                                    (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-primary font-sitka">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button onclick="openAddSubjectTeacherModal()"
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 5 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox"
                                    class="rounded border-primary text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-primary font-sitka">English
                                    Language
                                    (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-primary font-sitka">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button onclick="openAddSubjectTeacherModal()"
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 6 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox"
                                    class="rounded border-primary text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-primary font-sitka">English
                                    Language
                                    (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-primary font-sitka">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button onclick="openAddSubjectTeacherModal()"
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 7 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox"
                                    class="rounded border-primary text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-primary font-sitka">English
                                    Language
                                    (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-primary font-sitka">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button onclick="openAddSubjectTeacherModal()"
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Subject 8 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <input type="checkbox"
                                    class="rounded border-primary text-orange-400 focus:ring-orange-500">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm font-medium text-primary font-sitka">English
                                    Language
                                    (ENG)</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="text-sm text-primary font-sitka">Mark Mark</a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-2">
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-teal-50 transition-colors">
                                        Assess Students
                                    </button>
                                    <button
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Take Attendance
                                    </button>
                                    <button onclick="openAddSubjectTeacherModal()"
                                        class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                        Change Teacher
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="content-attendance" class="tab-content hidden">
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 max-w-md mb-8">
                <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Select
                    level</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>November 12th, 2025</option>
                    <option>November 12th, 2025</option>
                    <option>November 12th, 2025</option>
                    <option>November 12th, 2025</option>
                </select>
            </div>
            <div class="flex flex-col gap-5 border border-communicationBtn rounded-2xl p-5 mb-8">
                <div class="space-y-1">
                    <h4 class="text-xl font-fredoka text-primary font-semibold">Attendance Summary</h4>
                    <p class="text-primary text-xs font-sitka">Today’s attendance overview</p>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-4 pb-5 border-b border-b-gray50">
                        <div
                            class="border border-communicationBtn rounded-md bg-green500 py-2 px-4 flex justify-between items-center">
                            <div class="flex items-center gap-1"><i class="fa-solid fa-check text-green600 fa-xs"></i>
                                <span class="text-xs text-primary font-sitka">Present</span>
                            </div> <span class="text-xs text-primary font-sitka">126</span>
                        </div>
                        <div
                            class="border border-communicationBtn rounded-md bg-yellow50 py-2 px-4 flex justify-between items-center">
                            <div class="flex items-center gap-1"><i
                                    class="fa-solid fa-clipboard-check text-orange100"></i> <span
                                    class="text-xs text-primary font-sitka">Late</span></div> <span
                                class="text-xs text-primary font-sitka">30</span>
                        </div>
                        <div
                            class="border border-communicationBtn rounded-md bg-red100 py-2 px-4 flex justify-between items-center">
                            <div class="flex items-center gap-1"><i class="fa-solid fa-xmark text-red50"></i> <span
                                    class="text-xs text-primary font-sitka">Absent</span></div> <span
                                class="text-xs text-primary font-sitka">126</span>
                        </div>
                        <div
                            class="border border-communicationBtn rounded-md bg-purple500 py-2 px-4 flex justify-between items-center">
                            <div class="flex items-center gap-1"><i class="fa-solid fa-check text-blue400 fa-xs"></i>
                                <span class="text-xs text-primary font-sitka">Excused</span>
                            </div> <span class="text-xs text-primary font-sitka">126</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h5 class="text-primary text-sm font-fredoka font-semibold">Attendance Rate</h5>
                        <span class="text-primary text-sm font-fredoka font-semibold">85.6%</span>
                    </div>
                </div>

            </div>
            <div class="space-y-4 mb-8">
                <h5 class="text-gray100 text-sm font-sitka">Student in class</h5>
                <div class="flex flex-col gap-3">
                    <div
                        class="border border-communicationBtn rounded-md py-4 px-2 flex justify-between items-center gap-5">
                        <div class="flex items-center gap-2">
                            <div
                                class="text-white w-8 h-8 rounded-full flex items-center justify-center bg-primary font-sitka">
                                1</div>
                            <div>
                                <h6 class="text-gray100 text-base font-sitka font-semibold">Taofeeq Abubakar George</h6>
                                <p class="text-gray100 text-xs font-sitka font-semibold">1A</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-check"></i>Present
                            </div>
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-clipboard-check text-orange100"></i></i>Late
                            </div>
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-xmark text-red50"></i>Absent
                            </div>
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-check text-blue400"></i>Excused
                            </div>
                            <div class="flex items-center gap-1">
                                <span class='text-primary text-xs'>Time-in</span>
                                <div
                                    class="border border-communicationBtn rounded px-3 py-2 flex items-center gap-1 text-primary text-xs">
                                    <i class="fa-regular fa-clock"></i>08:00 PM
                                </div>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class='text-primary text-xs'>Time-out</span>
                                <div
                                    class="border border-communicationBtn rounded px-3 py-2 flex items-center gap-1 text-primary text-xs">
                                    <i class="fa-regular fa-clock"></i>02:00 PM
                                </div>
                            </div>
                            <div class="px-3 py-2 rounded text-xs bg-blue500 border border-communicationBtn text-white">
                                Comment</div>
                        </div>
                    </div>

                    <div
                        class="border border-communicationBtn rounded-md py-4 px-2 flex justify-between items-center gap-5">
                        <div class="flex items-center gap-2">
                            <div
                                class="text-white w-8 h-8 rounded-full flex items-center justify-center bg-primary font-sitka">
                                1</div>
                            <div>
                                <h6 class="text-gray100 text-base font-sitka font-semibold">Taofeeq Abubakar George</h6>
                                <p class="text-gray100 text-xs font-sitka font-semibold">1A</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-check"></i>Present
                            </div>
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-clipboard-check text-orange100"></i></i>Late
                            </div>
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-xmark text-red50"></i>Absent
                            </div>
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-check text-blue400"></i>Excused
                            </div>
                            <div class="flex items-center gap-1">
                                <span class='text-primary text-xs'>Time-in</span>
                                <div
                                    class="border border-communicationBtn rounded px-3 py-2 flex items-center gap-1 text-primary text-xs">
                                    <i class="fa-regular fa-clock"></i>08:00 PM
                                </div>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class='text-primary text-xs'>Time-out</span>
                                <div
                                    class="border border-communicationBtn rounded px-3 py-2 flex items-center gap-1 text-primary text-xs">
                                    <i class="fa-regular fa-clock"></i>02:00 PM
                                </div>
                            </div>
                            <div class="px-3 py-2 rounded text-xs bg-blue500 border border-communicationBtn text-white">
                                Comment</div>
                        </div>
                    </div>

                    <div
                        class="border border-communicationBtn rounded-md py-4 px-2 flex justify-between items-center gap-5">
                        <div class="flex items-center gap-2">
                            <div
                                class="text-white w-8 h-8 rounded-full flex items-center justify-center bg-primary font-sitka">
                                1</div>
                            <div>
                                <h6 class="text-gray100 text-base font-sitka font-semibold">Taofeeq Abubakar George</h6>
                                <p class="text-gray100 text-xs font-sitka font-semibold">1A</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-check"></i>Present
                            </div>
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-clipboard-check text-orange100"></i></i>Late
                            </div>
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-xmark text-red50"></i>Absent
                            </div>
                            <div
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                <i class="fa-solid fa-check text-blue400"></i>Excused
                            </div>
                            <div class="flex items-center gap-1">
                                <span class='text-primary text-xs'>Time-in</span>
                                <div
                                    class="border border-communicationBtn rounded px-3 py-2 flex items-center gap-1 text-primary text-xs">
                                    <i class="fa-regular fa-clock"></i>08:00 PM
                                </div>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class='text-primary text-xs'>Time-out</span>
                                <div
                                    class="border border-communicationBtn rounded px-3 py-2 flex items-center gap-1 text-primary text-xs">
                                    <i class="fa-regular fa-clock"></i>02:00 PM
                                </div>
                            </div>
                            <div class="px-3 py-2 rounded text-xs bg-blue500 border border-communicationBtn text-white">
                                Comment</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="space-y-5">
                <div class="space-y-1">
                    <h4 class="text-xl font-fredoka text-primary font-semibold">Attendance Records</h4>
                    <p class="text-primary text-xs font-sitka">Historical attendance dat</p>
                </div>
                <!-- Search Bar -->
                <div class="relative">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="text" placeholder="Search schools..."
                        class="w-full pl-10 pr-4 py-4 text-body5 text-search bg-white shadow-sm rounded-full focus:ring-2 focus:ring-rimary focus:border-transparent">
                </div>
                <div class="overflow-x-auto ">
                    <table class="w-full bg-white shadow rounded-2xl">
                        <thead class=" border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                    S/N</th>
                                <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                    Student Name</th>
                                <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                    Date</th>
                                <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                    Status</th>
                                <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                    Time-in</th>
                                <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                    Time-out</th>
                                <th class="px-6 py-3 text-left text-xs text-black font-semibold font-sitka tracking-wider">
                                    Comments</th>
                            </tr>
                        </thead>
                        <tbody class="divide divide-gray-200">
                            <tr class="hover:bg-green50">
                                <td class="px-6 py-3 text-xs font-sitka text-primary">01</td>
                                <td class="px-6 py-3 text-xs font-sitka text-primary flex gap-2 items-center">
                                    <img src="/images/avatar.png" alt="" class="w-8 h-8">
                                    <span>Taofeeq Abubakar George</span>
                                </td>
                                <td class="px-6 py-3 text-xs font-sitka text-primary">11-11-2025</td>
                                <td class="px-6 py-3 text-xs font-sitka text-primary">
                                    <div
                                        class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                        <i class="fa-solid fa-check text-green600"></i>Present
                                    </div>
                                </td>
                                <td class="px-6 py-3 text-xs font-sitka text-primary">08:00 AM</td>
                                <td class="px-6 py-3 text-xs font-sitka text-primary">08:00 PM</td>
                                <td class="px-6 py-3 text-xs font-sitka text-primary">No comment for him today</td>
                            </tr>
                            <tr class="hover:bg-green50">
                                <td class="px-6 py-3 text-xs font-sitka text-primary">01</td>
                                <td class="px-6 py-3 text-xs font-sitka text-primary flex gap-2 items-center">
                                    <img src="/images/avatar.png" alt="" class="w-8 h-8">
                                    <span>Taofeeq Abubakar George</span>
                                </td>
                                <td class="px-6 py-3 text-xs font-sitka text-primary">11-11-2025</td>
                                <td class="px-6 py-3 text-xs font-sitka text-primary">
                                    <div
                                        class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs">
                                        <i class="fa-solid fa-check text-green600"></i>Present
                                    </div>
                                </td>
                                <td class="px-6 py-3 text-xs font-sitka text-primary">08:00 AM</td>
                                <td class="px-6 py-3 text-xs font-sitka text-primary">08:00 PM</td>
                                <td class="px-6 py-3 text-xs font-sitka text-primary">No comment for him today</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>

    <!-- Add Subject Teacher Modal -->
    <div id="addSubjectTeacherModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center z-50 font-sitka">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold font-fredoka text-primary">Add Subject Teacher</h3>
                <button onclick="closeAddSubjectTeacherModal()"
                    class="text-gray-400 hover:text-gray-600 transition-colors">
                    <i class="fa-regular fa-circle-xmark"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="px-6 py-6 space-y-4">
                <!-- Select Teacher -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">
                        Select Teacher
                    </label>
                    <select
                        class="w-full outline-none text-primary text-sm">
                        <option value="">Select...</option>
                        <option value="teacher1">Mark John</option>
                        <option value="teacher2">Sarah Williams</option>
                        <option value="teacher3">David Brown</option>
                        <option value="teacher4">Emily Davis</option>
                    </select>
                </div>

                <!-- Selected Teacher Tag -->
                <div>
                    <label class="block text-sm font-medium text-primary font-sitka mb-2">
                        Selected Teacher
                    </label>
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="inline-flex items-center px-3 py-1.5 bg-orange-100 text-orange-600 text-sm rounded-md border border-orange-300">
                            Mark John
                            <button type="button" class="ml-2 text-orange-600 hover:text-orange-800">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200">
                <button onclick="closeAddSubjectTeacherModal()"
                    class="px-6 py-2 border border-primary text-primary font-sitka rounded-lg hover:bg-gray-50 transition-colors font-medium">
                    Cancel
                </button>
                <button class="px-6 py-2 rounded-lg font-medium transition-colors bg-accent hover:bg-accent-hover text-black">
                    Save
                </button>
            </div>
        </div>
    </div>

    <!-- Edit Subject Modal -->
    <div id="editSubjectModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50"
        style="font-family: 'Sitka', Georgia, serif;">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4">
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-semibold" style="color: #004A53;">Edit Subject</h3>
                <button onclick="closeEditSubjectModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="px-6 py-6">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-primary font-sitka mb-3">
                        Subject Level
                    </label>
                    <div class="flex flex-wrap gap-2">
                        <button
                            class="px-4 py-2 bg-orange-100 text-orange-600 rounded-lg border border-orange-300 text-sm font-medium hover:bg-orange-200 transition-colors flex items-center">
                            Jss 1
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <button
                            class="px-4 py-2 bg-orange-100 text-orange-600 rounded-lg border border-orange-300 text-sm font-medium hover:bg-orange-200 transition-colors flex items-center">
                            Jss 2
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <button
                            class="px-4 py-2 bg-orange-100 text-orange-600 rounded-lg border border-orange-300 text-sm font-medium hover:bg-orange-200 transition-colors flex items-center">
                            Jss 3
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <button
                            class="px-4 py-2 bg-gray-100 text-gray-600 rounded-lg border border-primary text-sm font-medium hover:bg-gray-200 transition-colors">
                            + Add Level
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="flex items-center justify-end gap-3 px-6 py-4 border-t border-gray-200">
                <button onclick="closeEditSubjectModal()"
                    class="px-6 py-2 border border-primary text-primary font-sitka rounded-lg hover:bg-gray-50 transition-colors font-medium"
                    style="font-family: 'Sitka', Georgia, serif;">
                    Cancel
                </button>
                <button class="px-6 py-2 rounded-lg font-medium transition-colors"
                    style="font-family: 'Sitka', Georgia, serif; background-color: #FDAF22; color: #000;">
                    Save
                </button>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
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
                showTab('class-members');
            });

            // Add Subject Teacher Modal functions
            function openAddSubjectTeacherModal() {
                const modal = document.getElementById('addSubjectTeacherModal');
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }
            }

            function closeAddSubjectTeacherModal() {
                const modal = document.getElementById('addSubjectTeacherModal');
                if (modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            }

            // Edit Subject Modal functions
            function openEditSubjectModal() {
                const modal = document.getElementById('editSubjectModal');
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }
            }

            function closeEditSubjectModal() {
                const modal = document.getElementById('editSubjectModal');
                if (modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            }

            // Close modal when clicking outside
            document.addEventListener('click', function(event) {
                if (event.target.id === 'addSubjectTeacherModal') {
                    closeAddSubjectTeacherModal();
                }
                if (event.target.id === 'editSubjectModal') {
                    closeEditSubjectModal();
                }
            });
        </script>
    @endpush

@endsection
