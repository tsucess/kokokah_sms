@extends('layouts.admin', ['active' => 'staff'])

@section('title', 'Staff')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-8">
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h3 class="text-lg font-semibold text-gray-900">Staff</h3>
                <p class="text-sm text-gray-600">Manage staff information and records</p>
            </div>
            <a href="{{ route('admin.staff.bio-data') }}" class="px-4 py-2 bg-accent text-white rounded-lg hover:bg-accent-hover transition-colors">
                + Add New Staff
            </a>
        </div>

        <!-- Search -->
        <div class="mb-6">
            <div class="relative">
                <input type="text" placeholder="Search staff..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <!-- Staff List Placeholder -->
        <div class="text-center py-12">
            <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">No Staff Members Yet</h3>
            <p class="text-gray-600 mb-4">Get started by adding your first staff member</p>
            <a href="{{ route('admin.staff.bio-data') }}" class="inline-flex items-center px-4 py-2 bg-accent text-white rounded-lg hover:bg-accent-hover transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Staff
            </a>
        </div>
    </div>
</div>
@endsection

