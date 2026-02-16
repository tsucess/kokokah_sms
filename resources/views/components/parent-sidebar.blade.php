@props(['active' => ''])

<aside class="w-64 bg-white border-r border-gray-200 min-h-screen flex flex-col shrink-0">
    <!-- Logo -->
    <div class="p-6">
        <a href="{{ route('parent.dashboard') }}" class="flex items-center">
             <img src="{{ asset('images/logo.svg') }}" alt="Kokokah" class="h-8" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
            <span class="text-2xl font-bold" style="display:none;">
                <span class="text-orange-500">Koko</span><span class="text-gray-700">kah</span> 🎓
            </span>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-4 space-y-1">
        <!-- Dashboard -->
        <a href="{{ route('parent.dashboard') }}"
           class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'dashboard' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
        </a>

        <!-- Child Information -->
        <a href="{{ route('parent.child-information') }}"
           class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'child-information' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            Child Information
        </a>

        <!-- Attendance -->
        <a href="{{ route('parent.attendance') }}"
           class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'attendance' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-user-clock {{ $active === 'attendance' ? ' text-black' : 'text-primary' }}"></i>
            Attendance
        </a>

        <!--Results -->
        <a href="{{ route('parent.result') }}"
           class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'result' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-square-poll-horizontal {{ $active === 'result' ? ' text-black' : 'text-primary' }}"></i>
            Results
        </a>

        <!-- Fees & Payments -->
        <a href="{{ route('parent.fees') }}"
           class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'fees' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Fees & Payments
        </a>

        <!-- Starboard -->
        <a href="{{ route('parent.starboard') }}"
           class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'starboard' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-ranking-star {{ $active === 'starboard' ? ' text-black' : 'text-primary' }}"></i>
            Starboard
        </a>

        <!-- Message -->
        <a href="{{ route('parent.message') }}"
           class="flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors {{ $active === 'message' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
            Message
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

