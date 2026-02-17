@extends('layouts.teacher', ['active' => 'class'])

@section('title', 'Class')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<style>
    .active-tab {
            border-bottom-color: #FDAF22;
            color: #FDAF22;
        }
</style>

<div class="p-4 md:px-8 space-y-6">
    <!-- Back Button -->
        <div class="mb-6">
            <div class="flex justify-between items-center gap-3">
                <a href="{{ route('teacher.class') }}"
                    class="inline-flex items-center gap-2 text-sm text-black hover:text-primary font-sitka">
                    <i class="fa-solid fa-arrow-left fa-black"></i>
                    Back | Nur
                </a>
                <div class="flex align-items-center">
                    <button
                        class="px-4 py-2 bg-white text-body3 border border-primary text-primary font-sitka rounded-l-lg font-semibold hover:bg-primary hover:text-white transition-colors">
                        Bulk Upload Student
                    </button>
                    <button
                        class="px-4 py-2 bg-accent text-body3 text-black rounded-r-lg font-semibold hover:bg-yellow-500 transition-colors flex items-center">
                        + Add New Class Member
                    </button>
                </div>
            </div>

        </div>

        <!-- Class Info Card -->
        <div class="border-4 border-orange50 rounded-2xl p-5 mb-6">
            <div class="flex flex-col gap-2">
                <div class="flex justify-between items-center space-x-4">

                    <div class="flex flex-col gap-2">
                        <h2 class="text-2xl font-bold font-sitka text-primary">Nursery 1 - t-A</h2>
                        <p class="text-sm font-sitka text-primary">First Term | 2023-2025</p>
                        <div class="flex flex-col gap-1">
                            <span class="text-primary font-sitka text-xs font-semibold">Teacher: -----</span>
                            <span class="text-primary font-sitka text-xs font-semibold">Asst. Teacher: -----</span>
                        </div>
                    </div>
                    <div>
                        <img src="/images/education_cap.png" alt="">
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-semibold font-sitka text-primary">Enrollment</p>
                        <p class="text-sm font-semibold font-sitka text-primary">40/100%</p>
                    </div>

                    <div class="w-full h-2 bg-grey800 rounded-full">
                        <div class="w-3/4 h-2 bg-secondary rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <nav class="flex space-x-8 mb-10" aria-label="Tabs">
            <button onclick="showTab('class-members')" id="tab-class-members"
                class="active-tab py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Class Members
            </button>
            <button onclick="showTab('subjects')" id="tab-subjects"
                class="py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Subjects
            </button>
            <button onclick="showTab('results')" id="tab-results"
                class="py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Results
            </button>
            <button onclick="showTab('starboard')" id="tab-starboard"
                class="py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Star Board
            </button>
            <button onclick="showTab('attendance')" id="tab-attendance"
                class="py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Attendance
            </button>
            <button onclick="showTab('timetable')" id="tab-timetable"
                class="py-4 px-1 border-b-2 border-transparent text-black hover:text-primary font-sitka hover:border-primary font-medium text-sm">
                Timetable
            </button>
        </nav>
        {{-- Class member --}}
        <div id="content-class-members" class="tab-content hidden"> class member</div>

        {{-- Subject --}}
        <div id="content-subjects" class="tab-content hidden"> subject</div>

        {{-- Results --}}
        <div id="content-results" class="tab-content hidden"> result</div>

        {{-- Star board --}}
        <div id="content-starboard" class="tab-content hidden"> star board</div>

        {{-- Attendance --}}
        <div id="content-attendance" class="tab-content hidden"> attendance</div>

        {{-- Timetable --}}
        <div id="content-timetable" class="tab-content hidden"> timetable</div>
</div>

@push('scripts')
<script>
    function showTab(tabName) {
                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Remove active class from all tabs
                document.querySelectorAll('[id^="tab-"]').forEach(tab => {
                    tab.classList.remove('active-tab');
                });

                // Show selected tab content
                const contentElement = document.getElementById('content-' + tabName);
                if (contentElement) {
                    contentElement.classList.remove('hidden');
                }

                // Add active class to clicked tab
                const activeTab = document.getElementById('tab-' + tabName);
                if (activeTab) {
                    activeTab.classList.add('active-tab');
                }
            }

            // On load
            document.addEventListener('DOMContentLoaded', () => {
                showTab('class-members');
            });
</script>
 @endpush
@endsection
