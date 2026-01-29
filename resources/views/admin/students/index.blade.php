@extends('layouts.admin', ['active' => 'student'])

@section('title', 'Students')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-lg font-semibold text-gray-900">Students</h3>
                <p class="text-sm text-gray-600">Manage student information and enrollment</p>
            </div>
            <a href="{{ route('admin.students.bio-data') }}" class="px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
                + Add New Student
            </a>
        </div>

        <!-- Search -->
        <div class="mb-6">
            <div class="relative">
                <input type="text" placeholder="Search students..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <!-- Student List Placeholder -->
        <div class="text-center py-12">
            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">No Students Yet</h3>
            <p class="text-gray-600 mb-4">Get started by adding your first student</p>
            <a href="{{ route('admin.students.bio-data') }}" class="inline-flex items-center px-4 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Student
            </a>
        </div>
    </div>
</div>
@endsection

