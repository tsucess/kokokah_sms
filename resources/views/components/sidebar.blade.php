@props(['active' => ''])

<aside class="w-64 bg-white border-r border-gray-200 min-h-screen flex flex-col font-fredoka">
    <!-- Logo -->
    <div class="p-6">
        <a href="{{ route('superadmin.dashboard') }}" class="flex items-center">
<<<<<<< HEAD
            <img src="{{ asset('images/logo.png') }}" alt="Kokokah" class="h-8" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
            <span class="text-2xl font-fredoka-one" style="display:none;">
=======
            <img src="{{ asset('images/logo.svg') }}" alt="Kokokah" class="h-8" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
            <span class="text-2xl font-bold" style="display:none;">
>>>>>>> myBranch
                <span class="text-orange-500">Koko</span><span class="text-gray-700">kah</span> 🎓
            </span>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-4 space-y-1">
        <!-- Dashboard -->
        <a href="{{ route('superadmin.dashboard') }}"
<<<<<<< HEAD
           class="flex items-center px-4 py-3 text-sm font-fredoka font-medium rounded-lg transition-colors {{ $active === 'dashboard' ? 'text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}" style="{{ $active === 'dashboard' ? 'background-color: #FDAF22;' : '' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
=======
           class="flex items-center px-4 py-3 gap-4 font-semibold text-sm  rounded-lg transition-colors {{ $active === 'dashboard' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-gauge  {{ $active === 'dashboard' ? 'text-black' : 'text-primary' }}"></i>
>>>>>>> myBranch
            Dashboard
        </a>

        <!-- Schools -->
        <a href="{{ route('superadmin.schools') }}"
<<<<<<< HEAD
           class="flex items-center px-4 py-3 text-sm font-fredoka font-medium rounded-lg transition-colors {{ $active === 'schools' ? 'text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}" style="{{ $active === 'schools' ? 'background-color: #FDAF22;' : '' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
=======
           class="flex items-center px-4 py-3 gap-4 font-semibold text-sm  rounded-lg transition-colors {{ $active === 'schools' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
           <i class="fa-solid fa-school {{ $active === 'schools' ? 'text-black' : 'text-primary' }}"></i>
>>>>>>> myBranch
            Schools
        </a>

        <!-- Users Management -->
        <a href="{{ route('superadmin.users') }}"
<<<<<<< HEAD
           class="flex items-center px-4 py-3 text-sm font-fredoka font-medium rounded-lg transition-colors {{ $active === 'users' ? 'text-gray-900' : 'text-gray-700 hover:bg-gray-100' }}" style="{{ $active === 'users' ? 'background-color: #FDAF22;' : '' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
=======
           class="flex items-center px-4 py-3 text-sm gap-4 font-semibold rounded-lg transition-colors {{ $active === 'users' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-book-open {{ $active === 'users' ? 'text-black' : 'text-primary' }}"></i>
>>>>>>> myBranch
            Users Management
        </a>

        <!-- Analytics -->
        <a href="{{ route('superadmin.analytics') }}"
           class="flex items-center px-4 py-3 text-sm gap-4 font-semibold rounded-lg transition-colors {{ $active === 'analytics' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-chart-area {{ $active === 'analytics' ? 'text-black' : 'text-primary' }}"></i>
            Analytics
        </a>

        <!-- Subscription -->
        <a href="{{ route('superadmin.subscription') }}"
           class="flex items-center px-4 py-3 text-sm gap-4 font-semibold rounded-lg transition-colors {{ $active === 'subscription' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100'}}">
            <i class="fa-solid fa-money-bill-transfer {{ $active === 'subscription' ? 'text-black' : 'text-primary' }}"></i>
            Subscription
        </a>

        <!-- Communication -->
        <a href="{{ route('superadmin.communication') }}"
           class="flex items-center px-4 py-3 text-sm gap-4 font-semibold rounded-lg transition-colors {{ $active === 'communication' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-comments {{ $active === 'communication' ? 'text-black' : 'text-primary' }}"></i>
            Communication
        </a>

        <!-- Modules & Configuration -->
        <a href="{{ route('superadmin.modules') }}"
           class="flex items-center px-4 py-3 text-sm gap-4 font-semibold rounded-lg transition-colors {{ $active === 'modules' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-sliders {{ $active === 'modules' ? 'text-black' : 'text-primary' }}"></i>
            Modules & Configuration
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
                <p class="text-sm font-medium text-primary">Culaccino_</p>
                <p class="text-xs text-gray-500">SA Designer</p>
            </div>
            <button class="text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </button>
        </div>
    </div>



</aside>

