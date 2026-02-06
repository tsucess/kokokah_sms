@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'System Configuration')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-8 space-y-2">
        <h2 class="text-2xl font-bold text-primary font-fredoka">System Configuration</h2>
        <p class="text-sm text-primary font-sitka">This is a rundown display of all classes and subjects with the approved time slot. You can choose to add or makes change</p>
    </div>

    <!-- General Configuration Section -->
    <div class="mb-8">
        <div class="flex items-center justify-center mb-6">
            <div class="w-40 border-t border-black"></div>
            <h3 class="px-4 text-base font-semibold text-primary font-mulish">General Configuration</h3>
            <div class="w-40 border-t border-black"></div>
        </div>

        <div class="grid grid-cols-5 gap-4">
            <!-- Academic Session & Term -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Academic Session & Term</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- School Information -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">School Information</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- School Calendar -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">School Calendar</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- Class Arm -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Class Arm</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- Class Level -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Class Level</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>
        </div>
    </div>

    <!-- Finance Configuration Section -->
    <div class="mb-8">
        <div class="flex items-center justify-center mb-6">
            <div class="w-40 border-t border-black"></div>
            <h3 class="px-4 text-base font-semibold text-primary font-mulish">Finance Configuration</h3>
            <div class="w-40 border-t border-black"></div>
        </div>

        <div class="grid grid-cols-5 gap-6">
            <!-- Payment Settings -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Payment Settings</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- Inventory Settings -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Inventory Settings</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- Expense Items -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Expense Items</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- Fees Configuration -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Fees Configuration</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- Chart of Accounts -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Chart of Accounts</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>
        </div>
    </div>

    <!-- Academic Configuration Section -->
    <div class="mb-8">
        <div class="flex items-center justify-center mb-6">
            <div class="w-40 border-t border-black"></div>
            <h3 class="px-4 text-base font-semibold text-primary font-mulish">Finance Configuration</h3>
            <div class="w-40 border-t border-black"></div>
        </div>

        <div class="grid grid-cols-5 gap-6">
            <!-- Subjects -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Subjects</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- Performance -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Performance</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- Report Templates -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Report Templates</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- Promotions -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Promotions</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- Exam -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Exam</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>
        </div>

        <div class="grid grid-cols-5 gap-6 mt-6">
            <!-- ID Card -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">ID Card</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- Attendance -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Attendance</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>
        </div>
    </div>

    <!-- Other Configuration Section -->
    <div class="mb-8">
        <div class="flex items-center justify-center mb-6">
            <div class="w-40 border-t border-black"></div>
            <h3 class="px-4 text-base font-semibold text-primary font-mulish">Other Configuration</h3>
            <div class="w-40 border-t border-black"></div>
        </div>

        <div class="grid grid-cols-5 gap-6">
            <!-- Messaging -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Messaging</h4>
                <a class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>

            <!-- Login History -->
            <div class="bg-white rounded-lg border-4 border-orange50 p-4 hover:shadow-lg transition-shadow">
                <p class="text-xs text-primary font-mulish mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-primary font-sitka mb-4">Login History</h4>
                <a  href="{{ route('admin.login-history') }}" class="w-full flex justify-center items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-sm font-medium">
                    View
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

