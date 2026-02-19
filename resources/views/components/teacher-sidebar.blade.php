@props(['active' => ''])

<aside class="w-64 bg-white border-r border-gray-200 min-h-screen flex flex-col shrink-0">
    <!-- Logo -->
    <div class="p-6 flex justify-between items-center">
        <a href="{{ route('teacher.dashboard') }}" class="flex items-center">
             <img src="{{ asset('images/logo.svg') }}" alt="Kokokah" class="h-8" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
            <span class="text-2xl font-bold" style="display:none;">
                <span class="text-orange-500">Koko</span><span class="text-gray-700">kah</span> 🎓
            </span>
        </a>
        <button id='closeMenu' class="md:hidden"><i class="fa-solid fa-xmark fa-lg"></i></button>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-4 space-y-1">
        <!-- Dashboard -->
        <a href="{{ route('teacher.dashboard') }}"
           class="flex items-center px-4 py-3 gap-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'dashboard' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-gauge {{ $active === 'dashboard' ? ' text-black' : 'text-primary' }}"></i>
            Dashboard
        </a>

        <!-- My Class -->
        <a href="{{ route('teacher.class') }}"
           class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'class' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
           <i class="fa-solid fa-chalkboard-user {{ $active === 'class' ? ' text-black' : 'text-primary' }}"></i>
            My Class
        </a>

        <!-- Attendance -->
        <a href="{{ route('teacher.attendance') }}"
           class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'attendance' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-user-check {{ $active === 'attendance' ? ' text-black' : 'text-primary' }}"></i>
            Attendance
        </a>

        <!--Result Input -->
        <a href="{{ route('teacher.result') }}"
           class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'result' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-square-poll-horizontal {{ $active === 'result' ? ' text-black' : 'text-primary' }}"></i>
            Result Input
        </a>

        <!-- Starboard -->
        <a href="{{ route('teacher.starboard') }}"
           class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'starboard' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-ranking-star {{ $active === 'starboard' ? ' text-black' : 'text-primary' }}"></i>
            Starboard
        </a>

        <!-- Messaging -->
        <a href="{{ route('teacher.messaging') }}"
           class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'messaging' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
           Messaging
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </div>
    </div>
</aside>

