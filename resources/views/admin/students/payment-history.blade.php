@extends('layouts.admin', ['active' => 'students'])

@section('title', 'Student Management')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-teal-900 mb-1">Student Management</h2>
        <p class="text-sm text-gray-600">Manage student information and enrollment</p>
    </div>

    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('admin.students') }}" class="flex items-center text-gray-600 hover:text-gray-800">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Student / <span class="text-teal-600 ml-1">Emmanuel Stroud Laniolu</span>
        </a>
    </div>

    <!-- Student Info Card -->
    <div class="bg-white rounded-lg border-2 border-orange-400 p-6 mb-6">
        <div class="flex items-start justify-between">
            <div class="flex items-start">
                <!-- Student Avatar -->
                <div class="mr-6">
                    <div class="w-20 h-20 bg-teal-800 rounded-full flex items-center justify-center">
                        <span class="text-white text-2xl font-bold">SM</span>
                    </div>
                    <div class="mt-2 text-center">
                        <svg class="w-6 h-6 text-gray-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                        </svg>
                    </div>
                </div>

                <!-- Student Details -->
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-teal-900 mb-2">Samuel Musa Ali</h3>
                    <p class="text-sm text-gray-600 mb-1">NU - 1 • Inner Secondary School 1 - A</p>

                    <!-- Details Grid -->
                    <div class="grid grid-cols-4 gap-x-8 gap-y-3 mt-4">
                        <div>
                            <p class="text-xs text-gray-500 mb-1">First Name</p>
                            <p class="text-sm font-medium text-teal-600">Samuel</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Last Name</p>
                            <p class="text-sm font-medium text-gray-900">Ali</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Other Name</p>
                            <p class="text-sm font-medium text-gray-900">Musa</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Gender</p>
                            <p class="text-sm font-medium text-gray-900">Male</p>
                        </div>

                        <div>
                            <p class="text-xs text-gray-500 mb-1">Country</p>
                            <p class="text-sm font-medium text-teal-600">Nigeria</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">State of Origin</p>
                            <p class="text-sm font-medium text-gray-900">Sokoto</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">LGA</p>
                            <p class="text-sm font-medium text-gray-900">Gwadabawa</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Weight (kg)</p>
                            <p class="text-sm font-medium text-gray-900">70kg</p>
                        </div>

                        <div>
                            <p class="text-xs text-gray-500 mb-1">Phone Number</p>
                            <p class="text-sm font-medium text-gray-900">+234810 000 0000</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Email Address</p>
                            <p class="text-sm font-medium text-teal-600">myemail@gmail.com</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Home Address</p>
                            <p class="text-sm font-medium text-gray-900">Lagos, Nigeria</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Blood Group</p>
                            <p class="text-sm font-medium text-gray-900">O -</p>
                        </div>

                        <div>
                            <p class="text-xs text-gray-500 mb-1">Date of Birth</p>
                            <p class="text-sm font-medium text-gray-900">08-07-2010</p>
                        </div>
                        <div></div>
                        <div></div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Height (cm)</p>
                            <p class="text-sm font-medium text-gray-900">100cm</p>
                        </div>

                        <div></div>
                        <div></div>
                        <div></div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Genotype</p>
                            <p class="text-sm font-medium text-gray-900">AA</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Active Toggle and Edit Button -->
            <div class="flex items-center space-x-4">
                <div class="flex items-center">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-green-500 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all"></div>
                        <span class="ml-3 text-sm font-medium text-gray-900">Active</span>
                    </label>
                </div>
                <button class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit
                </button>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="mb-6 border-b border-gray-200">
        <nav class="flex space-x-8">
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Prevs
            </a>
            <a href="#" class="text-orange-400 py-4 px-1 border-b-2 border-orange-400 font-medium text-sm">
                Payment History
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Documents
            </a>
        </nav>
    </div>

    <!-- Session and Term Filters -->
    <div class="mb-6 flex items-center space-x-4">
        <div class="flex-1">
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Select Session</option>
                <option selected>2025-2026</option>
                <option>2024-2025</option>
            </select>
        </div>
        <div class="flex-1">
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                <option>Select Term</option>
                <option selected>First Term</option>
                <option>Second Term</option>
                <option>Third Term</option>
            </select>
        </div>
    </div>

    <!-- Payment History Table -->
    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Method</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Receipt</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @for($i = 1; $i <= 10; $i++)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">08 Nov</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">PTA Fee</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-teal-600">₦5,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Card</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-green-600">Successful</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 text-sm">
                                Download
                            </button>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

