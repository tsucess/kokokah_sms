<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard') - Kokokah SMS</title>

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
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <x-sidebar :active="$active ?? ''" />

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Header -->
            <header class="bg-white border-b border-gray-200 px-8 py-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-fredoka-one text-gray-900">@yield('page-title')</h1>
                        <p class="text-sm text-gray-600 mt-1">@yield('page-description')</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        @yield('header-actions')
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto">
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-gray-200 px-8 py-4">
                <p class="text-center text-sm text-gray-500">COPYRIGHT © {{ date('Y') }}</p>
            </footer>
        </div>
    </div>

    @stack('scripts')
</body>
</html>

