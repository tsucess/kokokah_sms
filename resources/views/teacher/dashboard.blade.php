@extends('layouts.teacher', ['active' => 'dashboard'])

@section('title', 'Dashboard')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-4 md:px-8 space-y-6">
    <header class="bg-blue700 rounded-2xl px-6 py-6 md:py-12 md:px-8 lg:px-12 flex flex-col gap-10 relative">
        <span class="text-xs text-white/75 font-poppins">September 4,  2023</span>
        <h2 class="text-white font-poppins text-base md:text-2xl font-semibold">Welcome back, Mrs. Ayodele Irepodun!</h2>
        <img src="/images/teacher-illustration.png" alt="" class="absolute -top-2 md:-top-4 -right-3 w-50 md:w-80">
    </header>
</div>

@endsection
