@extends('layouts.admin', ['active' => 'timetable'])

@section('title', 'Timetable')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <style>
        .active-tab {
            background-color: #fdaf22;
            color: #004A53;
            border-color: #fdaf22;
        }

        .active-tab:hover {
            background-color: #feca6c;
        }
    </style>
    <div class="p-8 flex flex-col gap-6">
        <div class="flex flex-col gap-4">
            <a href="{{ route('admin.timetable') }}" class="flex items-center gap-2 text-black font-sitka"><i
                    class="fa-solid fa-arrow-left"></i> <span> <span class="text-secondary">Timetable</span> | Primary
                    1</span></a>
            <nav class="flex">
                <button
                    class="active-tab px-6 py-2 text-sm font-sitka border border-primary text-primary bg-white rounded-l-lg hover:bg-gray-200 transition-colors">
                    Primary 1A
                </button>
                <button
                    class="px-6 py-2 text-sm font-sitka border border-primary text-primary bg-white hover:bg-gray-200 transition-colors">
                    Primary 1B
                </button>
                <button
                    class="px-6 py-2 text-sm font-sitka border border-primary text-primary bg-white hover:bg-gray-200 transition-colors">
                    Primary 1C
                </button>
                <button
                    class="px-6 py-2 text-sm font-sitka border border-primary text-primary bg-white hover:bg-gray-200 transition-colors">
                    Primary 1D
                </button>
                <button
                    class="px-6 py-2 text-sm font-sitka rounded-r-lg border border-primary text-primary bg-white hover:bg-gray-200 transition-colors">
                    Primary 1E
                </button>
            </nav>
        </div>
        <div class="flex items-center gap-40">
            <div class="flex items-center gap-3 w-full">
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School
                        Session</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option value="">2016/2017</option>
                        <option value="">2018/2019</option>
                    </select>
                </div>
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School
                        Term</label>
                    <select class="w-full outline-none text-primary text-sm">
                        <option value="">First Term</option>
                        <option value="">Second Term</option>
                    </select>
                </div>
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                    <label
                        class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select
                        Subject</label>
                    <input type="search" class="w-full outline-none text-primary text-sm">

                </div>
            </div>
            <button onclick="openPeriodModal()"
                class="text-black font-mulish font-semibold rounded bg-accent py-2 px-6 text-base shrink-0">Add
                Period</button>
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
                    <tr class="hover:bg-gray-50">
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">9:oo - 10:oo</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">English Language</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Mathematics</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4 "><span
                                class="border border-grey300 px-2 py-2">Free Slot</span></td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Basic Studies</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">English Language</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Social Studies</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">9:oo - 10:oo</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">English Language</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Mathematics</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4 "><span
                                class="border border-grey300 px-2 py-2">Free Slot</span></td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Basic Studies</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">English Language</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Social Studies</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">9:oo - 10:oo</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">English Language</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Mathematics</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4 "><span
                                class="border border-grey300 px-2 py-2">Free Slot</span></td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Basic Studies</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">English Language</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Social Studies</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">9:oo - 10:oo</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">English Language</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Mathematics</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4 "><span
                                class="border border-grey300 px-2 py-2">Free Slot</span></td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Basic Studies</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">English Language</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Social Studies</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">9:oo - 10:oo</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">English Language</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Mathematics</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4 "><span
                                class="border border-grey300 px-2 py-2">Free Slot</span></td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Basic Studies</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">English Language</td>
                        <td class="font-sitka text-primary text-sm font-medium px-6 py-4">Social Studies</td>
                    </tr>

                </tbody>
            </table>
        </section>

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
                <div class="border border-primary rounded-xl relative px-4 py-3 mt-3">
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

                <div class="border border-primary rounded-xl relative px-4 py-3 mt-3">
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
