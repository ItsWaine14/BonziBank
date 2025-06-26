<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bonzi Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-[#dcd6f7] text-[#1b1b18] min-h-screen">

    <header class="w-full">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">

                <div class="flex h-16 items-center justify-between">
                    <a href="/" class="flex items-center gap-2">
                        <img src="{{ asset('logo.png') }}" alt="Bonzi Bank Logo" class="h-10 w-auto">
                        <span class="text-lg font-medium text-[#424874]">Bonzi Bank</span>
                    </a>
                </div>

                <div class="bg-indigo-900 px-15 py-3 block rounded-lg">
                    <nav aria-label="Global">
                        <ul class="flex items-center gap-15 text-sm">
                            <li><a class="text-[#dcd6f7] hover:text-[#ffca22]" href="#">About</a></li>
                            <li><a class="text-[#dcd6f7] hover:text-[#ffca22]" href="#">Deals</a></li>
                            <li><a class="text-[#dcd6f7] hover:text-[#ffca22]" href="#">Cards</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        @if (Route::has('login'))
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md bg-[#ffca22] px-5 py-2.5 text-sm font-medium text-[#424874] shadow-sm"
                                >
                                    Dashboard
                                </a>
                                {{-- Optional: Livewire logout --}}
                                <form method="POST" action="{{ route('logout') }}" class="hidden sm:flex">
                                    @csrf
                                    <button type="submit" class="rounded-md bg-[#424874] px-5 py-2.5 text-sm font-medium text-[#ffca22]">
                                        Logout
                                    </button>
                                </form>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="rounded-md bg-[#ffca22] px-5 py-2.5 text-sm font-medium text-[#424874] shadow-sm"
                                >
                                    Login
                                </a>

                                @if (Route::has('register'))
                                    <div class="hidden sm:flex">
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md bg-[#424874] px-5 py-2.5 text-sm font-medium text-[#ffca22]"
                                        >
                                            Register
                                        </a>
                                    </div>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 mt-10">
        <h1 class="text-2xl font-bold">Welcome to Bonzi Bank</h1>
        <p class="mt-2 text-sm text-gray-600">Secure your future. Start today.</p>
    </main>

    @livewireScripts
</body>
</html>
