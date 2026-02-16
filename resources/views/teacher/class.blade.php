@extends('layouts.teacher', ['active' => 'class'])

@section('title', 'Class')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-4 md:px-8 space-y-6">
        <header
            class="bg-blue700 rounded-2xl px-6 py-6 md:py-12 md:px-8 lg:px-12 flex flex-col gap-10 md:gap-15 lg:gap-9 lg:py-10 relative">
            <h2 class="text-white font-poppins text-base md:text-xl font-semibold">My Class</h2>
            <span class="text-xs text-white/75 font-poppins">You teach $ classes this term.</span>
            <img src="/images/teacher-illustration.png" alt=""
                class="absolute -top-2 md:top-5 -right-3 md:right-5 w-50 md:w-80">
        </header>

        <div class="flex items-center gap-3">
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-40">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                    Session</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>Math</option>
                    <option>English</option>
                    <option>Science</option>
                    <option>Arts</option>
                    <option>Biology</option>
                </select>
            </div>
            <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-40">
                <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                    Term</label>
                <select class="w-full outline-none text-primary text-sm">
                    <option>Math</option>
                    <option>English</option>
                    <option>Science</option>
                    <option>Arts</option>
                    <option>Biology</option>
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



    <div class="flex flex-col gap-5 bg-white rounded-2xl p-4 md:p-7">
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

@endsection
