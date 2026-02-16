@extends('layouts.teacher', ['active' => 'class'])

@section('title', 'Class')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-4 md:px-8 space-y-6">
        <header
            class="bg-blue700 rounded-2xl px-6 py-6 md:py-12 md:px-8 lg:px-12 flex flex-col gap-10 md:gap-15 lg:gap-9 lg:py-10 relative">
            <h2 class="text-white font-poppins text-base md:text-xl font-semibold">Welcome back, Mrs. Ayodele Irepodun!</h2>
            <span class="text-xs text-white/75 font-poppins">You teach $ classes this term.</span>
            <img src="/images/teacher-illustration.png" alt=""
                class="absolute -top-2 md:top-5 -right-3 md:right-5 w-50 md:w-80">
        </header>
        

    </div>

@endsection
