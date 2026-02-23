@extends('layouts.parent', ['active' => 'child-information'])

@section('title', 'Child Information')
@section('page-title', 'Welcome to Kokokah')

@section('content')
<div class="p-4 md:px-8 space-y-6">
<header
            class="bg-linear-to-r from-purple600 from-80%  to-purple700 to-95% rounded-2xl px-6 py-10 shadow-headerBox sm:py-12 md:px-8 lg:px-12 flex items-center relative">
            <div>
                <h2 class="text-white font-poppins text-base md:text-2xl font-semibold">Child Information</h2>
                <span class="text-xs text-white/75 font-poppins">Always stay updated in your student portal</span>
            </div>

            <img src="/images/parent-child-info-illustration.png" alt="" class="absolute right-0 sm:right-20 w-20 sm:w-40 top-8 sm:top-0">
        </header>
        <section class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
            <article class="bg-white rounded-2xl p-4 md:p-6 flex flex-col gap-4">
                <img src="/images/avatar.png" alt="" class="w-20 h-20 rounded-full mx-auto">
                <div class="flex flex-col gap-1 items-center">
                    <h3 class="text-primary font-fredoka font-semibold text-lg">David Johnson</h3>
                    <p class="text-primary font-sitka text-sm">Primary 1A</p>
                </div>
                <div class="flex items-center justify-between gap-2">
                    <p class="text-primary font-sitka text-sm font-semibold">Session 2023/2024</p>
                    <p class="text-primary font-sitka text-sm flex items-center gap-1 font-semibold"><span>.</span> Frist Term</p>
                </div>
                <button class="text-black font-sitka font-semibold text-sm bg-accent rounded px-4 py-3 hover:bg-accent-hover"> View Profile</button>
            </article>
            <article class="bg-white rounded-2xl p-4 md:p-6 flex flex-col gap-4">
                <img src="/images/avatar.png" alt="" class="w-20 h-20 rounded-full mx-auto">
                <div class="flex flex-col gap-1 items-center">
                    <h3 class="text-primary font-fredoka font-semibold text-lg">David Johnson</h3>
                    <p class="text-primary font-sitka text-sm">Primary 1A</p>
                </div>
                <div class="flex items-center justify-between gap-2">
                    <p class="text-primary font-sitka text-sm font-semibold">Session 2023/2024</p>
                    <p class="text-primary font-sitka text-sm flex items-center gap-1 font-semibold"><span>.</span> Frist Term</p>
                </div>
                <button class="text-black font-sitka font-semibold text-sm bg-accent rounded px-4 py-3 hover:bg-accent-hover"> View Profile</button>
            </article>
            <article class="bg-white rounded-2xl p-4 md:p-6 flex flex-col gap-4">
                <img src="/images/avatar.png" alt="" class="w-20 h-20 rounded-full mx-auto">
                <div class="flex flex-col gap-1 items-center">
                    <h3 class="text-primary font-fredoka font-semibold text-lg">David Johnson</h3>
                    <p class="text-primary font-sitka text-sm">Primary 1A</p>
                </div>
                <div class="flex items-center justify-between gap-2">
                    <p class="text-primary font-sitka text-sm font-semibold">Session 2023/2024</p>
                    <p class="text-primary font-sitka text-sm  font-semibold"><span class="align-middle">.</span> Frist Term</p>
                </div>
                <button class="text-black font-sitka font-semibold text-sm bg-accent rounded px-4 py-3 hover:bg-accent-hover"> View Profile</button>
            </article>
        </section>
</div>

@endsection
