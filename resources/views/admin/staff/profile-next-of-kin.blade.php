@extends('layouts.admin', ['active' => 'staff'])

@section('title', 'Staff Profile - Next of Kin')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-xl font-bold text-primary font-fredoka">Staff Management</h2>
                <p class="text-sm text-primary font-sitka">Manage staff information and enrollment</p>
    </div>

    <!-- Back Navigation -->
    <div class="mb-6">
        <a href="{{ route('admin.staff.management') }}" class="text-black hover:text-black100 flex gap-1 items-center">
            <i class="fa-solid fa-arrow-left"></i>
            Back to Staff /
            <span class="text-communicationBtn">Emmanuel Sanusi Lamido</span>
        </a>
    </div>

    <!-- Staff Info Card -->
    <div class="bg-white rounded-lg border-4 border-orange50 p-6 mb-6">
        <div class="flex items-start justify-between mb-6">
            <div class="flex items-start space-x-6">
                <!-- Avatar -->
                <div class="w-20 h-20 bg-primary rounded-full flex items-center justify-center text-white text-2xl font-bold">
                    SM
                </div>

                <!-- Staff Details -->
                <div>
                    <h3 class="text-xl font-bold text-primary font-fredoka mb-1">Samuel Musa Ali</h3>
                    <p class="text-xs text-primary font-mulish mb-2">Admin • samuelmusa@gmail.com • Super Admin</p>
                    <p class="text-xs text-primary font-mulish mb-3">10 staff Resource allocated • <span class="text-secondary font-semibold">Upload staff Signature</span></p>


                </div>
            </div>

            <!-- Active Toggle and Edit Button -->
            <div class="flex items-center space-x-8">
                <div class="flex items-center space-x-2">

                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
                    </label>
                     <span class="text-sm text-black300">Active</span>
                </div>
                <button class="px-6 py-2 bg-accent text-black font-sitka font-semibold rounded-lg hover:bg-accent-hover transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Edit
                </button>
            </div>
        </div>

        <!-- Role Assignment -->
                    <div class="flex items-center space-x-3 mb-4">
                        <span class="text-sm font-semibold text-primary font-sitka">Role:</span>
                        <span class="px-2 py-0.5 font-medium bg-school-btn text-green900 text-xs rounded uppercase">SUPER ADMIN</span>
                        <button class="text-secondary font-inter font-semibold text-sm flex items-center px-4 py-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Assign roles
                        </button>
                    </div>

        <!-- Staff Details Grid -->
        <div class="grid grid-cols-4 gap-6">
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">First Name</p>
                <p class="text-xs text-primary font-sitka">Samuel</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Last Name</p>
                <p class="text-xs text-primary font-sitka">Ali</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Other Name</p>
                <p class="text-xs text-primary font-sitka">Musa</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Gender</p>
                <p class="text-xs text-primary font-sitka">Male</p>
            </div>

            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Date of Birth</p>
                <p class="text-xs text-primary font-sitka">08-02-2016</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Country</p>
                <p class="text-xs text-primary font-sitka">Nigeria</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">State of Origin</p>
                <p class="text-xs text-primary font-sitka">Sokoto</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">LGA</p>
                <p class="text-xs text-primary font-sitka">Gwadabawa</p>
            </div>

            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Marital Status</p>
                <p class="text-xs text-primary font-sitka">Married</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Staff Type</p>
                <p class="text-xs text-primary font-sitka">Academic</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Phone Number</p>
                <p class="text-xs text-primary font-sitka">+234810 000 0000</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Email Address</p>
                <p class="text-xs text-primary font-sitka">myemail@gmail.com</p>
            </div>

            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Home Address</p>
                <p class="text-xs text-primary font-sitka">Lagos, Nigeria</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Blood Group</p>
                <p class="text-xs text-primary font-sitka">O -</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Genotype</p>
                <p class="text-xs text-primary font-sitka">AA</p>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    {{-- <div class="mb-6">
        <nav class="flex space-x-8">
            <a href="#" class="text-black hover:text-gray-700 py-4 px-1 border-b-2 border-black100 font-medium text-sm">
                Other Information
            </a>
            <a href="#" class="textblack hover:text-gray-700 py-4 px-1 border-b-2 font-medium text-sm">
                Documents
            </a>
        </nav>
    </div> --}}

    <!-- Next of Kin Card -->
    <div class="bg-white rounded-lg border-4 border-orange50 p-6 mb-6">
        <h3 class="text-xl font-bold text-primary font-fredoka mb-2">Next of Kin</h3>
        <p class="text-sm text-primary font-mulish mb-6">Below is your next of kin's information</p>

        <div class="grid grid-cols-3 gap-6">
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Next of Kin's First Name</p>
                <p class="text-xs text-primary font-sitka">Samuel</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Next of Kin's Surname</p>
                <p class="text-xs text-primary font-sitka">Ali</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Next of Kin's Other Name</p>
                <p class="text-xs text-primary font-sitka">Musa</p>
            </div>

            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Next of Kin's Email Address</p>
                <p class="text-xs text-primary font-sitka">myemail@gmail.com</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Next of Kin's Phone Number</p>
                <p class="text-xs text-primary font-sitka">08-02-2016</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Next of Kin's Relationship</p>
                <p class="text-xs text-primary font-sitka">Nigeria</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-primary font-sitka">Next of Kin's Address</p>
                <p class="text-xs text-primary font-sitka">Sokoto</p>
            </div>
        </div>
    </div>

</div>
@endsection

