@extends('layouts.teacher', ['active' => 'attendance'])

@section('title', 'Attendance')
@section('page-title', 'Welcome to Kokokah')

@section('content')

<div class="p-4 md:px-8 space-y-6">
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
@endsection
