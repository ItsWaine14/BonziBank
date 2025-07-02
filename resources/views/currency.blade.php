<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <title>Bonzi Bank</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<x-layouts.header />
<body class="bg-gradient-to-b from-[#dcd6f7] to-[#a6b1e1] text-[#1b1b18] dark:from-[#1b1b18] dark:to-[#424874] dark:text-[#dcd6f7] min-h-screen flex flex-col transition-colors">


    <div class="flex items-center justify-center flex-grow">
        @livewire('currency-converter')
    </div>

    @livewireScripts
<x-layouts.footer />
</body>
</html>
