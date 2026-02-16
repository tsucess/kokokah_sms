@extends('layouts.teacher', ['active' => 'starboard'])

@section('title', 'Dashboard')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <div class="p-4 md:px-8 space-y-6">
        <header
            class="w-full rounded-2xl h-44 bg-linear-to-r from-purple600 to-purple700 flex items-center justify-between gap-2 px-4 md:px-8">
            <div class="flex flex-col gap-1">
                <h2 class="text-white font-poppins font-semibold text-lg md:text-xl">Teacher Badge Awards</h2>
                <p class="text-white/75 font-poppins text-xs">Recognize and celebrate student achievements</p>
            </div>
            <div class="flex flex-col gap-1 items-center">
                <h2 class="text-white font-poppins font-semibold text-lg md:text-xl">3</h2>
                <p class="text-white/75 font-poppins text-xs">Badges Awarded Today</p>
            </div>
        </header>
        <section class="flex flex-col gap-5 md:flex-row">
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-5 w-full">
                <h3 class="text-black font-sitka text-base font-semibold">Select Students</h3>
                <div class="flex flex-col gap-4">
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <input type="checkbox" name="" id="">
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Aisha Mohammed</p>
                            <span class="text-xs text-user-date font-mulish">Grade 1</span>
                        </div>
                    </div>
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <input type="checkbox" name="" id="">
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Aisha Mohammed</p>
                            <span class="text-xs text-user-date font-mulish">Grade 1</span>
                        </div>
                    </div>
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <input type="checkbox" name="" id="">
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Aisha Mohammed</p>
                            <span class="text-xs text-user-date font-mulish">Grade 1</span>
                        </div>
                    </div>
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <input type="checkbox" name="" id="">
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Aisha Mohammed</p>
                            <span class="text-xs text-user-date font-mulish">Grade 1</span>
                        </div>
                    </div>
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <input type="checkbox" name="" id="">
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Aisha Mohammed</p>
                            <span class="text-xs text-user-date font-mulish">Grade 1</span>
                        </div>
                    </div>
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <input type="checkbox" name="" id="">
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Aisha Mohammed</p>
                            <span class="text-xs text-user-date font-mulish">Grade 1</span>
                        </div>
                    </div>

                </div>

            </div>
            <div class="bg-white rounded-2xl p-6 flex flex-col gap-5 w-full">
                <h3 class="text-black font-sitka text-base font-semibold">Select Badge</h3>
                <div class="flex flex-col gap-4">
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <div class="flex justify-center items-center w-10 h-10 rounded-full bg-green150"><i
                                class="fa-solid fa-star text-yellow100"></i></div>
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Subject Pro</p>
                            <span class="text-xs text-user-date font-mulish">Completed a full topic cluster</span>
                        </div>
                    </div>
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <div class="flex justify-center items-center w-10 h-10 rounded-full bg-green150"><i
                                class="fa-solid fa-star text-yellow100"></i></div>
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Subject Pro</p>
                            <span class="text-xs text-user-date font-mulish">Completed a full topic cluster</span>
                        </div>
                    </div>
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <div class="flex justify-center items-center w-10 h-10 rounded-full bg-green150"><i
                                class="fa-solid fa-star text-yellow100"></i></div>
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Subject Pro</p>
                            <span class="text-xs text-user-date font-mulish">Completed a full topic cluster</span>
                        </div>
                    </div>
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <div class="flex justify-center items-center w-10 h-10 rounded-full bg-blue700"><img
                                src="/images/creative-icon.png" alt="" class="w-5 h-5"></div>
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Creative Thinker</p>
                            <span class="text-xs text-user-date font-mulish">Outstanding creative work</span>
                        </div>
                    </div>
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <div class="flex justify-center items-center w-10 h-10 rounded-full bg-blue700"><img
                                src="/images/creative-icon.png" alt="" class="w-5 h-5"></div>
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Creative Thinker</p>
                            <span class="text-xs text-user-date font-mulish">Outstanding creative work</span>
                        </div>
                    </div>
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <div class="flex justify-center items-center w-10 h-10 rounded-full bg-orange100"><img
                                src="/images/reading-icon.png" alt="" class="w-4 h-5"></div>
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Reading Champion</p>
                            <span class="text-xs text-user-date font-mulish">Completed 10 books this term</span>
                        </div>
                    </div>
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <div class="flex justify-center items-center w-10 h-10 rounded-full bg-accent"><i
                                class="fa-solid fa-handshake text-yellow150"></i></div>
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Team Player</p>
                            <span class="text-xs text-user-date font-mulish">Outstanding teamwork skills</span>
                        </div>
                    </div>
                    <div class="rounded-lg border border-grey200 p-4 flex items-center gap-4">
                        <div class="flex justify-center items-center w-10 h-10 rounded-full bg-accent"><i
                                class="fa-solid fa-handshake text-yellow150"></i></div>
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Team Player</p>
                            <span class="text-xs text-user-date font-mulish">Outstanding teamwork skills</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="bg-white rounded-2xl p-6 flex flex-col gap-5">
            <h3 class="text-black font-sitka text-base font-semibold">Recent Awards (Today)</h3>
            <div class="flex flex-col gap-4">
                <div class="rounded-lg bg-blue50 p-4 flex items-center gap-4 justify-between">
                    <div class="flex items-center gap-4">
                        <div class="flex justify-center items-center w-10 h-10 rounded-full bg-green150 shrink-0"><i
                                class="fa-solid fa-star text-yellow100"></i></div>
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Math Whiz awarded to Aisha Mohammed
                            </p>
                            <span class="text-xs text-user-date font-mulish">15 minutes ago</span>
                        </div>
                    </div>
                    <button
                        class="border border-primary/40 text-xs text-primary font-inter px-5 py-1 rounded-sm">Sent</button>
                </div>
                <div class="rounded-lg bg-blue50 p-4 flex items-center gap-4 justify-between">
                    <div class="flex items-center gap-4">
                        <div class="flex justify-center items-center w-10 h-10 rounded-full bg-green150 shrink-0"><i
                                class="fa-solid fa-star text-yellow100"></i></div>
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Read Champion
                            </p>
                            <span class="text-xs text-user-date font-mulish">15 minutes ago</span>
                        </div>
                    </div>
                    <button
                        class="border border-primary/40 text-xs text-primary font-inter px-5 py-1 rounded-sm">Sent</button>
                </div>
                <div class="rounded-lg bg-blue50 p-4 flex items-center gap-4 justify-between">
                    <div class="flex items-center gap-4">
                        <div class="flex justify-center items-center w-10 h-10 rounded-full bg-green150 shrink-0"><i
                                class="fa-solid fa-star text-yellow100"></i></div>
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Team Player
                            </p>
                            <span class="text-xs text-user-date font-mulish">15 minutes ago</span>
                        </div>
                    </div>
                    <button
                        class="border border-primary/40 text-xs text-primary font-inter px-5 py-1 rounded-sm">Sent</button>
                </div>
                <div class="rounded-lg bg-blue50 p-4 flex items-center gap-4 justify-between">
                    <div class="flex items-center gap-4">
                        <div class="flex justify-center items-center w-10 h-10 rounded-full bg-green150 shrink-0"><i
                                class="fa-solid fa-star text-yellow100"></i></div>
                        <div class="">
                            <p class="text-black50 text-sm font-sitka font-semibold">Science Star awarded to Chidi Okafor
                            </p>
                            <span class="text-xs text-user-date font-mulish">1 hour ago</span>
                        </div>
                    </div>
                    <button
                        class="border border-primary/40 text-xs text-primary font-inter px-5 py-1 rounded-sm">Sent</button>
                </div>
            </div>
        </div>

    </div>

@endsection
