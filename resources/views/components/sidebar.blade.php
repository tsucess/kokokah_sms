@props(['active' => ''])

<<<<<<< HEAD
<aside class="w-64 bg-white border-r border-gray-200 min-h-screen flex flex-col font-sitka">
=======
<aside class="w-56 shrink-0 bg-white border-r border-gray-200 min-h-screen flex flex-col font-sitka">
>>>>>>> 69343b5da6d6a0204eb233e9b2fd135c2635c26a
    <!-- Logo -->
    <div class="p-6">
        <a href="{{ route('superadmin.dashboard') }}" class="flex items-center">
            <img src="{{ asset('images/logo.svg') }}" alt="Kokokah" class="h-8" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
            <span class="text-2xl font-bold" style="display:none;">
                <span class="text-orange-500">Koko</span><span class="text-gray-700">kah</span> 🎓
            </span>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-4 space-y-1">
        <!-- Dashboard -->
        <a href="{{ route('superadmin.dashboard') }}"
<<<<<<< HEAD
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'dashboard' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'dashboard' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
=======
           class="flex items-center px-4 py-3 gap-4 font-medium text-sm  rounded-lg transition-colors {{ $active === 'dashboard' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-gauge  {{ $active === 'dashboard' ? 'text-black' : 'text-primary' }}"></i>
>>>>>>> 69343b5da6d6a0204eb233e9b2fd135c2635c26a
            Dashboard
        </a>

        <!-- Schools -->
        <a href="{{ route('superadmin.schools') }}"
<<<<<<< HEAD
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'schools' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'schools' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
=======
           class="flex items-center px-4 py-3 gap-4 font-medium text-sm  rounded-lg transition-colors {{ $active === 'schools' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
           <i class="fa-solid fa-school {{ $active === 'schools' ? 'text-black' : 'text-primary' }}"></i>
>>>>>>> 69343b5da6d6a0204eb233e9b2fd135c2635c26a
            Schools
        </a>

        <!-- Users Management -->
        <a href="{{ route('superadmin.users') }}"
<<<<<<< HEAD
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'users' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'users' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
=======
           class="flex items-center px-4 py-3 text-sm gap-4 font-medium rounded-lg transition-colors {{ $active === 'users' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-book-open {{ $active === 'users' ? 'text-black' : 'text-primary' }}"></i>
>>>>>>> 69343b5da6d6a0204eb233e9b2fd135c2635c26a
            Users Management
        </a>

        <!-- Analytics -->
        <a href="{{ route('superadmin.analytics') }}"
<<<<<<< HEAD
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'analytics' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'analytics' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
=======
           class="flex items-center font-sitka px-4 py-3 text-sm gap-4 font-medium rounded-lg transition-colors {{ $active === 'analytics' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-chart-area {{ $active === 'analytics' ? 'text-black' : 'text-primary' }}"></i>
>>>>>>> 69343b5da6d6a0204eb233e9b2fd135c2635c26a
            Analytics
        </a>

        <!-- Subscription -->
        <a href="{{ route('superadmin.subscription') }}"
<<<<<<< HEAD
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'subscription' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'subscription' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
=======
           class="flex items-center font-sitka px-4 py-3 text-sm gap-4 font-medium rounded-lg transition-colors {{ $active === 'subscription' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100'}}">
            <i class="fa-solid fa-money-bill-transfer {{ $active === 'subscription' ? 'text-black' : 'text-primary' }}"></i>
>>>>>>> 69343b5da6d6a0204eb233e9b2fd135c2635c26a
            Subscription
        </a>

        <!-- Communication -->
        <a href="{{ route('superadmin.communication') }}"
<<<<<<< HEAD
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'communication' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'communication' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
            </svg>
=======
           class="flex items-center font-sitka px-4 py-3 text-sm gap-4 font-medium rounded-lg transition-colors {{ $active === 'communication' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-comments {{ $active === 'communication' ? 'text-black' : 'text-primary' }}"></i>
>>>>>>> 69343b5da6d6a0204eb233e9b2fd135c2635c26a
            Communication
        </a>

        <!-- Modules & Configuration -->
        <a href="{{ route('superadmin.modules') }}"
<<<<<<< HEAD
           class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors {{ $active === 'modules' ? 'text-gray-900' : 'hover:bg-gray-100' }}" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; {{ $active === 'modules' ? 'background-color: #FDAF22;' : 'color: #004A53;' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg>
            Modules & Configuration
=======
           class="flex items-center font-sitka px-4 py-3 text-sm gap-4 font-medium rounded-lg transition-colors {{ $active === 'modules' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-sliders {{ $active === 'modules' ? 'text-black' : 'text-primary' }}"></i>
            Modules
>>>>>>> 69343b5da6d6a0204eb233e9b2fd135c2635c26a
        </a>
    </nav>

    <!-- Settings -->
    <div class="px-4 pb-4">
        <a href="{{ route('superadmin.settings') }}" class="flex items-center gap-4 px-4 py-3 text-sm font-medium text-black hover:bg-gray-100 rounded-lg transition-colors">
            <i class="fa-solid fa-gear text-black"></i>
            Settings
        </a>
    </div>

    <!-- User Profile -->
    <div class="p-4 border-t border-gray-200">
        <div class="flex items-center">
            <img src="https://ui-avatars.com/api/?name=Culaccino&background=f59e0b&color=fff" alt="User" class="w-10 h-10 rounded-full">
            <div class="ml-3 flex-1">
<<<<<<< HEAD
                <p class="text-sm text-gray-900" style="font-family: 'Sitka', Georgia, serif; font-weight: 400;">Culaccino_</p>
                <p class="text-xs text-gray-500" style="font-family: 'Sitka', Georgia, serif; font-weight: 400;">SA Designer</p>
=======
                <p class="text-sm font-medium text-primary">Culaccino_</p>
                <p class="text-xs text-gray-500">SA Designer</p>
>>>>>>> 69343b5da6d6a0204eb233e9b2fd135c2635c26a
            </div>
            <button class="text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </div>
    </div>

<<<<<<< HEAD
    <!-- Settings -->
    <div class="px-4 pb-4">
        <a href="{{ route('superadmin.settings') }}" class="flex items-center px-4 py-3 text-sm rounded-lg transition-colors hover:bg-gray-100" style="font-family: 'Sitka', Georgia, serif; font-weight: 400; color: #004A53;">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Settings
        </a>
    </div>
=======


>>>>>>> 69343b5da6d6a0204eb233e9b2fd135c2635c26a
</aside>

