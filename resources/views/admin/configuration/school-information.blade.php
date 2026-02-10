@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'School Information')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Back Button -->
    <div class="mb-6 flex items-center gap-1">
        <a href="{{ route('admin.configuration') }}" class="flex items-center text-orange-500 hover:text-orange-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            System Configuration
        </a>
        <span class="text-gray-400 mx-2">/</span>
        <span class="text-gray-600">School Information</span>
    </div>

    <!-- Tabs -->
    <div class="mb-10 ">
        <nav class="flex space-x-8">
            <a href="#" class="text-orange50 py-4 px-1 border-b-2 border-orange50 font-medium text-sm">
                School Information
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-700 py-4 px-1 border-b-2 border-transparent font-medium text-sm">
                System Preference
            </a>
        </nav>
    </div>

    <!-- Form -->
    <div class="">
        <form>
            <div class="grid grid-cols-3 gap-10">
                <!-- Left Column - Logo Upload -->
                <div class="">
                    <div class="mb-6 space-y-4 flex flex-col">
                        <label class="text-sm font-medium text-primary font-sitka">School Logo</label>
                        <div class="bg-white shadow-auth rounded-lg p-6 text-center">
                            <div class="mb-4">
                                <img src="/images/bio-data-student.jpg" alt="School Logo" class="mx-auto" style="max-width: 150px;">
                            </div>
                            <button type="button" class="px-6 py-3 text-sm bg-blue200 text-white rounded-lg hover:bg-blue-600 transition-colors flex items-center gap-2 mx-auto">
                                Browse File
                                <i class="fa-solid fa-plus"></i>

                            </button>
                        </div>
                    </div>

                    <!-- Color Picker -->
                    <div class="flex space-y-4 flex-col">
                        <label class="text-sm font-medium text-primary font-sitka">Select School Colour</label>
                        <input type="color" name="" id="" class="w-full">
                    </div>
                </div>

                <!-- Right Column - Form Fields -->
                <div class="col-span-2 space-y-8">
                    <!-- First Row -->
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School Name</label>
                            <input type="text" placeholder="Enter student ID" class="w-full outline-none text-primary text-sm">
                        </div>
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School Owner</label>
                            <input type="text" placeholder="Enter student ID" class="w-full outline-none text-primary text-sm">
                        </div>
                    </div>

                    <!-- Second Row -->
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School Code Name</label>
                            <input type="text" placeholder="School" class="w-full outline-none text-primary text-sm">
                        </div>
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School Type</label>
                            <select class="w-full outline-none text-primary text-sm">
                                <option>Private</option>
                                <option>Public</option>
                            </select>
                        </div>
                    </div>

                    <!-- Third Row - School Motto -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School Motto</label>
                        <input type="text" placeholder="Enter other name" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Fourth Row -->
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Country</label>
                            <select class="w-full outline-none text-primary text-sm">
                                <option>Nigeria</option>
                            </select>
                        </div>
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">State</label>
                            <select class="w-full outline-none text-primary text-sm">
                                <option>Lagos</option>
                            </select>
                        </div>
                    </div>

                    <!-- Fifth Row - School Address -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School Address</label>
                        <textarea rows="3" placeholder="Address" class="w-full outline-none text-primary text-sm resize-none"></textarea>
                    </div>

                    <!-- Sixth Row - Website -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Website</label>
                        <input type="url" placeholder="www.example.com" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Seventh Row - School URL -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School URL</label>
                        <input type="url" placeholder="https://subdomain.kokokah.com" class="w-full outline-none text-primary text-sm">
                    </div>

                    <!-- Eighth Row -->
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School Phone Number</label>
                            <input type="tel" placeholder="+234 810 000 0000" class="w-full outline-none text-primary text-sm">
                        </div>
                        <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                            <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">School Email Address</label>
                            <input type="email" placeholder="myschool@gmail.com" class="w-full outline-none text-primary text-sm">
                        </div>
                    </div>

                    <!-- Principal's Signature -->
                    <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                        <label class="text-sm font-medium text-primary bg-superadmin-bg px-1 py-0.5 absolute left-5 -top-3">Principal's Signature</label>
                        <div class=" p-12 text-center">
                            <svg class="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                            </svg>
                        </div>
                    </div>

                    <!-- Save Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="px-8 py-3 bg-accent text-black font-semibold font-sitka rounded-lg hover:bg-accent-hover transition-colors">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

