@extends('layouts.student', ['active' => 'dashboard'])

@section('title', 'Dashboard')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-4 md:px-8 space-y-6">
        <header
            class="bg-linear-to-r from-purple600 from-80%  to-purple700 to-95% rounded-2xl px-6 py-6 shadow-headerBox md:py-12 md:px-8 lg:px-12 flex flex-col gap-10 md:gap-15 lg:gap-9 lg:py-10 relative">
            <span class="text-xs text-white/75 font-poppins">September 4, 2023</span>
            <div>
                <h2 class="text-white font-poppins text-base md:text-2xl font-semibold">Welcome back, John!</h2>
                <span class="text-xs text-white/75 font-poppins">Always stay updated in your student portal</span>
            </div>

            <img src="/images/cap.png" alt="" class="absolute right-50 w-40 top-4">
            <img src="/images/College Student.png" alt="" class="absolute bottom-0 right-20 w-45">
            <img src="/images/backpack.png" alt="" class="absolute right-6 top-10 w-26">
        </header>
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
            <div class="border border-school-btn rounded-2xl p-4 md:p-5.5 flex flex-col gap-4 bg-white">
                <div class="flex items-center justify-between gap-2">
                    <h4 class="text-sm font-fredoka text-green350">Fees Paid</h4>
                    <i class="fa-solid fa-receipt text-green350 fa-shake"></i>
                </div>
                <h3 class="text-green350 text-xl font-fredoka font-semibold">₦920,000</h3>
                <span class="text-[10px] text-search font-fredoka">this term</span>
            </div>
            <div class="border border-school-btn rounded-2xl p-4 md:p-5.5 flex flex-col gap-4 bg-white">
                <div class="flex items-center justify-between gap-2">
                    <h4 class="text-sm font-fredoka text-red50">Outstanding Fees</h4>
                    <i class="fa-solid fa-file-invoice text-red50 fa-beat"></i>
                </div>
                <h3 class="text-red50 text-xl font-fredoka font-semibold">₦120,000</h3>
                <span class="text-[10px] text-search font-fredoka">this term</span>
                <button
                    class="border border-red50 rounded py-1.5 font-medium text-red50 text-sm font-fredoka hover:bg-red50 hover:text-white transition-all mt-auto">Pay
                    Now</button>
            </div>
            <div class="border border-school-btn rounded-2xl p-4 md:p-5.5 flex flex-col gap-4 bg-white">
                <div class="flex items-center justify-between gap-2">
                    <h4 class="text-sm font-fredoka text-blue900">Score Activity</h4>
                    <i class="fa-brands fa-screenpal text-blue900 fa-fade"></i>
                </div>
                <h3 class="text-blue900 text-xl font-fredoka font-semibold">92%</h3>
                <span class="text-[10px] text-search font-fredoka">this term</span>
                <button
                    class="border border-blue900 rounded py-1.5 font-medium text-blue900 text-sm font-fredoka hover:bg-blue900 hover:text-white transition-all mt-auto">View
                    Result</button>
            </div>
            <div class="border border-school-btn rounded-2xl p-4 md:p-5.5 flex flex-col gap-4 bg-white">
                <div class="flex items-center justify-between gap-2">
                    <h4 class="text-sm font-fredoka text-orange150">Attendance</h4>
                    <i class="fa-solid fa-user-check  text-orange150 fa-beat-fade"></i>
                </div>
                <h3 class="text-orange150 text-xl font-fredoka font-semibold">92%</h3>
                <span class="text-[10px] text-search font-fredoka">this term</span>
                <button
                    class="border border-orange150 rounded py-1.5 font-medium text-orange150 text-sm font-fredoka hover:bg-orange150 hover:text-white transition-all mt-auto">View
                    Attendance</button>
            </div>
            <div class="border border-school-btn rounded-2xl p-4 md:p-5.5 flex flex-col gap-4 bg-white">
                <div class="flex items-center justify-between gap-2">
                    <h4 class="text-sm font-fredoka text-orange150">Inbox</h4>
                    <i class="fa-solid fa-inbox text-orange150 fa-beat"></i>
                </div>
                <h3 class="text-orange150 text-xl font-fredoka font-semibold">3</h3>
                <span class="text-[10px] text-search font-fredoka">this term</span>
                <button
                    class="border border-orange150 rounded py-1.5 font-medium text-orange150 text-sm font-fredoka hover:bg-orange150 hover:text-white transition-all mt-auto">View
                    Messages</button>
            </div>

        </section>
        <section class="flex flex-col gap-5">
            <h3 class="font-fredoka text-base text-primary font-semibold">Today’s Timetable</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="flex flex-col gap-2 border border-school-btn rounded-2xl p-4 md:p-5.5 bg-white">
                    <span class="text-xs font-mulish text-black font-semibold">10:00 AM -11:00 AM</span>
                    <h4 class="text-base font-sitka text-primary font-semibold">Mathematics</h4>
                    <p class="text-sm font-sitka font-medium text-gray650">Mr. Daniel</p>
                </div>
                <div class="flex flex-col gap-2 border border-school-btn rounded-2xl p-4 md:p-5.5 bg-white">
                    <span class="text-xs font-mulish text-black font-semibold">10:00 AM -11:00 AM</span>
                    <h4 class="text-base font-sitka text-primary font-semibold">Mathematics</h4>
                    <p class="text-sm font-sitka font-medium text-gray650">Mr. Daniel</p>
                </div>
                <div class="flex flex-col gap-2 border border-school-btn rounded-2xl p-4 md:p-5.5 bg-white">
                    <span class="text-xs font-mulish text-black font-semibold">10:00 AM -11:00 AM</span>
                    <h4 class="text-base font-sitka text-primary font-semibold">Mathematics</h4>
                    <p class="text-sm font-sitka font-medium text-gray650">Mr. Daniel</p>
                </div>
                <div class="flex flex-col gap-2 border border-school-btn rounded-2xl p-4 md:p-5.5 bg-white">
                    <span class="text-xs font-mulish text-black font-semibold">10:00 AM -11:00 AM</span>
                    <h4 class="text-base font-sitka text-primary font-semibold">Mathematics</h4>
                    <p class="text-sm font-sitka font-medium text-gray650">Mr. Daniel</p>
                </div>
            </div>
        </section>

        <!-- Feature Usage Statistics -->
        <div class="bg-white rounded-lg border border-school-btn p-4 md:p-6">
            <div class="mb-6">
                <h2 class="text-lg font-semibold text-primary font-fredoka">Grade by Subject</h2>
                <p class="text-sm text-primary font-fredoka">Loren Ipums Loren IpumsLoren IpumsLoren IpumsLoren I</p>
            </div>
            <div class="space-y-6">
                <!-- English Language -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-body3 font-sitka font-semibold text-black">English Language</span>
                        <span class="text-body3 font-sitka font-semibold text-black">93%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                        <div class="bg-indigo-600 h-1.5 rounded-full" style="width: 93%"></div>
                    </div>
                </div>

                <!-- Mathematics -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-body3 font-sitka font-semibold text-black">Mathematics</span>
                        <span class="text-body3 font-sitka font-semibold text-black">92%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                        <div class="bg-indigo-600 h-1.5 rounded-full" style="width: 92%"></div>
                    </div>
                </div>

                <!-- Computer Science -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-body3 font-sitka font-semibold text-black">Computer Science</span>
                        <span class="text-body3 font-sitka font-semibold text-black">92%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                        <div class="bg-indigo-600 h-1.5 rounded-full" style="width: 92%"></div>
                    </div>
                </div>

                <!-- Further Mathematics -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-body-3 font-sitka font-semibold text-black">Further Mathematics</span>
                        <span class="text-body3 font-sitka font-semibold text-black">94%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                        <div class="bg-indigo-600 h-1.5 rounded-full" style="width: 94%"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Message section --}}
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
