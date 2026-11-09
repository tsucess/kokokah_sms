<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard') - Kokokah SMS</title>

    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&family=Fredoka+One&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Sitka';
            src: local('Sitka Text'), local('Sitka Display'), local('Sitka Heading'), local('Sitka Subheading'), local('Sitka Small'), local('Sitka Banner');
            font-weight: 400;
            font-style: normal;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="font-sitka antialiased bg-background">
   <div class="flex min-h-screen h-screen overflow-hidden">

    <!-- Sidebar -->
    <x-sidebar :active="$active ?? ''" />

    <!-- Main Content -->
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden">

        <!-- Header (does not scroll) -->
          <header class="shrink-0 bg-white border-b border-gray-200 px-4 md:px-8 py-6">
            <div class="flex items-center justify-between">

                <div class="flex items-center gap-3">
                    <!-- Mobile Menu Button -->
                    <button id="sidebar-toggle"
                        class="lg:hidden text-primary p-2 rounded-lg hover:bg-gray-100">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>

                    <div class="flex flex-col gap-2">
                        <h1 class="font-fredoka text-h6 text-primary">
                            @yield('page-title')
                        </h1>
                        <p class="text-body4 text-primary">
                            @yield('page-description')
                        </p>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    @yield('header-actions')
                </div>

            </div>
        </header>

        <!-- Only this section scrolls -->
        <main class="flex-1 min-h-0 bg-superadmin-bg overflow-y-auto overflow-x-hidden">
            @yield('content')
        </main>

        <!-- Footer (does not scroll) -->
        <footer class="shrink-0 bg-white border-t border-gray-200 px-8 py-4">
            <p class="text-center text-sm text-gray-500">
                COPYRIGHT © {{ date('Y') }}
            </p>
        </footer>

    </div>
</div>

    @stack('scripts')
    <script>
        const sidebar = document.getElementById('sidebar');
const sidebarToggle = document.getElementById('sidebar-toggle');

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-full');
});
    </script>
</body>
</html>

