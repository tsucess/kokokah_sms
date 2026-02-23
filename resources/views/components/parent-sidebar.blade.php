@props(['active' => ''])

<aside class="w-64 bg-white border-r border-gray-200 min-h-screen flex flex-col shrink-0">
    <!-- Logo -->
    <div class="p-6 flex justify-between items-center">
        <a href="{{ route('parent.dashboard') }}" class="flex items-center">
            <img src="{{ asset('images/logo.svg') }}" alt="Kokokah" class="h-8"
                onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
            <span class="text-2xl font-bold" style="display:none;">
                <span class="text-orange-500">Koko</span><span class="text-gray-700">kah</span> 🎓
            </span>
        </a>
        <button id='closeMenu' class="md:hidden"><i class="fa-solid fa-xmark fa-lg"></i></button>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-4 space-y-1">
        <!-- Dashboard -->
        <a href="{{ route('parent.dashboard') }}"
            class="flex items-center px-4 py-3 gap-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'dashboard' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-gauge {{ $active === 'dashboard' ? ' text-black' : 'text-primary' }}"></i>
            Dashboard
        </a>

        <!-- Child-Information -->
        <a href="{{ route('parent.child-information') }}"
            class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'child-information' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
           Child-Information
        </a>

        <!-- Results -->
        <a href="{{ route('parent.result') }}"
            class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'result' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i
                class="fa-solid fa-square-poll-horizontal {{ $active === 'result' ? ' text-black' : 'text-primary' }}"></i>
            Results
        </a>

        <!-- Attendance -->
        <a href="{{ route('parent.attendance-summary') }}"
            class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'attendance-summary' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i
                class="fa-solid fa-user-check {{ $active === 'attendance-summary' ? ' text-black' : 'text-primary' }}"></i>
            Attendance Summary
        </a>

        <!--Fees -->
        <a href="{{ route('parent.fees') }}"
            class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'fees' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Fees
        </a>

        <!-- Starboard -->
        <a href="{{ route('parent.starboard') }}"
            class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'starboard' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-ranking-star {{ $active === 'starboard' ? ' text-black' : 'text-primary' }}"></i>
            Starboard
        </a>

        <!-- Announcement -->
        <a href="{{ route('parent.announcements') }}"
            class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'announcements' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
            Announcements
        </a>

    </nav>

    <!-- User Profile at Bottom -->
    <div class="p-4 border-t border-gray-200">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-teal-900 rounded-full flex items-center justify-center">
                <span class="text-white font-semibold text-sm">C</span>
            </div>
            <div class="flex-1">
                <p class="text-sm font-semibold text-gray-900">Culaccino_</p>
                <p class="text-xs text-gray-600">UI Designer</p>
            </div>
            <button class="p-1 hover:bg-gray-100 rounded">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </div>
    </div>
</aside>
