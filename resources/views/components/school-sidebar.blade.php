@props(['active' => ''])

<aside class="w-64 bg-white border-r border-gray-200 min-h-screen flex flex-col" style="font-family: 'Sitka', Georgia, serif;">
    <!-- Logo -->
    <div class="p-6">
        <a href="{{ route('school.dashboard') }}" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Kokokah" class="h-8" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
            <span class="text-2xl font-bold" style="display:none;">
                <span class="text-orange-500">Koko</span><span class="text-gray-700">kah</span> 🎓
            </span>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-4 space-y-1">
        <!-- Dashboard -->
        <a href="{{ route('school.dashboard') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'dashboard' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'dashboard' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
        </a>

        <!-- Student -->
        <a href="{{ route('school.students') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'student' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'student' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            Student
        </a>

        <!-- Staff -->
        <a href="{{ route('school.staff') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'staff' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'staff' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Staff
        </a>

        <!-- Parent -->
        <a href="{{ route('school.parents') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'parent' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'parent' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            Parent
        </a>

        <!-- Fees -->
        <a href="{{ route('school.fees') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'fees' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'fees' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            Fees
        </a>

        <!-- Classes -->
        <a href="{{ route('school.classes') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'classes' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'classes' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
            Classes
        </a>

        <!-- Messaging -->
        <a href="{{ route('school.messaging') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'messaging' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'messaging' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
            Messaging
        </a>

        <!-- Timetable -->
        <a href="{{ route('school.timetable') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'timetable' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'timetable' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Timetable
        </a>

        <!-- Broadsheet -->
        <a href="{{ route('school.broadsheet') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'broadsheet' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'broadsheet' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Broadsheet
        </a>

        <!-- Lesson Plan -->
        <a href="{{ route('school.lesson-plan') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'lesson-plan' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'lesson-plan' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            Lesson Plan
        </a>

        <!-- Expenses -->
        <a href="{{ route('school.expenses') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'expenses' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'expenses' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Expenses
        </a>

        <!-- Inventory -->
        <a href="{{ route('school.inventory') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'inventory' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'inventory' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
            </svg>
            Inventory
        </a>

        <!-- Configuration -->
        <a href="{{ route('school.configuration') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'configuration' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'configuration' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg>
            Configuration
        </a>

        <!-- Settings -->
        <a href="{{ route('school.settings') }}"
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'settings' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'settings' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Settings
        </a>
    </nav>

    <!-- User Profile -->
    <div class="p-4 border-t border-gray-200">
        <div class="flex items-center">
            <img src="https://ui-avatars.com/api/?name=Culaccino&background=f59e0b&color=fff" alt="User" class="w-10 h-10 rounded-full">
            <div class="ml-3 flex-1">
                <p class="text-sm text-gray-900" style="font-family: 'Sitka', Georgia, serif; font-weight: 400;">Culaccino_</p>
                <p class="text-xs text-gray-500" style="font-family: 'Sitka', Georgia, serif; font-weight: 400;">SA Designer</p>
            </div>
            <button class="text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </div>
    </div>
</aside>

