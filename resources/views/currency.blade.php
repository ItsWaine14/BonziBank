<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bonzi Bank</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<x-layouts.header />
<body class="bg-[#dcd6f7] text-[#1b1b18] - min-h-screen flex flex-col">

    <div class="flex items-center justify-center flex-grow">
        @livewire('currency-converter')
    </div>

    @livewireScripts
<x-layouts.footer />
</body>
</html>
