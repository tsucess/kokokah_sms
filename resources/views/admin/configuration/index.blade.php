@extends('layouts.admin', ['active' => 'configuration'])

@section('title', 'System Configuration')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-teal-900 mb-2">System Configuration</h2>
        <p class="text-sm text-gray-600">This is a random display of all classes and subjects with the respective time limit. You can choose to edit or make change</p>
    </div>

    <!-- General Configuration Section -->
    <div class="mb-8">
        <div class="flex items-center mb-6">
            <div class="flex-1 border-t border-gray-300"></div>
            <h3 class="px-4 text-lg font-semibold text-gray-700">General Configuration</h3>
            <div class="flex-1 border-t border-gray-300"></div>
        </div>

        <div class="grid grid-cols-5 gap-6">
            <!-- Academic Session & Term -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Academic Session & Term</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- School Information -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">School Information</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- School Calendar -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">School Calendar</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- Class Arm -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Class Arm</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- Class Level -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Class Level</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>
        </div>
    </div>

    <!-- Finance Configuration Section -->
    <div class="mb-8">
        <div class="flex items-center mb-6">
            <div class="flex-1 border-t border-gray-300"></div>
            <h3 class="px-4 text-lg font-semibold text-gray-700">Finance Configuration</h3>
            <div class="flex-1 border-t border-gray-300"></div>
        </div>

        <div class="grid grid-cols-5 gap-6">
            <!-- Payment Settings -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Payment Settings</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- Inventory Settings -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Inventory Settings</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- Expense Items -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Expense Items</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- Fees Configuration -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Fees Configuration</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- Chart of Accounts -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Chart of Accounts</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>
        </div>
    </div>

    <!-- Academic Configuration Section -->
    <div class="mb-8">
        <div class="flex items-center mb-6">
            <div class="flex-1 border-t border-gray-300"></div>
            <h3 class="px-4 text-lg font-semibold text-gray-700">Finance Configuration</h3>
            <div class="flex-1 border-t border-gray-300"></div>
        </div>

        <div class="grid grid-cols-5 gap-6">
            <!-- Subjects -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Subjects</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- Performance -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Performance</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- Report Templates -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Report Templates</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- Promotions -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Promotions</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- Exam -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Exam</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>
        </div>

        <div class="grid grid-cols-5 gap-6 mt-6">
            <!-- ID Card -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">ID Card</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- Attendance -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Attendance</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>
        </div>
    </div>

    <!-- Other Configuration Section -->
    <div class="mb-8">
        <div class="flex items-center mb-6">
            <div class="flex-1 border-t border-gray-300"></div>
            <h3 class="px-4 text-lg font-semibold text-gray-700">Other Configuration</h3>
            <div class="flex-1 border-t border-gray-300"></div>
        </div>

        <div class="grid grid-cols-5 gap-6">
            <!-- Messaging -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Messaging</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>

            <!-- Login History -->
            <div class="bg-white rounded-lg border-2 border-orange-400 p-6 hover:shadow-lg transition-shadow">
                <p class="text-xs text-gray-500 mb-3">Primary 1</p>
                <h4 class="text-base font-bold text-teal-900 mb-4">Login History</h4>
                <button class="w-full px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors text-sm font-medium">
                    View
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

