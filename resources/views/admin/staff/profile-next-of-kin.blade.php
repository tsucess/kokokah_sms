@extends('layouts.admin', ['active' => 'staff'])

@section('title', 'Staff Profile - Next of Kin')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-teal-900 mb-1">Staff Management</h2>
        <p class="text-sm text-gray-600">Manage staff information and enrollment</p>
    </div>

    <!-- Back Navigation -->
    <div class="mb-6">
        <a href="{{ route('admin.staff.overview') }}" class="text-teal-600 hover:text-teal-800 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Staff / Emmanuel Sanusi Lamido
        </a>
    </div>

    <!-- Staff Info Card -->
    <div class="bg-white rounded-lg border-2 border-orange-400 p-6 mb-6">
        <div class="flex items-start justify-between mb-6">
            <div class="flex items-start space-x-6">
                <!-- Avatar -->
                <div class="w-20 h-20 bg-teal-800 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                    SM
                </div>
                
                <!-- Staff Details -->
                <div>
                    <h3 class="text-2xl font-bold text-teal-900 mb-1">Samuel Musa Ali</h3>
                    <p class="text-sm text-gray-600 mb-2">Admin • samuelmusa@gmail.com • Super Admin</p>
                    <p class="text-sm text-gray-600 mb-3">10 staff Resource allocated • <span class="text-orange-500">Upload staff Signature</span></p>
                    
                    <!-- Role Assignment -->
                    <div class="flex items-center space-x-3 mb-4">
                        <span class="text-sm font-medium text-gray-700">Role:</span>
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 text-sm rounded">SUPER ADMIN</span>
                        <button class="text-orange-500 text-sm flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Assign roles
                        </button>
                    </div>
                </div>
            </div>

            <!-- Active Toggle and Edit Button -->
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-700">Active</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
                    </label>
                </div>
                <button class="px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Edit
                </button>
            </div>
        </div>

        <!-- Staff Details Grid -->
        <div class="grid grid-cols-4 gap-6">
            <div>
                <p class="text-sm text-gray-600 mb-1">First Name</p>
                <p class="text-sm font-medium text-gray-900">Samuel</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Last Name</p>
                <p class="text-sm font-medium text-gray-900">Ali</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Other Name</p>
                <p class="text-sm font-medium text-gray-900">Musa</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Gender</p>
                <p class="text-sm font-medium text-gray-900">Male</p>
            </div>

            <div>
                <p class="text-sm text-gray-600 mb-1">Date of Birth</p>
                <p class="text-sm font-medium text-gray-900">08-02-2016</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Country</p>
                <p class="text-sm font-medium text-gray-900">Nigeria</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">State of Origin</p>
                <p class="text-sm font-medium text-gray-900">Sokoto</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">LGA</p>
                <p class="text-sm font-medium text-gray-900">Gwadabawa</p>
            </div>

            <div>
                <p class="text-sm text-gray-600 mb-1">Marital Status</p>
                <p class="text-sm font-medium text-gray-900">Married</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Staff Type</p>
                <p class="text-sm font-medium text-gray-900">Academic</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Phone Number</p>
                <p class="text-sm font-medium text-gray-900">+234810 000 0000</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Email Address</p>
                <p class="text-sm font-medium text-gray-900">myemail@gmail.com</p>
            </div>

            <div>
                <p class="text-sm text-gray-600 mb-1">Home Address</p>
                <p class="text-sm font-medium text-gray-900">Lagos, Nigeria</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Blood Group</p>
                <p class="text-sm font-medium text-gray-900">O -</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Genotype</p>
                <p class="text-sm font-medium text-gray-900">AA</p>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="mb-6 border-b border-gray-200">
        <nav class="flex space-x-8">
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Other Information
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                Documents
            </a>
        </nav>
    </div>

    <!-- Next of Kin Card -->
    <div class="bg-white rounded-lg border-2 border-orange-400 p-6 mb-6">
        <h3 class="text-xl font-bold text-teal-900 mb-2">Next of Kin</h3>
        <p class="text-sm text-gray-600 mb-6">Below is your next of kin's information</p>

        <div class="grid grid-cols-3 gap-6">
            <div>
                <p class="text-sm text-teal-900 font-medium mb-1">Next of Kin's First Name</p>
                <p class="text-sm text-gray-900">Samuel</p>
            </div>
            <div>
                <p class="text-sm text-teal-900 font-medium mb-1">Next of Kin's Surname</p>
                <p class="text-sm text-gray-900">Ali</p>
            </div>
            <div>
                <p class="text-sm text-teal-900 font-medium mb-1">Next of Kin's Other Name</p>
                <p class="text-sm text-gray-900">Musa</p>
            </div>

            <div>
                <p class="text-sm text-teal-900 font-medium mb-1">Next of Kin's Email Address</p>
                <p class="text-sm text-gray-900">myemail@gmail.com</p>
            </div>
            <div>
                <p class="text-sm text-teal-900 font-medium mb-1">Next of Kin's Phone Number</p>
                <p class="text-sm text-gray-900">08-02-2016</p>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-6 mt-6">
            <div>
                <p class="text-sm text-teal-900 font-medium mb-1">Next of Kin's Relationship</p>
                <p class="text-sm text-gray-900">Nigeria</p>
            </div>
            <div>
                <p class="text-sm text-teal-900 font-medium mb-1">Next of Kin's Address</p>
                <p class="text-sm text-gray-900">Sokoto</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="mt-8 text-center">
        <p class="text-sm text-gray-500">COPYRIGHT © 2025</p>
    </div>
</div>
@endsection

