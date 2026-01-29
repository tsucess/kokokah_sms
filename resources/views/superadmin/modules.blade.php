@extends('layouts.superadmin', ['active' => 'modules'])

@section('title', 'Modules & Configuration')
@section('page-title', 'Modules & Configuration')
@section('page-description', 'Manage system-wide features, templates, and settings')

@section('header-actions')
<style>
    .active {
            background-color: #fdaf22;
            color: #004A53;
            border-color: #fdaf22;
        }
        .active:hover {
            background-color: #feca6c;
        }
</style>
<div class="flex items-center gap-3">
    <button class="group px-4 py-2 bg-white border border-primary text-primary rounded-lg font-medium
hover:bg-primary hover:text-white transition-colors flex items-center gap-2">

    <i class="fa-solid fa-download text-primary group-hover:text-white transition-colors"></i>
    Export PDF

</button>

    <button class="group px-4 py-2 bg-white border border-primary text-primary rounded-lg font-medium
hover:bg-primary hover:text-white transition-colors flex items-center gap-2">

    <i class="fa-solid fa-download text-primary group-hover:text-white transition-colors"></i>
    Export Excel

</button>

</div>
@endsection

@section('content')
<div class="p-8 space-y-6">
    <!-- Tabs -->
    <div class="flex">
        <button class="px-6 py-2 text-sm font-sitka border border-primary text-primary bg-white rounded-l-lg hover:bg-gray-200 transition-colors tab-btn active" data-tab="academicSetup">
            Academic Setup
        </button>
        <button class="px-6 py-2 text-sm font-sitka border border-primary text-primary bg-white hover:bg-gray-200 transition-colors tab-btn" data-tab="systemSettings">
            System Settings
        </button>
        <button class="px-6 py-2 text-sm font-sitka border border-primary text-primary bg-white rounded-r-lg hover:bg-gray-200 transition-colors tab-btn" data-tab="gradingSystem">
            Grading System
        </button>
    </div>

    <!-- Academic Setup Content -->
    <div class="tab-content" id="academicSetupContent">
        <!-- Sessions Section -->
        <div class="bg-white rounded-lg border border-gray-200 mb-6">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <div>
                    <h2 class="text-body2 font-bold text-primary font-fredoka">Sessions</h2>
                    <p class="text-body4 text-primary">Manage school sessions</p>
                </div>
                <button class="px-4 py-2 bg-accent text-black rounded-lg font-medium text-body3 hover:bg-accent-hover transition-colors flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Session
                </button>
            </div>
            <div class="p-6 space-y-4">
                <!-- Session Items -->
                @for ($i = 0; $i < 3; $i++)
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <div class="flex-1">
                        <p class="text-body3 font-medium text-primary">Session 2023/2024{{ $i > 0 ? $i : '' }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="p-2 text-primary hover:bg-white rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>
                        <button class="p-2 text-red-500 hover:bg-white rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <!-- Terms Section -->
        <div class="bg-white rounded-lg border border-gray-200 mb-6">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <div>
                    <h2 class="text-body2 font-bold text-primary font-fredoka">Terms</h2>
                    <p class="text-body4 text-primary">Manage school sessions</p>
                </div>
                <button class="px-4 py-2 bg-accent text-black rounded-lg font-medium text-body3 hover:bg-accent-hover transition-colors flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Term
                </button>
            </div>
            <div class="p-6 space-y-4">
                <!-- Term Items -->
                @foreach (['First Term', 'Second Term', 'Third Term'] as $term)
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <div class="flex-1">
                        <p class="text-body3 font-medium text-primary">{{ $term }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="p-2 text-primary hover:bg-white rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>
                        <button class="p-2 text-red-500 hover:bg-white rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Classes Section -->
        <div class="bg-white rounded-lg border border-gray-200 mb-6">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <div>
                    <h2 class="text-body2 font-bold text-primary font-fredoka">Classes</h2>
                    <p class="text-body4 text-primary">Manage school classes</p>
                </div>
                <button class="px-4 py-2 bg-accent text-black rounded-lg font-medium text-body3 hover:bg-accent-hover transition-colors flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Class
                </button>
            </div>
            <div class="p-6 space-y-4">
                <!-- Class Items -->
                @foreach (['Group 1', 'Group 2', 'Group 3'] as $class)
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <div class="flex-1">
                        <p class="text-body3 font-medium text-primary">{{ $class }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="p-2 text-primary hover:bg-white rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>
                        <button class="p-2 text-red-500 hover:bg-white rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Class Arms Section -->
        <div class="bg-white rounded-lg border border-gray-200 mb-6">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <div>
                    <h2 class="text-body2 font-bold text-primary font-fredoka">Class Arms</h2>
                    <p class="text-body4 text-primary">Manage school arms</p>
                </div>
                <button class="px-4 py-2 bg-accent text-black rounded-lg font-medium text-body3 hover:bg-accent-hover transition-colors flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Arm
                </button>
            </div>
            <div class="p-6 space-y-4">
                <!-- Arm Items -->
                @foreach (['A', 'B', 'C'] as $arm)
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <div class="flex-1">
                        <p class="text-body3 font-medium text-primary">{{ $arm }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="p-2 text-primary hover:bg-white rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>
                        <button class="p-2 text-red-500 hover:bg-white rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Subject Tags Section -->
        <div class="bg-white rounded-lg border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <div>
                    <h2 class="text-body2 font-bold text-primary font-fredoka">Subject Tags</h2>
                    <p class="text-body4 text-primary">Manage school subject tags</p>
                </div>
                <button class="px-4 py-2 bg-accent text-black rounded-lg font-medium text-body3 hover:bg-accent-hover transition-colors flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Subject Tag
                </button>
            </div>
            <div class="p-6 space-y-4">
                <!-- Subject Tag Items -->
                @foreach (['Science', 'Art', 'Commercial', 'Vocational', 'General', 'Language', 'Other'] as $tag)
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                    <div class="flex-1">
                        <p class="text-body3 font-medium text-primary">{{ $tag }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="p-2 text-primary hover:bg-white rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </button>
                        <button class="p-2 text-red-500 hover:bg-white rounded-lg transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- System Settings Content -->
    <div class="tab-content hidden" id="systemSettingsContent">
        <div class="bg-white rounded-lg border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-body2 font-bold text-primary font-fredoka">General Settings</h2>
                <p class="text-body4 text-primary">Configure basic system settings</p>
            </div>
            <div class="p-6">
                <form class="space-y-6 grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <!-- Site Name -->
                    <div class="border border-primary rounded-2xl px-3 py-2 relative">
                        <label class="font-medium text-primary bg-white px-1 py-0.5 absolute -top-3 left-5 text-sm">Site Name</label>
                        <input type="text" placeholder="kokokah" class="px-3 py-2 outline-none text-primary text-sm">
                    </div>

                    <!-- Site URL -->
                    <div class="border border-primary rounded-2xl px-3 py-2 relative">
                        <label class="font-medium text-primary bg-white px-1 py-0.5 absolute -top-3 left-5 text-sm">Site URL</label>
                        <input type="text" placeholder="https://kokokah.com" class="px-3 py-2 outline-none text-primary text-sm">
                    </div>

                    <!-- Admin Email -->
                    <div class="border border-primary rounded-2xl px-3 py-2 relative">
                        <label class="font-medium text-primary bg-white px-1 py-0.5 absolute -top-3 left-5 text-sm">Admin Email</label>
                        <input type="text" placeholder="admin@kokokah@gmail.com" class="px-3 py-2 outline-none text-primary text-sm">
                    </div>

                    <!-- Timezone -->
                    <div class="border border-primary rounded-2xl px-3 py-2 relative">
                        <label class="font-medium text-primary bg-white px-1 py-0.5 absolute -top-3 left-5 text-sm">Timezone</label>
                        <select class="px-3 py-2 outline-none text-primary text-sm w-full">
                            <option>West Africa Time (WAT)</option>
                            <option>East Africa Time (EAT)</option>
                            <option>Central Africa Time (CAT)</option>
                        </select>
                    </div>

                    <!-- Default Language -->
                    <div class="border border-primary rounded-2xl px-3 py-2 relative">
                        <label class="font-medium text-primary bg-white px-1 py-0.5 absolute -top-3 left-5 text-sm">Default Language</label>
                        <select class="px-3 py-2 outline-none text-primary text-sm w-full">
                            <option>English</option>
                            <option>French</option>
                            <option>Spanish</option>
                        </select>
                    </div>

                    <!-- Maintenance Mode -->
                    <div class="flex items-center justify-between">
                        <div>
                            <label class="block text-body3 font-medium text-primary">Maintenance Mode</label>
                            <p class="text-body5 text-gray-500">Enable maintenance mode for system updates</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-accent/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-accent"></div>
                        </label>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex gap-3">
                        <button type="button" class="px-6 py-2 border border-primary text-primary rounded-lg font-medium text-body3 hover:bg-primary hover:text-white transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-2 bg-accent text-black rounded-lg font-medium text-body3 hover:bg-accent-hover transition-colors">
                            Save Settings
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Grading System Content -->
    <div class="tab-content hidden" id="gradingSystemContent">
        <div class="bg-white rounded-lg border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-body2 font-bold text-primary font-fredoka">Grading System</h2>
                <p class="text-body4 text-primary">Configure grading scales and assessment criteria</p>
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-3 text-left text-body3 font-semibold text-primary">Grade</th>
                                <th class="px-6 py-3 text-left text-body3 font-semibold text-primary">Min Score</th>
                                <th class="px-6 py-3 text-left text-body3 font-semibold text-primary">Max Score</th>
                                <th class="px-6 py-3 text-left text-body3 font-semibold text-primary">Remark</th>
                                <th class="px-6 py-3 text-left text-body3 font-semibold text-primary">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @php
                                $grades = [
                                    ['grade' => 'A', 'min' => '70', 'max' => '100', 'remark' => 'Excellent'],
                                    ['grade' => 'B', 'min' => '60', 'max' => '69', 'remark' => 'Very Good'],
                                    ['grade' => 'C', 'min' => '50', 'max' => '59', 'remark' => 'Good'],
                                    ['grade' => 'D', 'min' => '45', 'max' => '49', 'remark' => 'Pass'],
                                    ['grade' => 'E', 'min' => '40', 'max' => '44', 'remark' => 'Poor'],
                                    ['grade' => 'F', 'min' => '0', 'max' => '39', 'remark' => 'Fail'],
                                ];
                            @endphp
                            @foreach ($grades as $gradeData)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-body3 font-medium text-primary">{{ $gradeData['grade'] }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-body3 text-primary">{{ $gradeData['min'] }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-body3 text-primary">{{ $gradeData['max'] }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-body3 text-primary">{{ $gradeData['remark'] }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <button class="p-2 text-primary hover:bg-gray-100 rounded-lg transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </button>
                                        <button class="p-2 text-red-500 hover:bg-gray-100 rounded-lg transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Tab switching functionality
    document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                const targetTab = this.getAttribute('data-tab');

                // Remove active class from all buttons
                tabButtons.forEach(btn => {
                    btn.classList.remove('bg-accent', 'text-black', 'active');
                    btn.classList.add('bg-white', 'text-primary', 'border', 'border-gray-200');
                });

                // Add active class to clicked button
                this.classList.remove('bg-white', 'text-primary', 'border', 'border-gray-200');
                this.classList.add('bg-accent', 'text-black', 'active');

                // Hide all tab contents
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });

                // Show target tab content
                const targetContent = document.getElementById(targetTab + 'Content');
                if (targetContent) {
                    targetContent.classList.remove('hidden');
                }
            });
        });
    });
</script>
@endpush

@endsection

