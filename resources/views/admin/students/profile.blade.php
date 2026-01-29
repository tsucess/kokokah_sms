@extends('layouts.admin', ['active' => 'student'])

@section('title', 'Student Profile')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-xl font-bold text-teal-900 mb-2">Student Management</h2>
        <p class="text-sm text-gray-600">Manage student information and enrollment</p>
        <a href="{{ route('admin.students') }}" class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900 mt-2">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Staff / Emmanuel Samuel Larinbi
        </a>
    </div>

    <!-- Profile Card -->
    <div class="bg-white rounded-lg border-2 border-orange-400 p-8 mb-6">
        <div class="flex items-start justify-between">
            <div class="flex items-start space-x-6">
                <!-- Profile Image -->
                <div class="w-24 h-24 bg-teal-900 rounded-full flex-shrink-0"></div>
                
                <!-- Personal Information Grid -->
                <div class="grid grid-cols-3 gap-x-12 gap-y-6 flex-1">
                    <!-- Row 1 -->
                    <div>
                        <p class="text-sm text-gray-600 mb-1">First Name</p>
                        <p class="font-semibold text-teal-900">Samuel</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Last Name</p>
                        <p class="font-semibold text-teal-900">Ali</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Other Name</p>
                        <p class="font-semibold text-teal-900">Musa</p>
                    </div>

                    <!-- Row 2 -->
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Gender</p>
                        <p class="font-semibold text-teal-900">Male</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Date of Birth</p>
                        <p class="font-semibold text-teal-900">08-02-2010</p>
                    </div>
                    <div></div>

                    <!-- Row 3 -->
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Country</p>
                        <p class="font-semibold text-teal-900">Nigeria</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">State of Origin</p>
                        <p class="font-semibold text-teal-900">Sokoto</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">LGA</p>
                        <p class="font-semibold text-teal-900">Gwadabawa</p>
                    </div>

                    <!-- Row 4 -->
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Marital Status</p>
                        <p class="font-semibold text-teal-900">Married</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Staff Type</p>
                        <p class="font-semibold text-teal-900">Academic</p>
                    </div>
                    <div></div>

                    <!-- Row 5 -->
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Phone Number</p>
                        <p class="font-semibold text-teal-900">+234810 000 0000</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Email Address</p>
                        <p class="font-semibold text-teal-900">myemail@gmail.com</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Home Address</p>
                        <p class="font-semibold text-teal-900">Lagos, Nigeria</p>
                    </div>

                    <!-- Row 6 -->
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Blood Group</p>
                        <p class="font-semibold text-teal-900">O -</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Genotype</p>
                        <p class="font-semibold text-teal-900">AA</p>
                    </div>
                    <div></div>
                </div>
            </div>

            <!-- Signature -->
            <div class="text-center">
                <div class="w-32 h-24 bg-teal-900 rounded-lg mb-2"></div>
                <p class="text-sm text-gray-600">Signature</p>
            </div>
        </div>
    </div>

    <!-- Next of Kin Card -->
    <div class="bg-white rounded-lg border-2 border-orange-400 p-8 mb-6">
        <h3 class="text-lg font-bold text-teal-900 mb-2">Next of Kin</h3>
        <p class="text-sm text-gray-600 mb-6">Below is your next of kin's information</p>

        <div class="grid grid-cols-3 gap-x-12 gap-y-6">
            <!-- Row 1 -->
            <div>
                <p class="text-sm text-gray-600 mb-1">Next of Kin's First Name</p>
                <p class="font-semibold text-teal-900">Samuel</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Next of Kin's Surname</p>
                <p class="font-semibold text-teal-900">Ali</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Next of Kin's Other Name</p>
                <p class="font-semibold text-teal-900">Musa</p>
            </div>

            <!-- Row 2 -->
            <div>
                <p class="text-sm text-gray-600 mb-1">Next of Kin's Email Address</p>
                <p class="font-semibold text-teal-900">myemail@gmail.com</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Next of Kin's Phone Number</p>
                <p class="font-semibold text-teal-900">08-02-2016</p>
            </div>
            <div></div>

            <!-- Row 3 -->
            <div>
                <p class="text-sm text-gray-600 mb-1">Next of Kin's Relationship</p>
                <p class="font-semibold text-teal-900">Nigeria</p>
            </div>
            <div>
                <p class="text-sm text-gray-600 mb-1">Next of Kin's Address</p>
                <p class="font-semibold text-teal-900">Sokoto</p>
            </div>
            <div></div>
        </div>
    </div>

    <!-- Progress Indicator -->
    <div class="flex items-center justify-center gap-2 mb-6">
        <div class="w-16 h-1 bg-gray-300 rounded"></div>
        <div class="w-16 h-1 bg-gray-300 rounded"></div>
        <div class="w-16 h-1 bg-orange-400 rounded"></div>
    </div>

    <!-- Action Buttons -->
    <div class="flex justify-between">
        <button class="px-8 py-3 border-2 border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors font-medium">
            Previous
        </button>
        <button class="px-8 py-3 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors font-medium">
            Finish
        </button>
    </div>
</div>
@endsection

