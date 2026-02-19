@extends('layouts.teacher', ['active' => 'dashboard'])

@section('title', 'Dashboard')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-4 md:px-8 space-y-6">
        <header
            class="bg-blue700 rounded-2xl px-6 py-6 md:py-12 md:px-8 lg:px-12 flex flex-col gap-10 md:gap-15 lg:gap-9 lg:py-10 relative">
            <span class="text-xs text-white/75 font-poppins">September 4, 2023</span>
            <h2 class="text-white font-poppins text-base md:text-2xl font-semibold">Welcome back, Mrs. Ayodele Irepodun!</h2>
            <img src="/images/teacher-illustration.png" alt="" class="absolute -top-2 md:-top-4 -right-3 w-50 md:w-80">
        </header>
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
            <div class="border border-school-btn rounded-2xl p-4 md:p-6 flex flex-col gap-8">
                <div class="flex items-center justify-between gap-2">
                    <h5 class="font-fredoka text-primary text-xs">Class Assigned</h5>
                    <i class="fa-solid fa-chalkboard text-secondary"></i>
                </div>
                <div class="flex flex-col gap-6">
                    <p class="font-fredoka font-semibold text-primary text-3xl">3</p>
                    <p class="text-[10px] text-search font-fredoka">total classes</p>
                </div>
            </div>
            <div class="border border-school-btn rounded-2xl p-4 md:p-6 flex flex-col gap-8">
                <div class="flex items-center justify-between gap-2">
                    <h5 class="font-fredoka text-primary text-xs">Class Assigned</h5>
                    <i class="fa-solid fa-book text-secondary"></i>
                </div>
                <div class="flex flex-col gap-6">
                    <p class="font-fredoka font-semibold text-primary text-3xl">3</p>
                    <p class="text-[10px] text-search font-fredoka">total classes</p>
                </div>
            </div>
            <div class="border border-school-btn rounded-2xl p-4 md:p-6 flex flex-col gap-8">
                <div class="flex items-center justify-between gap-2">
                    <h5 class="font-fredoka text-primary text-xs">Attendance Today</h5>
                    <i class="fa-solid fa-user-clock text-secondary"></i>
                </div>
                <div class="flex items-center gap-4">
                    <div class="flex flex-col gap-6">
                        <p class="font-fredoka font-semibold text-primary text-3xl">20</p>
                        <p class="text-[10px] text-search font-fredoka">present</p>
                    </div>

                    <div class="flex flex-col gap-6">
                        <p class="font-fredoka font-semibold text-primary text-3xl">4</p>
                        <p class="text-[10px] text-search font-fredoka">Absent</p>
                    </div>
                </div>
            </div>
            <div class="border border-school-btn rounded-2xl p-4 md:p-6 flex flex-col gap-8">
                <div class="flex items-center justify-between gap-2">
                    <h5 class="font-fredoka text-primary text-xs">Inbox</h5>
                    <i class="fa-solid fa-inbox text-secondary"></i>
                </div>
                <div class="flex flex-col gap-6">
                    <p class="font-fredoka font-semibold text-primary text-3xl">3</p>
                    <p class="text-[10px] text-search font-fredoka">total messages</p>
                </div>
            </div>
        </section>
        <section class="flex flex-col gap-5">
            <h3 class="font-fredoka text-base md:text-lg text-primary font-semibold">My Classes</h3>
            <div class="flex flex-col gap-6 md:flex-row">
                <div class="flex flex-col gap-5 bg-white rounded-2xl p-4 md:p-7 w-full">
                    <h4 class="font-sitka text-primary text-lg font-medium">Primary 1</h4>
                    <div class="flex items-center gap-2"><i class="fa-regular fa-user"></i>
                        <p class="font-inter text-black text-xs">Students</p>
                    </div>
                    <div class="flex items-center justify-between gap-3">
                        <div class="flex items-center gap-2"><i class="fa-solid fa-share-nodes"></i>
                            <p class="font-inter text-black text-xs">34</p>
                        </div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-person-chalkboard"></i>
                            <p class="font-inter text-black text-xs">1A</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-3">
                        <p class="text-black font-mulish text-xs">Next Class:</p>
                        <p class="text-black font-mulish text-xs">Today: 10:00 AM</p>
                    </div>
                    <div class="w-full h-1.5 bg-grey800 rounded-full">
                        <p class="bg-blue800 w-4/5 h-1.5 rounded-full"></p>
                    </div>
                    <p class="text-black font-mulish text-xs">Attendance: 90%</p>
                    <div class="flex items-center gap-4 justify-end">
                        <button
                            class="px-6 py-2 rounded-lg font-sitka bg-accent text-black text-sm hover:bg-accent-hover font-semibold transition-colors">Take
                            Attendance</button>
                        <button
                            class="px-6 py-2 border border-primary text-primary text-sm rounded-lg font-sitka hover:bg-primary hover:text-white transition-colors font-semibold">View
                            Class</button>
                    </div>
                </div>

                <div class="flex flex-col gap-5 bg-white rounded-2xl p-4 md:p-7 w-full">
                    <h4 class="font-sitka text-primary text-lg font-medium">Primary 1</h4>
                    <div class="flex items-center gap-2"><i class="fa-regular fa-user"></i>
                        <p class="font-inter text-black text-xs">Students</p>
                    </div>
                    <div class="flex items-center justify-between gap-3">
                        <div class="flex items-center gap-2"><i class="fa-solid fa-share-nodes"></i>
                            <p class="font-inter text-black text-xs">34</p>
                        </div>
                        <div class="flex items-center gap-2"><i class="fa-solid fa-person-chalkboard"></i>
                            <p class="font-inter text-black text-xs">1A</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-3">
                        <p class="text-black font-mulish text-xs">Next Class:</p>
                        <p class="text-black font-mulish text-xs">Today: 10:00 AM</p>
                    </div>
                    <div class="w-full h-1.5 bg-grey800 rounded-full">
                        <p class="bg-blue800 w-4/5 h-1.5 rounded-full"></p>
                    </div>
                    <p class="text-black font-mulish text-xs">Attendance: 90%</p>
                    <div class="flex items-center gap-4 justify-end">
                        <button
                            class="px-6 py-2 rounded-lg font-sitka bg-accent text-black text-sm hover:bg-accent-hover font-semibold transition-colors">Take
                            Attendance</button>
                        <button
                            class="px-6 py-2 border border-primary text-primary text-sm rounded-lg font-sitka hover:bg-primary hover:text-white transition-colors font-semibold">View
                            Class</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex flex-col gap-5">
            <h3 class="font-fredoka text-base md:text-lg text-primary font-semibold">Today’s Schedule</h3>
            <div class="flex flex-col gap-6 md:flex-row">
                <div class="border border-school-btn rounded-2xl p-4 md:p-6 flex flex-col gap-4 w-full">
                    <p class="text-black font-mulish text-xs font-semibold">10:00 AM -11:00 AM</p>
                    <h4 class="text-primary text-2xl font-semibold font-sitka">Basic Science - Pry 1A</h4>
                    <div class="flex items-center gap-4">
                        <button
                            class="px-1 md:px-6 py-3 rounded-lg font-sitka bg-accent text-black text-sm hover:bg-accent-hover font-semibold transition-colors w-full">Take
                            Attendance</button>
                        <button
                            class="px-1 md:px-6 py-3 border border-primary text-primary text-sm rounded-lg font-sitka hover:bg-primary hover:text-white transition-colors font-semibold w-full">View
                            Class</button>
                    </div>
                </div>
                <div class="border border-school-btn rounded-2xl p-4 md:p-6 flex flex-col gap-4 w-full">
                    <p class="text-black font-mulish text-xs font-semibold">10:00 AM -11:00 AM</p>
                    <h4 class="text-primary text-2xl font-semibold font-sitka">Basic Science - Pry 1A</h4>
                    <div class="flex items-center gap-4">
                        <button
                            class="px-1 md:px-6 py-3 rounded-lg font-sitka bg-accent text-black text-sm hover:bg-accent-hover font-semibold transition-colors w-full">Take
                            Attendance</button>
                        <button
                            class="px-1 md:px-6 py-3 border border-primary text-primary text-sm rounded-lg font-sitka hover:bg-primary hover:text-white transition-colors font-semibold w-full">View
                            Class</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="flex flex-col gap-5 md:flex-row">
            <article class="bg-white border-school-btn border rounded-2xl space-y-4 p-6 w-full">
                <h2 class="font-semibold text-primary text-xl font-fredoka">Pending Tasks</h2>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex flex-col gap-1">
                            <h5 class="text-black font-sitka text-base font-semibold">Result to submit</h5>
                            <p class="text-black font-mulish text-xs">Primary 4A Mathematics</p>
                        </div>
                        <button
                            class="px-1 md:px-6 py-3 rounded-lg font-sitka bg-accent text-black text-xs hover:bg-accent-hover font-semibold transition-colors">Enter
                            Scores</button>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex flex-col gap-1">
                            <h5 class="text-black font-sitka text-base font-semibold">Result to submit</h5>
                            <p class="text-black font-mulish text-xs">Primary 4A Mathematics</p>
                        </div>
                        <button
                            class="px-1 md:px-6 py-3 rounded-lg font-sitka bg-accent text-black text-xs hover:bg-accent-hover font-semibold transition-colors">Enter
                            Scores</button>
                    </div>

                </div>

            </article>
            <!-- Recent Activity -->
            <div class="bg-white border-school-btn border rounded-2xl space-y-4 p-6 w-full">
                <h2 class="font-semibold text-primary text-xl font-fredoka">Recent Activity</h2>
                <ul class="space-y-4 text-sm text-black font-quicksand">
                    <li class="flex gap-3.5 items-center"><i class="fa-solid fa-circle-check"></i>
                        You submitted Mathematics results for Primary 4A</li>
                    <li class="flex gap-3 items-center"><i class="fa-solid fa-circle-check"></i>
                        Attendance taken for Primary 5</li>
                    <li class="flex gap-3 items-center"><i class="fa-solid fa-circle-check"></i>
                        Attendance taken for Primary 5</li>
                    <li class="flex gap-3 items-center"><i class="fa-solid fa-circle-check"></i>
                        Attendance taken for Primary 5</li>
                </ul>
            </div>
        </section>
        <div class="bg-white rounded-lg border border-school-btn p-6">
            <div class=" mb-6">
                <h3 class="text-lg font-semibold mb-1 font-fredoka text-primary">Messages</h3>


            </div>


            <!-- Messages List -->
            <div class="space-y-4">

                <!-- Messages List -->
                <div class="space-y-4">
                    <!-- Message 1 -->
                    <div class="border border-school-btn rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex-1 flex flex-col gap-4">
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center">
                                        <h4 class="font-semibold text-communicationText font-sitka">Welcome to New
                                            Academic
                                            Year</h4>
                                        <span class="ml-3 px-2 py-1 dark-btn text-xs rounded font-fredoka">Sent</span>
                                    </div>
                                    <div class="flex items-center text-xs text-primary space-x-3">
                                        <span>To: All Schools</span>
                                        <span>•</span>
                                        <span>20/06/2024</span>
                                        <span>•</span>
                                        <span>98/124 read</span>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600">The mid-term examination schedule for all grades has
                                    been published. Students can check their exam dates and timings on the student
                                    portal. Please ensure you're well-prepared.</p>

                            </div>
                            <div class="flex items-center space-x-1">
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    </svg>
                                </button>
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Message 2 -->
                    <div class="border border-school-btn rounded-lg p-4 hover:bg-gray-50 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex-1 flex flex-col gap-4">
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center">
                                        <h4 class="font-semibold text-communicationText font-sitka">Welcome to New
                                            Academic
                                            Year</h4>
                                        <span
                                            class="ml-3 px-2 py-1 bordered-btn text-xs rounded font-fredoka">Published</span>
                                    </div>
                                    <div class="flex items-center text-xs text-primary space-x-3">
                                        <span>To: All Schools</span>
                                        <span>•</span>
                                        <span>20/06/2024</span>
                                        <span>•</span>
                                        <span>98/124 read</span>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600">The mid-term examination schedule for all grades has
                                    been published. Students can check their exam dates and timings on the student
                                    portal. Please ensure you're well-prepared.</p>

                            </div>
                            <div class="flex items-center space-x-1">
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    </svg>
                                </button>
                                <button class="p-2 hover:bg-gray-100 rounded">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
