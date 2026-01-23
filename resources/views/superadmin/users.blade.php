@extends('layouts.superadmin', ['active' => 'users'])

@section('title', 'Users Management')
@section('page-title', 'Users Management')
@section('page-description', 'Manage teachers, students, and parents across all schools')

@section('header-actions')
@endsection

@section('content')
<div class="p-8 space-y-6 font-fredoka-one">

    <!-- Tabs and Add Teacher Button -->
    <div class="bg-white rounded-lg border border-gray-200">
        <div class="px-6 py-4 flex items-center justify-between">
            <nav class="flex space-x-2" aria-label="Tabs">
                <button class="px-6 py-2 text-sm font-fredoka-one text-gray-900 bg-yellow-400 rounded-lg hover:bg-yellow-500 transition-colors">
                    Teachers
                </button>
                <button class="px-6 py-2 text-sm font-fredoka-one text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                    Students
                </button>
                <button class="px-6 py-2 text-sm font-fredoka-one text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                    Parents
                </button>
            </nav>
            <button class="px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg font-fredoka-one text-sm hover:bg-yellow-500 transition-colors flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Teacher
            </button>
        </div>

        <!-- Search -->
        <div class="px-6 py-4 border-t border-gray-200">
            <div class="relative w-full max-w-xs">
                <input type="text" placeholder="Search teachers..." class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-transparent font-fredoka text-sm">
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <!-- Teachers Table -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-fredoka-one text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-fredoka-one text-gray-500 uppercase tracking-wider">School Name</th>
                        <th class="px-6 py-3 text-left text-xs font-fredoka-one text-gray-500 uppercase tracking-wider">Class</th>
                        <th class="px-6 py-3 text-left text-xs font-fredoka-one text-gray-500 uppercase tracking-wider">Contact</th>
                        <th class="px-6 py-3 text-left text-xs font-fredoka-one text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-fredoka-one text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 font-fredoka">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div>
                                <p class="text-sm font-fredoka font-medium text-teal-600">Emmanuel Wilson</p>
                                <p class="text-xs font-fredoka text-gray-500">Joined 15/08/2023</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-fredoka text-gray-900">Greenwood High</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-fredoka text-gray-900">Primary 1-1A</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-fredoka">
                                <p class="text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    emmanuel.w@greenwood.edu
                                </p>
                                <p class="text-gray-500 flex items-center mt-1">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    +234 810 234 5678
                                </p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-4 py-1.5 text-xs font-fredoka font-medium bg-black text-white rounded-full">Active</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <button class="text-gray-600 hover:text-gray-900">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div>
                                <p class="text-sm font-fredoka font-medium text-teal-600">Sarah Thompson</p>
                                <p class="text-xs font-fredoka text-gray-500">Joined 12/06/2023</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-fredoka text-gray-900">Oakmont International</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-fredoka text-gray-900">Primary 1-1A</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-fredoka">
                                <p class="text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    sarah.t@oakmont.edu
                                </p>
                                <p class="text-gray-500 flex items-center mt-1">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    +234 810 345 6789
                                </p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-4 py-1.5 text-xs font-fredoka font-medium bg-white border border-gray-300 text-gray-700 rounded-full">Inactive</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <button class="text-gray-600 hover:text-gray-900">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div>
                                <p class="text-sm font-fredoka font-medium text-teal-600">Michael Chen</p>
                                <p class="text-xs font-fredoka text-gray-500">Joined 20/09/2023</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-fredoka text-gray-900">Riverside</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-fredoka text-gray-900">Primary 1-1A</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-fredoka">
                                <p class="text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    michael.c@riverside.edu
                                </p>
                                <p class="text-gray-500 flex items-center mt-1">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    +234 810 456 7890
                                </p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-4 py-1.5 text-xs font-fredoka font-medium bg-black text-white rounded-full">Active</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <button class="text-gray-600 hover:text-gray-900">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div>
                                <p class="text-sm font-fredoka font-medium text-teal-600">David Rodriguez</p>
                                <p class="text-xs font-fredoka text-gray-500">Joined 05/07/2023</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-fredoka text-gray-900">Greenwood Comprehensive</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-fredoka text-gray-900">Primary 1-1A</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-fredoka">
                                <p class="text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    david.r@greenwood.edu
                                </p>
                                <p class="text-gray-500 flex items-center mt-1">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    +234 810 567 8901
                                </p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-4 py-1.5 text-xs font-fredoka font-medium bg-white border border-gray-300 text-gray-700 rounded-full">Inactive</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <button class="text-gray-600 hover:text-gray-900">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div>
                                <p class="text-sm font-fredoka font-medium text-teal-600">Emily Johnson</p>
                                <p class="text-xs font-fredoka text-gray-500">Joined 18/04/2023</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-fredoka text-gray-900">Riverside</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-fredoka text-gray-900">Primary 1-1A</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-fredoka">
                                <p class="text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    emily.j@riverside.edu
                                </p>
                                <p class="text-gray-500 flex items-center mt-1">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    +234 810 678 9012
                                </p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-4 py-1.5 text-xs font-fredoka font-medium bg-black text-white rounded-full">Active</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <button class="text-gray-600 hover:text-gray-900">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div>
                                <p class="text-sm font-fredoka font-medium text-teal-600">Jessica Williams</p>
                                <p class="text-xs font-fredoka text-gray-500">Joined 22/03/2023</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-fredoka text-gray-900">Oakmont International</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <p class="text-sm font-fredoka text-gray-900">Primary 1-1A</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-fredoka">
                                <p class="text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    jessica.w@oakmont.edu
                                </p>
                                <p class="text-gray-500 flex items-center mt-1">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    +234 810 789 0123
                                </p>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-4 py-1.5 text-xs font-fredoka font-medium bg-white border border-gray-300 text-gray-700 rounded-full">Inactive</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <button class="text-gray-600 hover:text-gray-900">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


