@extends('layouts.admin', ['active' => 'timetable'])

@section('title', 'Timetable')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8 flex flex-col gap-7">
    <div class="flex flex-col gap-1">
        <h1 class="font-fredoka text-2xl text-primary font-bold">Timetable</h1>
        <p class="text-primary text-sm font-sitka">This is a rundown display of all classes and subjects with the approved time slot. You can choose to add or makes change</p>
    </div>
    <div class="flex items-center gap-2 bg-purple400 shadow py-3 px-3 rounded-full">
        <i class="fa-solid fa-magnifying-glass text-search shrink-0"></i>
        <input type="search" name="" id="" class="text-search text-sm w-full outline-none">
    </div>
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-4">
        <div class="border-4 border-orange50 p-5 rounded-2xl flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <h3 class="text-primary text-lg font-bold font-sitka">Pry 1</h3>
            <p class="text-primary text-sm font-sitka">Primary 1</p>
            </div>

            <a href="{{ route('admin.timetable.individual-timetable') }}" class="border border-primary rounded-lg py-2 px-4 font-mulish font-bold flex justify-center items-center text-primary transition-all hover:bg-primary hover:text-white">View</a>
        </div>

        <div class="border-4 border-orange50 p-5 rounded-2xl flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <h3 class="text-primary text-lg font-bold font-sitka">Pry 1</h3>
            <p class="text-primary text-sm font-sitka">Primary 1</p>
            </div>

            <a href="{{ route('admin.timetable.individual-timetable') }}" class="border border-primary rounded-lg py-2 px-4 font-mulish font-bold flex justify-center items-center text-primary transition-all hover:bg-primary hover:text-white">View</a>
        </div>

        <div class="border-4 border-orange50 p-5 rounded-2xl flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <h3 class="text-primary text-lg font-bold font-sitka">Pry 1</h3>
            <p class="text-primary text-sm font-sitka">Primary 1</p>
            </div>

            <a href="{{ route('admin.timetable.individual-timetable') }}" class="border border-primary rounded-lg py-2 px-4 font-mulish font-bold flex justify-center items-center text-primary transition-all hover:bg-primary hover:text-white">View</a>
        </div>

        <div class="border-4 border-orange50 p-5 rounded-2xl flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <h3 class="text-primary text-lg font-bold font-sitka">Pry 1</h3>
            <p class="text-primary text-sm font-sitka">Primary 1</p>
            </div>

            <a href="{{ route('admin.timetable.individual-timetable') }}" class="border border-primary rounded-lg py-2 px-4 font-mulish font-bold flex justify-center items-center text-primary transition-all hover:bg-primary hover:text-white">View</a>
        </div>

        <div class="border-4 border-orange50 p-5 rounded-2xl flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <h3 class="text-primary text-lg font-bold font-sitka">Pry 1</h3>
            <p class="text-primary text-sm font-sitka">Primary 1</p>
            </div>

            <a href="{{ route('admin.timetable.individual-timetable') }}" class="border border-primary rounded-lg py-2 px-4 font-mulish font-bold flex justify-center items-center text-primary transition-all hover:bg-primary hover:text-white">View</a>
        </div>

        <div class="border-4 border-orange50 p-5 rounded-2xl flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <h3 class="text-primary text-lg font-bold font-sitka">Pry 1</h3>
            <p class="text-primary text-sm font-sitka">Primary 1</p>
            </div>

            <a href="{{ route('admin.timetable.individual-timetable') }}" class="border border-primary rounded-lg py-2 px-4 font-mulish font-bold flex justify-center items-center text-primary transition-all hover:bg-primary hover:text-white">View</a>
        </div>

        <div class="border-4 border-orange50 p-5 rounded-2xl flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <h3 class="text-primary text-lg font-bold font-sitka">Pry 1</h3>
            <p class="text-primary text-sm font-sitka">Primary 1</p>
            </div>

            <a href="{{ route('admin.timetable.individual-timetable') }}" class="border border-primary rounded-lg py-2 px-4 font-mulish font-bold flex justify-center items-center text-primary transition-all hover:bg-primary hover:text-white">View</a>
        </div>

        <div class="border-4 border-orange50 p-5 rounded-2xl flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <h3 class="text-primary text-lg font-bold font-sitka">Pry 1</h3>
            <p class="text-primary text-sm font-sitka">Primary 1</p>
            </div>

            <a href="{{ route('admin.timetable.individual-timetable') }}" class="border border-primary rounded-lg py-2 px-4 font-mulish font-bold flex justify-center items-center text-primary transition-all hover:bg-primary hover:text-white">View</a>
        </div>

        <div class="border-4 border-orange50 p-5 rounded-2xl flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <h3 class="text-primary text-lg font-bold font-sitka">Pry 1</h3>
            <p class="text-primary text-sm font-sitka">Primary 1</p>
            </div>

            <a href="{{ route('admin.timetable.individual-timetable') }}" class="border border-primary rounded-lg py-2 px-4 font-mulish font-bold flex justify-center items-center text-primary transition-all hover:bg-primary hover:text-white">View</a>
        </div>

        <div class="border-4 border-orange50 p-5 rounded-2xl flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <h3 class="text-primary text-lg font-bold font-sitka">Pry 1</h3>
            <p class="text-primary text-sm font-sitka">Primary 1</p>
            </div>

            <a href="{{ route('admin.timetable.individual-timetable') }}" class="border border-primary rounded-lg py-2 px-4 font-mulish font-bold flex justify-center items-center text-primary transition-all hover:bg-primary hover:text-white">View</a>
        </div>

    </section>

</div>
@endsection

