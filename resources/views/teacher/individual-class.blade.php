@extends('layouts.teacher', ['active' => 'class'])

@section('title', 'Class')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <style>
        .active-tab {
            border-bottom-color: #FDAF22;
            color: #FDAF22;
        }
    </style>

    <div class="p-4 md:px-8 space-y-6">
        <!-- Back Button -->
        <div class="mb-6">
            <div class="flex justify-between items-center gap-3">
                <a href="{{ route('teacher.class') }}"
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
                        class="px-4 py-2 bg-accent text-body3 border border-accent text-black rounded-r-lg font-semibold hover:bg-accent-hover transition-colors flex items-center">
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
            <button onclick="showTab('results')" id="tab-results"
                class="py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Results
            </button>
            <button onclick="showTab('starboard')" id="tab-starboard"
                class="py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Star Board
            </button>
            <button onclick="showTab('attendance')" id="tab-attendance"
                class="py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Attendance
            </button>
            <button onclick="showTab('timetable')" id="tab-timetable"
                class="py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Timetable
            </button>
        </nav>
        {{-- Class member --}}
        <div id="content-class-members" class="tab-content hidden space-y-7 ">
            <div class="flex items-center justify-end">
                <button
                    class="px-4 py-2 bg-white text-body3 border border-primary text-primary font-sitka rounded-l-lg font-semibold hover:bg-primary hover:text-white transition-colors">
                    Download PDF Class
                </button>
                <button
                    class="px-4 py-2 bg-accent text-body3 border border-accent text-black rounded-r-lg font-semibold hover:bg-accent-hover transition-colors flex items-center">
                    Download Excel Class
                </button>
            </div>
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
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @for ($i = 1; $i <= 7; $i++)
                    <div class="px-4 py-5 space-y-4 border-4 rounded-2xl border-orange50">
                        <div class="flex items-start justify-between gap-4 relative">
                            <div class="w-14 h-14 rounded-full bg-primary flex justify-center items-center"><i
                                    class="fa-solid fa-user-astronaut text-white"></i></div>
                            <button class="hover:text-grey400 transition-all more-btn"><i
                                    class="fa-solid fa-ellipsis-vertical "></i></button>
                            {{-- dropdown menu --}}
                            <div
                                class="action-menu opacity-0 scale-95 pointer-events-none absolute right-2 top-8 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-50 transition-all duration-200 ease-out">
                                <button onclick="openInputResultModal()"
                                    class=" w-full text-left px-4 py-2 text-body5 font-sitka text-primary flex items-center gap-2 hover:bg-gray-100">
                                    <i class="fa-regular fa-eye text-primary"></i>View Profile</button>
                                <a href="{{ route('teacher.student-result') }}"
                                    class="w-full text-left px-4 py-2 text-body5 font-sitka flex items-center gap-2 text-primary hover:bg-red-50">
                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>Transfer result</a>
                            </div>
                        </div>
                        <div class="">
                            <h4 class="text-primary text-lg font-sitka font-bold">Emmanuel Sanusi Lamido</h4>
                            <p class="text-primary text-xs font-medium">Jss 1 - 1-A</p>
                        </div>
                    </div>
                @endfor
            </section>



        </div>

        {{-- Subject --}}
        <div id="content-subjects" class="tab-content hidden">
            <!-- Subjects Table -->
            <div class="overflow-x-auto ">
                <table class="w-full bg-white shadow rounded-2xl">
                    <thead class=" border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left">
                                <input type="checkbox" class="rounded border-primary text-orange-400 focus:ring-orange-500">
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
                        @for ($i = 1; $i <= 7; $i++)
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
                                            class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                            Assess Students
                                        </button>
                                        <button
                                            class="px-4 py-2 border border-primary text-primary font-sitka rounded-lg text-sm font-medium hover:bg-primary hover:text-white transition-colors">
                                            Take Attendance
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                    </tbody>

                </table>
            </div>
        </div>

        {{-- Results --}}
        <div id="content-results" class="tab-content hidden"> result</div>

        {{-- Star board --}}
        <div id="content-starboard" class="tab-content hidden"> star board</div>

        {{-- Attendance --}}
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
                                class="border border-communicationBtn rounded px-1.5 py-2 flex items-center gap-1 text-primary text-xs bg-red100">
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

        {{-- Timetable --}}
        <div id="content-timetable" class="tab-content hidden space-y-7">
            <div class="flex items-center justify-end">
                <button
                    class="px-4 py-2 bg-white text-body3 border border-primary text-primary font-sitka rounded-l-lg font-semibold hover:bg-primary hover:text-white transition-colors">
                    Download PDF Timetable
                </button>
                <button onclick="openPeriodModal()"
                    class="px-4 py-2 bg-accent text-body3 border border-accent text-black rounded-r-lg font-semibold hover:bg-accent-hover transition-colors flex items-center">
                    Add Period
                </button>
            </div>

            <section class="bg-white shadow-xl rounded-2xl p-6">
            <table class="w-full">
                <thead class="border-b border-gray-200">

                    <tr>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Time</th>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Monday</th>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Tuesday</th>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Wednessday</th>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Thursday</th>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Friday</th>
                        <th class="font-sitka font-semibold text-sm text-black px-6 py-4">Saturday</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @for ($i = 1; $i <= 7; $i++)
                    <tr class="hover:bg-gray-50">
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">9:oo - 10:oo</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">English Language</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Mathematics</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4 "><span
                                class="border border-grey300 px-2 py-2">Free Slot</span></td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Basic Studies</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">English Language</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Social Studies</td>
                        @endfor
                    </tr>

                </tbody>
            </table>
        </section>
        </div>
    </div>

    <!-- Add New Badge Modal -->
    <div id="periodModal" class="fixed inset-0 bg-primary/50 hidden items-center justify-center py-10 z-50">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-xl mx-4 max-h-[90vh] overflow-y-scroll">
            <!-- Modal Header -->
            <div class="flex items-start justify-between px-6 py-4">
                <div class="flex flex-col gap-1">
                    <div class="bg-green300 text-black300 px-2 py-1 rounded font-mulish text-xs">Primary 1 A</div>
                    <h2 class="text-primary text-2xl font-fredoka font-semibold">Period</h2>
                </div>

                <button onclick="closePeriodModal()" class="text-gray-700 hover:text-gray-900 transition-colors">
                    <i class="fa-regular fa-circle-xmark fa-lg"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <div class="px-6 py-6 space-y-4 flex flex-col gap-3 ">
                <div class="flex items-center gap-2 justify-between pb-8 border-b border-b-primary/30">
                    <label for="" class="text-sm font-sitka flex items-center gap-2 text-primary"><input
                            type="checkbox" name="" id="">Monday</label>
                    <label for="" class="text-sm font-sitka flex items-center gap-2 text-primary"><input
                            type="checkbox" name="" id="">Tuesday</label>
                    <label for="" class="text-sm font-sitka flex items-center gap-2 text-primary"><input
                            type="checkbox" name="" id="">Wednessday</label>
                    <label for="" class="text-sm font-sitka flex items-center gap-2 text-primary"><input
                            type="checkbox" name="" id="">Thurday</label>
                    <label for="" class="text-sm font-sitka flex items-center gap-2 text-primary"><input
                            type="checkbox" name="" id="">Friday</label>
                    <label for="" class="text-sm font-sitka flex items-center gap-2 text-primary"><input
                            type="checkbox" name="" id="">Saturday</label>
                </div>
                <!-- Subject -->
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label
                        class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Select Subject</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Math</option>
                        <option>English</option>
                        <option>Science</option>
                        <option>Arts</option>
                        <option>Biology</option>
                    </select>
                </div>

                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
                    <label
                        class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Select Teacher</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option>Math</option>
                        <option>English</option>
                        <option>Science</option>
                        <option>Arts</option>
                        <option>Biology</option>
                    </select>
                </div>

                <label for="" class="text-sm font-sitka flex items-center gap-2 text-primary pb-8 border-b border-b-primary/40"><input
                            type="checkbox" name="" id="">This is break period</label>

            </div>

            <!-- Modal Footer -->
            <div class="flex flex-col gap-7 px-6 py-4">
                <div class="flex flex-col gap-1">
                    <h4 class="text-primary text-lg font-fredoka font-bold">Time slot</h4>
                    <p class="text-primary text-sm font-sitka">Select what time this schedule will hold and if it is a double period</p>
                </div>
                <div class="flex items-center gap-5">
                    <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-accent/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-accent"></div>
                        </label>
                        <p class="text-primary text-sm font-sitka">Double period class</p>
                </div>

            </div>
            <div class="px-6 py-4 flex items-center gap-10">
                <div class="flex flex-col gap-2">
                    <h5 class="text-primary text-xl font-fredoka font-bold">Start Time</h5>
                    <div class="flex items-center">
                        <input type="text" placeholder="8:00" class="text-black300 font-bold text-sm rounded-l border border-primary/30 py-3 text-center w-20">
                        <input type="text" placeholder="AM" class="bg-blue200 text-white font-bold text-sm text-center py-3 w-12 border border-blue200">
                        <input type="text" placeholder="PM" class=" text-black300 font-bold text-sm text-center py-3 w-12 border border-primary/30 rounded-r">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h5 class="text-primary text-xl font-fredoka font-bold">Stop Time</h5>
                    <div class="flex items-center">
                        <input type="text" placeholder="8:00" class="text-black300 font-bold text-sm rounded-l border border-primary/30 py-3 text-center w-20">
                        <input type="text" placeholder="AM" class="bg-blue200 text-white font-bold text-sm text-center py-3 w-12 border border-blue200">
                        <input type="text" placeholder="PM" class=" text-black300 font-bold text-sm text-center py-3 w-12 border border-primary/30 rounded-r">
                    </div>
                </div>

            </div>
            <div class="flex items-center justify-end gap-3 px-6 py-4 pt-8">
                <button onclick="closeBadgeModal()"
                    class="px-10 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors font-medium">
                    Cancel
                </button>
                <button
                    class="px-10 py-2 rounded-lg font-medium bg-accent text-black hover:bg-accent-hover transition-colors">
                    Add Period
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

            // Modal functions
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
                    closeBadgeModal();
                }
            });
        </script>
    @endpush
@endsection
