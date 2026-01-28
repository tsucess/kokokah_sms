<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Authentication') - Kokokah SMS</title>

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
<body class="font-sitka antialiased">
    <div class="min-h-screen flex flex-col" style="background: linear-gradient(to bottom, white 0%, white 48%, #FDAF22 48%, #FDAF22 100%);">
        <!-- Logo and Header -->
        <div class="w-full flex justify-center pt-8 pb-6">
            <div class="text-center">
                <img src="{{ asset('images/logo.svg') }}" alt="Kokokah" class="h-24 mx-auto mb-4">
                <h1 class="text-2xl font-bold text-teal-800" style="font-family: 'Fredoka One', sans-serif;">
                    Kokokah School Management System
                </h1>
                <p class="text-gray-600 mt-2">@yield('subtitle', 'Learning without Limits. Skills for tomorrow')</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex items-start justify-center px-4 pb-16">
            <div class="w-full max-w-4xl">
                @yield('content')
            </div>
        </div>
    </div>

    @stack('scripts')
</body>
</html>

