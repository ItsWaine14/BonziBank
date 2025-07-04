<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Bonzi Bank')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
    @livewireStyles
</head>
<body class="bg-gradient-to-b from-[#dcd6f7] to-[#a6b1e1] text-[#1b1b18] dark:from-[#1b1b18] dark:to-[#424874] dark:text-[#dcd6f7] min-h-screen flex flex-col transition-colors">

    <x-layouts.header />

    <main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 mt-10 flex-grow">
        @yield('content')
    </main>

    <x-layouts.footer />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @livewireScripts
    @fluxAppearance

    @stack('scripts')
</body>
</html>
