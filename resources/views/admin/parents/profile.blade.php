@extends('layouts.admin', ['active' => 'parent'])

@section('title', 'Parent Profile')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-xl font-bold text-teal-900 mb-2">Student Management</h2>
        <p class="text-sm text-gray-600">Manage student information and enrollment</p>
        <a href="{{ route('admin.parents') }}" class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900 mt-2">
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
                        <p class="text-sm text-gray-600 mb-1">Occupation</p>
                        <p class="font-semibold text-teal-900">Realtor</p>
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
                        <p class="text-sm text-gray-600 mb-1">Phone Number</p>
                        <p class="font-semibold text-teal-900">+234810 000 0000</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Home Address</p>
                        <p class="font-semibold text-teal-900">Lagos, Nigeria</p>
                    </div>
                    <div></div>

                    <!-- Row 5 -->
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Email Address</p>
                        <p class="font-semibold text-teal-900">myemail@gmail.com</p>
                    </div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Linked Children Card -->
    <div class="bg-white rounded-lg border-2 border-orange-400 p-8 mb-6">
        <h3 class="text-lg font-bold text-teal-900 mb-2">Linked Children</h3>
        <p class="text-sm text-gray-600 mb-6">Below is your next of kin's information</p>

        <div class="grid grid-cols-3 gap-6">
            <!-- Child 1 -->
            <div class="border-2 border-orange-400 rounded-lg p-6">
                <div class="flex items-start space-x-4">
                    <div class="w-16 h-16 bg-teal-900 rounded-full flex-shrink-0"></div>
                    <div class="flex-1">
                        <h4 class="font-bold text-teal-900 mb-3">Samuel Musa Ali</h4>
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center">
                                <span class="text-gray-600 w-16">Male</span>
                                <span class="mx-2">•</span>
                                <span class="text-gray-600">CJSEC</span>
                                <span class="mx-2">•</span>
                                <span class="text-gray-600">JSS 1</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Child 2 -->
            <div class="border-2 border-orange-400 rounded-lg p-6">
                <div class="flex items-start space-x-4">
                    <div class="w-16 h-16 bg-teal-900 rounded-full flex-shrink-0"></div>
                    <div class="flex-1">
                        <h4 class="font-bold text-teal-900 mb-3">Samuel Musa Ali</h4>
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center">
                                <span class="text-gray-600 w-16">Male</span>
                                <span class="mx-2">•</span>
                                <span class="text-gray-600">CJSEC</span>
                                <span class="mx-2">•</span>
                                <span class="text-gray-600">JSS 1</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Child 3 -->
            <div class="border-2 border-orange-400 rounded-lg p-6">
                <div class="flex items-start space-x-4">
                    <div class="w-16 h-16 bg-teal-900 rounded-full flex-shrink-0"></div>
                    <div class="flex-1">
                        <h4 class="font-bold text-teal-900 mb-3">Samuel Musa Ali</h4>
                        <div class="space-y-2 text-sm">
                            <div class="flex items-center">
                                <span class="text-gray-600 w-16">Male</span>
                                <span class="mx-2">•</span>
                                <span class="text-gray-600">CJSEC</span>
                                <span class="mx-2">•</span>
                                <span class="text-gray-600">JSS 1</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

