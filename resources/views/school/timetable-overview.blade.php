@extends('layouts.admin', ['active' => 'timetable'])

@section('title', 'Timetable')
@section('page-title', 'Timetable')

@section('content')
<div class="p-8">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-teal-900 mb-1">Timetable</h2>
        <p class="text-sm text-gray-600">Manage class timetables</p>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <div class="relative">
            <input type="text" placeholder="Search for courses" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>

    <!-- Class Cards Grid -->
    <div class="grid grid-cols-3 gap-6 mb-6">
        @for($i = 1; $i <= 15; $i++)
        <div class="bg-white rounded-lg border-2 border-orange-400 p-6">
            <div class="text-center mb-4">
                <h3 class="text-4xl font-bold text-teal-900 mb-2">Pry {{ $i }}</h3>
                <p class="text-lg text-gray-600">Primary {{ $i }}</p>
            </div>
            <div class="text-center">
                <a href="{{ route('school.timetable-detail') }}" class="inline-block px-6 py-2 bg-orange-400 text-white rounded-lg hover:bg-orange-500 transition-colors">
                    View
                </a>
            </div>
        </div>
        @endfor
    </div>

    <!-- Footer -->
    <div class="mt-8 text-center">
        <p class="text-sm text-gray-500">COPYRIGHT © 2025</p>
    </div>
</div>
@endsection

