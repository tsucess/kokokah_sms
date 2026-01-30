@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'School Information')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('admin.configuration') }}" class="flex items-center text-orange-500 hover:text-orange-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            System Configuration
        </a>
        <span class="text-gray-400 mx-2">/</span>
        <span class="text-gray-600">Sessions & Term</span>
    </div>

    <!-- Tabs -->
    <div class="mb-6 border-b border-gray-200">
        <nav class="flex space-x-8">
            <a href="#" class="text-teal-900 py-4 px-1 border-b-2 border-orange-400 font-medium text-sm">
                School Information
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                System Preference
            </a>
        </nav>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg border border-gray-200 p-8">
        <form>
            <div class="grid grid-cols-12 gap-8">
                <!-- Left Column - Logo Upload -->
                <div class="col-span-3">
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-4">School Logo</label>
                        <div class="bg-gray-50 rounded-lg p-6 text-center">
                            <div class="mb-4">
                                <img src="/images/school-logo-placeholder.png" alt="School Logo" class="mx-auto" style="max-width: 150px;">
                            </div>
                            <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors flex items-center mx-auto">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>
                                Upload File
                            </button>
                        </div>
                    </div>

                    <!-- Color Picker -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-4">Select School Colour</label>
                        <div class="grid grid-cols-9 gap-2">
                            @for($i = 1; $i <= 18; $i++)
                            <button type="button" class="w-8 h-8 bg-red-500 rounded hover:ring-2 hover:ring-offset-2 hover:ring-red-500"></button>
                            @endfor
                        </div>
                    </div>
                </div>

                <!-- Right Column - Form Fields -->
                <div class="col-span-9">
                    <!-- First Row -->
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">School Name</label>
                            <input type="text" placeholder="Enter student ID" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">School Owner</label>
                            <input type="text" placeholder="Enter student ID" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        </div>
                    </div>

                    <!-- Second Row -->
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">School Code Name</label>
                            <input type="text" placeholder="School" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">School Type</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                                <option>Private</option>
                                <option>Public</option>
                            </select>
                        </div>
                    </div>

                    <!-- Third Row - School Motto -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">School Motto</label>
                        <input type="text" placeholder="Enter other name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    </div>

                    <!-- Fourth Row -->
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                                <option>Nigeria</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">State</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-700">
                                <option>Lagos</option>
                            </select>
                        </div>
                    </div>

                    <!-- Fifth Row - School Address -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">School Address</label>
                        <textarea rows="3" placeholder="Address" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"></textarea>
                    </div>

                    <!-- Sixth Row - Website -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Website</label>
                        <input type="url" placeholder="www.example.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    </div>

                    <!-- Seventh Row - School URL -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">School URL</label>
                        <input type="url" placeholder="https://subdomain.kokokah.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    </div>

                    <!-- Eighth Row -->
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">School Phone Number</label>
                            <input type="tel" placeholder="+234 810 000 0000" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">School Email Address</label>
                            <input type="email" placeholder="myschool@gmail.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        </div>
                    </div>

                    <!-- Principal's Signature -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Principal's Signature</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-12 text-center">
                            <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                            </svg>
                        </div>
                    </div>

                    <!-- Save Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="px-8 py-3 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

