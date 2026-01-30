@extends('layouts.admin', ['active' => 'students'])

@section('title', 'Student Profile - Documents')
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
        <a href="{{ route('admin.students.management') }}" class="flex items-center text-gray-700 hover:text-gray-900">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Student
        </a>
        <span class="text-gray-400 mx-2">/</span>
        <span class="text-gray-600">Emmanuel Sanusi Lamido</span>
    </div>

    <!-- Student Info Card -->
    <div class="bg-white rounded-lg border-2 border-orange-400 p-6 mb-6">
        <div class="flex items-start justify-between">
            <div class="flex items-start space-x-4">
                <div class="w-20 h-20 bg-teal-900 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                    SM
                </div>
                <div>
                    <h3 class="text-xl font-bold text-teal-900 mb-1">Samuel Musa Ali</h3>
                    <p class="text-sm text-gray-600 mb-2">Jss 1 - Senior Secondary School 1-A</p>
                    <button class="text-teal-600 hover:text-teal-800 text-sm flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" checked class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
                    <span class="ml-3 text-sm font-medium text-gray-700">Active</span>
                </label>
                <button class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Edit
                </button>
            </div>
        </div>

        <!-- Student Details Grid -->
        <div class="grid grid-cols-5 gap-6 mt-6">
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">First Name</p>
                <p class="text-sm text-teal-600">Samuel</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">Last Name</p>
                <p class="text-sm text-gray-900">Ali</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">Other Name</p>
                <p class="text-sm text-teal-600">Musa</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">Gender</p>
                <p class="text-sm text-gray-900">Male</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">Date of Birth</p>
                <p class="text-sm text-gray-900">08/02/2010</p>
            </div>
        </div>

        <div class="grid grid-cols-5 gap-6 mt-4">
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">Country</p>
                <p class="text-sm text-gray-900">Nigeria</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">State of Origin</p>
                <p class="text-sm text-gray-900">Sokoto</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">LGA</p>
                <p class="text-sm text-gray-900">Gwadabawa</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">Weight (kg)</p>
                <p class="text-sm text-gray-900">70kg</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">Height (cm)</p>
                <p class="text-sm text-gray-900">1000cm</p>
            </div>
        </div>

        <div class="grid grid-cols-5 gap-6 mt-4">
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">Phone Number</p>
                <p class="text-sm text-gray-900">+234810 000 0000</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">Email Address</p>
                <p class="text-sm text-teal-600">myemail@gmail.com</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">Home Address</p>
                <p class="text-sm text-teal-600">Lagos, Nigeria</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">Blood Group</p>
                <p class="text-sm text-gray-900">O -</p>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 mb-1">Genotype</p>
                <p class="text-sm text-gray-900">AA</p>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="mb-6 border-b border-gray-200">
        <nav class="flex space-x-8">
            <a href="{{ route('admin.students.profile-fees') }}" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Fees
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Payment History
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Academic Timeline
            </a>
            <a href="#" class="text-teal-900 py-4 px-1 border-b-2 border-orange-400 font-medium text-sm">
                Documents
            </a>
        </nav>
    </div>

    <!-- Empty State -->
    <div class="flex flex-col items-center justify-center py-20">
        <p class="text-xl font-semibold text-teal-900 mb-6">There are currently no documents.</p>
        <button class="px-8 py-3 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
            Upload Document
        </button>
    </div>
</div>
@endsection

