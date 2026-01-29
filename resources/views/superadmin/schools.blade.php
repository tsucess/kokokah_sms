@extends('layouts.superadmin', ['active' => 'schools'])

@section('title', 'Schools')
@section('page-title', 'Schools')
@section('page-description', 'Manage and oversee your school management platform')

@section('header-actions')
    <button
        class="px-4 py-2 bg-accent text-gray-900 rounded-lg font-medium hover:bg-accent-hover transition-colors flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        Add New School
    </button>
@endsection

@section('content')
    <div class="p-8 space-y-6">
        <!-- Filter Tabs and Search -->
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <button class="px-4 py-2 bg-accent border border-accent text-primary rounded-l-lg font-medium text-sm">
                    All
                </button>
                <button class="px-4 py-2 bg-white border border-primary text-primary font-medium text-sm hover:bg-gray-50">
                    Active
                </button>
                <button
                    class="px-4 py-2 bg-white border border-primary text-primary rounded-r-lg font-medium text-sm hover:bg-gray-50">
                    Inactive
                </button>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="relative">
            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input type="text" placeholder="Search schools..."
                class="w-full pl-10 pr-4 py-4 text-body5 text-search bg-white shadow-sm rounded-full focus:ring-2 focus:ring-rimary focus:border-transparent">
        </div>

        <!-- Schools Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @for ($i = 0; $i < 9; $i++)
                <!-- School Card -->
                <div class="bg-white rounded-2xl border border-school-btn p-6">
                    <!-- Header -->
                    <div class="flex items-start justify-between mb-10 relative">
                        <div class="flex items-start space-x-3">
                            <div class="w-12 h-12 bg-school-badge rounded-lg flex items-center justify-center">
                                <span class="text-h4 font-bold text-secondary font-sitka">G</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-primary font-sitka text-body2">Greenwood Academy</h3>
                                <div class="flex items-center text-sm text-primary font-fredoka mt-1">
                                    <svg class="w-4 h-4 mr-1 text-black" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>Lagos, Nigeria</span>
                                </div>
                            </div>
                        </div>
                        <button class="text-black hover:text-school-text more-btn cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                            </svg>
                        </button>
                        {{-- dropdown menu --}}
                    <div
                        class="action-menu opacity-0 scale-95 pointer-events-none absolute right-2 top-8 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-50 transition-all duration-200 ease-out">
                        <button class=" w-full text-left px-4 py-2 text-body5 font-sitka text-primary flex items-center gap-2 hover:bg-gray-100"> <i class="fa-regular fa-eye"></i>View School</button>
                        <button class="w-full text-left px-4 py-2 text-body5 font-sitka flex items-center gap-2 text-red-600 hover:bg-red-50"><i class="fa-solid fa-trash"></i>Delete
                            School</button>
                    </div>
                    </div>




                    <!-- Stats -->
                    <div class="space-y-6 mb-4">
                        <div class="flex items-center justify-between font-fredoka">
                            <div class="flex items-center text-school-text">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                <span>Students:</span>
                            </div>
                            <span class="font-medium text-school-text">3,200</span>
                        </div>
                        <div class="flex items-center justify-between font-fredoka">
                            <div class="flex items-center text-school-text">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>Teachers:</span>
                            </div>
                            <span class="font-medium text-school-text">245</span>
                        </div>
                        <div class="flex items-center justify-between font-fredoka">
                            <div class="flex items-center text-school-text">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>Joined:</span>
                            </div>
                            <span class="font-medium text-school-text">20/04/2025</span>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="flex items-center justify-between pt-4 border-t border-black">
                        <button
                            class="px-4 py-2 bg-accent text-black rounded-full font-medium text-sm hover:bg-accent-hover">
                            {{ $i % 3 === 0 ? 'active' : ($i % 3 === 1 ? 'Inactive' : 'active') }}
                        </button>
                        <button class="px-4 py-2 rounded-full bg-white border border-school-btn">
                            <span class="text-sm font-medium text-black">{{ $i % 3 === 0 ? 'Standard' : 'Premium' }}</span>
                        </button>

                    </div>
                </div>
            @endfor
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const buttons = document.querySelectorAll(".more-btn");
            console.log('clicked')

            function closeAllMenus() {
                document.querySelectorAll(".action-menu").forEach(menu => {
                    menu.classList.add("opacity-0", "scale-95", "pointer-events-none");
                    menu.classList.remove("opacity-100", "scale-100");
                });
            }

            buttons.forEach(btn => {
                const menu = btn.nextElementSibling;

                // CLICK → open
                btn.addEventListener("click", (e) => {
                    e.stopPropagation();

                    const isOpen = menu.classList.contains("opacity-100");

                    closeAllMenus();

                    if (!isOpen) {
                        menu.classList.remove("opacity-0", "scale-95", "pointer-events-none");
                        menu.classList.add("opacity-100", "scale-100");
                    }
                });

                // DOUBLE CLICK → force close
                btn.addEventListener("dblclick", (e) => {
                    e.stopPropagation();
                    closeAllMenus();
                });
            });

            // click outside
            document.addEventListener("click", closeAllMenus);
        });
    </script>

@endsection
