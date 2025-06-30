<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bonzi Bank - About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>


<body class="bg-gradient-to-b from-[#dcd6f7] to-[#a6b1e1] text-[#1b1b18] min-h-screen flex flex-col">

<x-layouts.header />

    <main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 mt-10 flex-grow">
        <div class="m-8 flex flex-wrap gap-10">
            <div class="min-w-lg flex-1 rounded-lg p-4">
                <img src="{{ asset('devs.png') }}" alt="Developers">
            </div>

            <div class="min-w-lg flex-1 rounded-lg p-4">
                <p class="text-center text-3xl font-bold">Meet the Devs!</p>
                <br>
                <p class="text-lg/8"><b>Bonzi Bank</b> is a modern web banking platform developed by <b>Jwaine Bravo</b>,
                    <b>Kyle Francisco</b>, and <b>Matthew Nuyda</b> as part of their final project for
                    Application Development. Built with a focus on simplicity, security, and
                    usability, Bonzi Bank showcases their commitment to delivering real-world
                    digital solutions.</p>
            </div>

        </div>
    </main>

<x-layouts.footer />


</body>
</html>
