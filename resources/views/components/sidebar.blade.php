@props(['active' => ''])

<aside class="w-56 shrink-0 bg-white border-r border-gray-200 min-h-screen flex flex-col font-sitka">
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
           class="flex items-center px-4 py-3 gap-4 font-medium text-sm  rounded-lg transition-colors {{ $active === 'dashboard' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-gauge  {{ $active === 'dashboard' ? 'text-black' : 'text-primary' }}"></i>
            Dashboard
        </a>

        <!-- Schools -->
        <a href="{{ route('superadmin.schools') }}"
           class="flex items-center px-4 py-3 gap-4 font-medium text-sm  rounded-lg transition-colors {{ $active === 'schools' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
           <i class="fa-solid fa-school {{ $active === 'schools' ? 'text-black' : 'text-primary' }}"></i>
            Schools
        </a>

        <!-- Users Management -->
        <a href="{{ route('superadmin.users') }}"
           class="flex items-center px-4 py-3 text-sm gap-4 font-medium rounded-lg transition-colors {{ $active === 'users' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-book-open {{ $active === 'users' ? 'text-black' : 'text-primary' }}"></i>
            Users Management
        </a>

        <!-- Analytics -->
        <a href="{{ route('superadmin.analytics') }}"
           class="flex items-center font-sitka px-4 py-3 text-sm gap-4 font-medium rounded-lg transition-colors {{ $active === 'analytics' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-chart-area {{ $active === 'analytics' ? 'text-black' : 'text-primary' }}"></i>
            Analytics
        </a>

        <!-- Starboard -->
        <a href="{{ route('superadmin.starboard') }}"
           class="flex items-center font-sitka px-4 py-3 text-sm gap-4 font-medium rounded-lg transition-colors {{ $active === 'starboard' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-regular fa-star {{ $active === 'starboard' ? 'text-black' : 'text-primary' }}"></i>
            Starboard
        </a>

        <!-- Subscription -->
        <a href="{{ route('superadmin.subscription') }}"
           class="flex items-center font-sitka px-4 py-3 text-sm gap-4 font-medium rounded-lg transition-colors {{ $active === 'subscription' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100'}}">
            <i class="fa-solid fa-money-bill-transfer {{ $active === 'subscription' ? 'text-black' : 'text-primary' }}"></i>
            Subscription
        </a>

        <!-- Communication -->
        <a href="{{ route('superadmin.communication') }}"
           class="flex items-center font-sitka px-4 py-3 text-sm gap-4 font-medium rounded-lg transition-colors {{ $active === 'communication' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-comments {{ $active === 'communication' ? 'text-black' : 'text-primary' }}"></i>
            Communication
        </a>

        <!-- Modules & Configuration -->
        <a href="{{ route('superadmin.modules') }}"
           class="flex items-center font-sitka px-4 py-3 text-sm gap-4 font-medium rounded-lg transition-colors {{ $active === 'modules' ? 'bg-accent text-black' : 'text-primary hover:bg-gray-100' }}">
            <i class="fa-solid fa-sliders {{ $active === 'modules' ? 'text-black' : 'text-primary' }}"></i>
            Modules
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

