@extends('layouts.student', ['active' => 'timetable'])

@section('title', 'Timetable')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-4 md:px-8 space-y-6">
        <header
            class="bg-linear-to-r from-purple600 from-80%  to-purple700 to-95% rounded-2xl px-6 py-6 shadow-headerBox md:py-12 md:px-8 lg:px-12 flex flex-col gap-10 md:gap-15 lg:gap-9 lg:py-10 relative">
            <span class="text-xs text-white/75 font-poppins">September 4, 2023</span>
            <div>
                <h2 class="text-white font-poppins text-base md:text-2xl font-semibold">Timetable</h2>
                <span class="text-xs text-white/75 font-poppins">Primary 1 1-A</span>
            </div>

            <img src="/images/image_timetable_page.png" alt="" class="absolute right-2 md:right-20 w-35 md:w-50 top-6 md:top-2">
        </header>

        <section class="bg-white shadow-xl rounded-2xl p-2 md:p-6 overflow-x-auto">
            <table class="w-full ">
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

@endsection
