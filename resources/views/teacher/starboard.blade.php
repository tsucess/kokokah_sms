@extends('layouts.teacher', ['active' => 'starboard'])

@section('title', 'Dashboard')
@section('page-title', 'Welcome to Kokokah')

@section('content')
    <style>
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 50;
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            max-width: 600px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
        }
    </style>
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
            <h3 class="text-black font-sitka text-base font-semibold">Custom Achievement Description</h3>
            <div class="flex flex-col gap-5">
                <div class="border-[1.5px] border-primary rounded-xl relative px-4 py-3 mt-3 w-full">
                    <label class="text-sm font-medium text-primary bg-white px-1 py-0.5 absolute left-5 -top-3">Add a
                        personalized message about why this badge is being awarded</label>
                    <textarea class="w-full outline-none text-primary text-sm resize-none" placeholder="Type...">
                </textarea>
                </div>
                <div class="flex items-center gap-3 justify-between">
                    <p class="text-primary font-sitka text-sm font-medium">Awarding <span class="text-secondary">Subject
                            Pro</span> to <span class="text-secondary">1</span> student(s)</p>
                    <button onclick="openBadgeModal()"
                        class="px-6 py-2 rounded-lg font-sitka bg-accent text-black text-sm hover:bg-accent-hover font-semibold transition-colors">Award
                        Badge</button>
                </div>
            </div>
        </div>
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

    <div id="badgeModal" class="modal-overlay bg-primary/50 mb-0">
        <div class="modal-content p-8">

            <div class="flex justify-end mb-6">
                <button onclick="closeBadgeModal()" class="text-gray-700 hover:text-gray-900 transition-colors">
                    <i class="fa-regular fa-circle-xmark fa-lg"></i>
                </button>
            </div>

            <div class="flex flex-col gap-3 items-center">
                <div class="flex items-center gap-3">
                    <img src="/images/confetti-icon.png" alt="">
                    <h2 class="text-xl font-fredoka text-primary font-semibold">Badges Awarded!</h2>
                </div>
                <div class="bg-green250 w-20 h-20 rounded-full flex items-center justify-center">
                    <i class="fa-regular fa-circle-check fa-2xl text-white fa-beat-fade"></i>
                </div>
                <div class="flex flex-col gap-1 items-center">
                    <h3 class="text-black font-sitka font-semibold text-base text-center">Successfully awarded Math Whiz to </h3>
                    <p class="text-black font-inter text-xs text-center">Aisha Mohammed</p>
                </div>
                <p class="text-black font-inter text-sm text-center">Student and parents have been notified</p>

            </div>


        </div>

    </div>
    </div>

    @push('scripts')
        <script>
            function openBadgeModal() {
                document.getElementById('badgeModal').classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeBadgeModal() {
                document.getElementById('badgeModal').classList.remove('active');
                document.body.style.overflow = 'auto';
            }

            // Close modal when clicking outside
            document.addEventListener('click', function(event) {
                const badgeModal = document.getElementById('badgeModal');

                if (event.target === badgeModal) {
                    closeMessageModal();
                }
            });
        </script>
    @endpush

@endsection
