<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard') - Kokokah</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="font-sans antialiased bg-gray-50">
    <div class="flex min-h-screen">

        <!-- Mobile Sidebar -->
        <div id="mobileSidebar" class="fixed inset-0 z-40 hidden md:hidden">

            <!-- Overlay -->
            <div id="sidebarOverlay" class="absolute inset-0 bg-black/50"></div>

            <!-- Sidebar Panel -->
            <div class="relative w-64 bg-white h-full shadow-lg">
                <x-teacher-sidebar :active="$active ?? ''" />
            </div>
        </div>

        <!-- Desktop Sidebar -->
        <div class="hidden md:flex">
            <x-teacher-sidebar :active="$active ?? ''" />
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-x-hidden">
            <!-- Top Header -->
            <header class="bg-superadmin-bg border-b border-gray-200 px-4 md:px-8 py-4 relative">
                <button id="openMenu" class="absolute top-4 right-4 z-50 md:hidden">
                    <i class="fa-solid fa-bars fa-lg"></i>
                </button>
                <div class="flex flex-col items-start gap-4 justify-between md:flex-row md:items-center">
                    <div class="">
                        <h1 class="text-lg md:text-xl font-semibold text-primary font-fredoka">@yield('page-title')</h1>
                    </div>
                    <div class="flex items-center space-x-4 self-end">
                        <!-- Notification Icon -->
                        <button class="relative p-2 bg-purple300 hover:bg-gray-100 rounded-full">
                            <svg class="w-4 h-4 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span
                                class="absolute top-2 right-2 w-1 h-1 md;w-1.5 md:h-1.5 bg-red-500 rounded-full"></span>
                        </button>

                        <!-- User Profile -->
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-8 h-8 md:w-10 md:h-10 bg-accent rounded-full flex items-center justify-center shrink-0">
                                <span class="text-white font-semibold text-sm">WI</span>
                            </div>
                            <div class="text-left">
                                <p class="text-sm font-semibold text-black50 uppercase">WINNER'S INTERNATIONAL ACADEMY
                                </p>
                                <p class="text-xs text-black50">Winner Effiong (School Owner)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto bg-gray-50">
                @yield('content')
            </main>
        </div>
    </div>
    <script>
        const openMenu = document.getElementById('openMenu');
        const closeMenu = document.getElementById('closeMenu');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');


        openMenu.addEventListener('click', () => {
            mobileSidebar.classList.remove('hidden');
        });

        closeMenu.addEventListener('click', () => {
            mobileSidebar.classList.add('hidden');
        });

        sidebarOverlay.addEventListener('click', () => {
            mobileSidebar.classList.add('hidden');
        });
    </script>

    @stack('scripts')
</body>

</html>
