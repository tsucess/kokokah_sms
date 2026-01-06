@extends('layouts.superadmin', ['active' => 'schools'])

@section('title', 'Schools')
@section('page-title', 'Schools')
@section('page-description', 'Manage all schools on the platform')

@section('header-actions')
    <button class="px-4 py-2 bg-accent text-primary rounded-lg font-medium hover:bg-accent/90 transition-colors">
        Add New School
    </button>
@endsection

@section('content')
<div class="p-8 space-y-6">
    <!-- Filter Tabs -->
    <div class="bg-white rounded-lg border border-gray-200 p-2">
        <div class="flex space-x-2">
            <button class="px-4 py-2 bg-primary text-white rounded-lg text-sm font-medium">
                All Schools (234)
            </button>
            <button class="px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg text-sm font-medium">
                Active (187)
            </button>
            <button class="px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg text-sm font-medium">
                Inactive (47)
            </button>
            <button class="px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg text-sm font-medium">
                Trial (23)
            </button>
            <button class="px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg text-sm font-medium">
                Suspended (12)
            </button>
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="flex items-center justify-between">
        <div class="flex-1 max-w-md">
            <div class="relative">
                <input type="text" placeholder="Search schools..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent">
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
        <div class="flex items-center space-x-3">
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent">
                <option>All Plans</option>
                <option>Basic</option>
                <option>Standard</option>
                <option>Premium</option>
            </select>
            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent">
                <option>Sort by: Newest</option>
                <option>Sort by: Oldest</option>
                <option>Sort by: Name A-Z</option>
                <option>Sort by: Name Z-A</option>
            </select>
        </div>
    </div>

    <!-- Schools Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- School Card 1 -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
            <div class="h-32 bg-gradient-to-br from-blue-500 to-purple-600"></div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-900 mb-1">Lagos International School</h3>
                        <p class="text-sm text-gray-500">lagos-intl.edu.ng</p>
                    </div>
                    <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Active</span>
                </div>
                
                <div class="space-y-2 mb-4">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Plan:</span>
                        <span class="font-medium text-gray-900">Premium</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Students:</span>
                        <span class="font-medium text-gray-900">1,234</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Teachers:</span>
                        <span class="font-medium text-gray-900">87</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Joined:</span>
                        <span class="font-medium text-gray-900">Jan 15, 2024</span>
                    </div>
                </div>

                <div class="flex items-center space-x-2">
                    <button class="flex-1 px-4 py-2 bg-primary text-white text-sm rounded-lg hover:bg-primary/90">
                        View Details
                    </button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- School Card 2 -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
            <div class="h-32 bg-gradient-to-br from-green-500 to-teal-600"></div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-900 mb-1">Abuja Academy</h3>
                        <p class="text-sm text-gray-500">abuja-academy.edu.ng</p>
                    </div>
                    <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Active</span>
                </div>
                
                <div class="space-y-2 mb-4">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Plan:</span>
                        <span class="font-medium text-gray-900">Standard</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Students:</span>
                        <span class="font-medium text-gray-900">856</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Teachers:</span>
                        <span class="font-medium text-gray-900">62</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Joined:</span>
                        <span class="font-medium text-gray-900">Feb 3, 2024</span>
                    </div>
                </div>

                <div class="flex items-center space-x-2">
                    <button class="flex-1 px-4 py-2 bg-primary text-white text-sm rounded-lg hover:bg-primary/90">
                        View Details
                    </button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- School Card 3 -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
            <div class="h-32 bg-gradient-to-br from-orange-500 to-red-600"></div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-900 mb-1">Port Harcourt High</h3>
                        <p class="text-sm text-gray-500">ph-high.edu.ng</p>
                    </div>
                    <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-medium rounded-full">Trial</span>
                </div>

                <div class="space-y-2 mb-4">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Plan:</span>
                        <span class="font-medium text-gray-900">Basic</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Students:</span>
                        <span class="font-medium text-gray-900">423</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Teachers:</span>
                        <span class="font-medium text-gray-900">34</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Joined:</span>
                        <span class="font-medium text-gray-900">Mar 12, 2024</span>
                    </div>
                </div>

                <div class="flex items-center space-x-2">
                    <button class="flex-1 px-4 py-2 bg-primary text-white text-sm rounded-lg hover:bg-primary/90">
                        View Details
                    </button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- School Card 4 -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
            <div class="h-32 bg-gradient-to-br from-pink-500 to-rose-600"></div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-900 mb-1">Ibadan Grammar School</h3>
                        <p class="text-sm text-gray-500">ibadan-grammar.edu.ng</p>
                    </div>
                    <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Active</span>
                </div>

                <div class="space-y-2 mb-4">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Plan:</span>
                        <span class="font-medium text-gray-900">Premium</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Students:</span>
                        <span class="font-medium text-gray-900">1,567</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Teachers:</span>
                        <span class="font-medium text-gray-900">94</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Joined:</span>
                        <span class="font-medium text-gray-900">Dec 8, 2023</span>
                    </div>
                </div>

                <div class="flex items-center space-x-2">
                    <button class="flex-1 px-4 py-2 bg-primary text-white text-sm rounded-lg hover:bg-primary/90">
                        View Details
                    </button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- School Card 5 -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
            <div class="h-32 bg-gradient-to-br from-indigo-500 to-blue-600"></div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-900 mb-1">Enugu Academy</h3>
                        <p class="text-sm text-gray-500">enugu-academy.edu.ng</p>
                    </div>
                    <span class="px-3 py-1 bg-gray-100 text-gray-800 text-xs font-medium rounded-full">Inactive</span>
                </div>

                <div class="space-y-2 mb-4">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Plan:</span>
                        <span class="font-medium text-gray-900">Standard</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Students:</span>
                        <span class="font-medium text-gray-900">678</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Teachers:</span>
                        <span class="font-medium text-gray-900">45</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Joined:</span>
                        <span class="font-medium text-gray-900">Nov 20, 2023</span>
                    </div>
                </div>

                <div class="flex items-center space-x-2">
                    <button class="flex-1 px-4 py-2 bg-primary text-white text-sm rounded-lg hover:bg-primary/90">
                        View Details
                    </button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- School Card 6 -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
            <div class="h-32 bg-gradient-to-br from-yellow-500 to-orange-600"></div>
            <div class="p-6">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-900 mb-1">Kano International</h3>
                        <p class="text-sm text-gray-500">kano-intl.edu.ng</p>
                    </div>
                    <span class="px-3 py-1 bg-red-100 text-red-800 text-xs font-medium rounded-full">Suspended</span>
                </div>

                <div class="space-y-2 mb-4">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Plan:</span>
                        <span class="font-medium text-gray-900">Basic</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Students:</span>
                        <span class="font-medium text-gray-900">345</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Teachers:</span>
                        <span class="font-medium text-gray-900">28</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Joined:</span>
                        <span class="font-medium text-gray-900">Oct 5, 2023</span>
                    </div>
                </div>

                <div class="flex items-center space-x-2">
                    <button class="flex-1 px-4 py-2 bg-primary text-white text-sm rounded-lg hover:bg-primary/90">
                        View Details
                    </button>
                    <button class="px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="flex items-center justify-between">
        <p class="text-sm text-gray-600">Showing 1-6 of 234 schools</p>
        <div class="flex items-center space-x-2">
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 disabled:opacity-50" disabled>
                Previous
            </button>
            <button class="px-4 py-2 bg-primary text-white rounded-lg">1</button>
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">2</button>
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">3</button>
            <span class="px-2">...</span>
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">39</button>
            <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">
                Next
            </button>
        </div>
    </div>
</div>
@endsection

