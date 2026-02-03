@extends('layouts.admin', ['active' => 'lesson-plan'])

@section('title', 'Broadsheet Overview')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div class="space-y-2">
            <h2 class="text-2xl font-bold text-primary font-fredoka">Broadsheet Overview</h2>
            <p class="text-sm text-primary font-sitka">This is a random display of all classes and subjects with the respective time limit. You can choose to edit or make change</p>
        </div>
        <button class="px-4 py-2 bg-accent text-black font-sitka text-base rounded-lg hover:bg-accent-hover transition-colors flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            New Lesson Plan
        </button>
    </div>

    <!-- Filters -->
    <div class="mb-8 grid grid-cols-4 gap-4">
        <!-- School Session -->
        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School Session</label>
            <select class="w-full outline-none text-primary text-sm">
                <option>2025-2026</option>
                <option>2024-2025</option>
                <option>2023-2024</option>
            </select>
        </div>

        <!-- Term -->
        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Term</label>
            <select class="w-full outline-none text-primary text-sm">
                <option>First Term</option>
                <option>Second Term</option>
                <option>Third Term</option>
            </select>
        </div>

        <!-- Select Class -->
        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Class</label>
            <select class="w-full outline-none text-primary text-sm">
                <option>---</option>
                <option>Primary 1</option>
                <option>Primary 2</option>
                <option>Primary 3</option>
            </select>
        </div>

        <!-- Select Week -->
        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3">
            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Select Week</label>
            <select class="w-full outline-none text-primary text-sm">
                <option>---</option>
                <option>Week 1</option>
                <option>Week 2</option>
                <option>Week 3</option>
            </select>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="mb-10">
        <div class="relative bg-purple400 shadow-md rounded-full py-3 px-4">
            <input type="text" placeholder="Search for users..." class="w-full pl-10 pr-4 text-search text-sm">
            <svg class="w-5 h-5 text-search absolute left-5 top-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Lesson Plan Table -->
    <div class="bg-white rounded-2xl shadow-md p-4">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold font-sitka text-black tracking-wider">Week</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold font-sitka text-black tracking-wider">Topic</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold font-sitka text-black tracking-wider">Objective</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold font-sitka text-black tracking-wider">Resources</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold font-sitka text-black tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold font-sitka text-black tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Row 1 - Week 1 Approved -->
                    <tr class="hover:bg-primary/10">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Week 1</a>
                        </td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Introduction to Fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Textbook, Flashcards</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-500 text-white">
                                ● Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex ">
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-l-lg hover:bg-primary/40 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-r-lg hover:bg-primary/40 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 2 - Week 1 Pending -->
                    <tr class="hover:bg-primary/10">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Week 1</a>
                        </td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Introduction to Fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Textbook, Flashcards</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-sm bg-yellow-500 text-white">
                                ● Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex ">
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-l-lg hover:bg-primary/40 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-r-lg hover:bg-primary/40 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 3 - Week 1 Approved -->
                    <tr class="hover:bg-primary/10">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Week 1</a>
                        </td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Introduction to Fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Textbook, Flashcards</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-500 text-white">
                                ● Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex ">
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-l-lg hover:bg-primary/40 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-r-lg hover:bg-primary/40 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 4 - Week 2 Pending -->
                    <tr class="hover:bg-primary/10">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Week 2</a>
                        </td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Addition of Fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Board, Worksheet</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-sm bg-yellow-500 text-white">
                                ● Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex ">
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-l-lg hover:bg-primary/40 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-r-lg hover:bg-primary/40 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 5 - Week 2 Approved -->
                    <tr class="hover:bg-primary/10">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Week 2</a>
                        </td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Addition of Fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Board, Worksheet</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-sm bg-green-500 text-white">
                                ● Approved
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex ">
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-l-lg hover:bg-primary/40 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-r-lg hover:bg-primary/40 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 6 - Week 2 Pending -->
                    <tr class="hover:bg-primary/10">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Week 2</a>
                        </td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Addition of Fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Board, Worksheet</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-sm bg-yellow-500 text-white">
                                ● Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex ">
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-l-lg hover:bg-primary/40 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-r-lg hover:bg-primary/40 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Row 7 - Week 1 Pending -->
                    <tr class="hover:bg-primary/10">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="text-sm text-primary font-sitka">Week 1</a>
                        </td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Introduction to Fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Students understand basic fractions</td>
                        <td class="px-6 py-4 text-sm font-sitka text-primary">Textbook, Flashcards</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-sm bg-yellow-500 text-white">
                                ● Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex ">
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-l-lg hover:bg-primary/40 text-sm">
                                    View
                                </button>
                                <button class="px-3 py-1 border border-primary text-primary font-sitka font-semibold rounded-r-lg hover:bg-primary/40 text-sm">
                                    Edit
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
