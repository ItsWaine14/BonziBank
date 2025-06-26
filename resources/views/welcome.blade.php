<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bonzi Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gradient-to-b from-[#dcd6f7] to-[#a6b1e1] text-[#1b1b18] min-h-screen">

    <header class="w-full">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 px-9 items-center justify-between">

                <div class="flex h-16 items-center justify-between">
                    <a href="/" class="flex items-center gap-2">
                        <img src="{{ asset('logo.png') }}" alt="Bonzi Bank Logo" class="h-10 w-auto">
                        <span class="text-lg font-medium text-[#424874]">Bonzi Bank</span>
                    </a>
                </div>

                <div class="bg-[#424874] px-12 py-3 block rounded-lg ml-10">
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
        <h1 class="text-2xl font-bold text-center ">Welcome to Bonzi Bank</h1>
        <p class="mt-2 text-sm text-gray-600 text-center ">Secure your future. Start today.</p>

        <div class="m-8 flex flex-wrap gap-10">
            <div class="min-w-[300px] flex-1 rounded-lg bg-[#424874] p-6 shadow-md">
                <div class="flex h-full flex-col justify-between text-left text-lg font-semibold text-[#dcd6f7]">
                <div>
                    <p class="text-4xl">CREATE AN ACCOUNT</p>
                    <br />
                    <p class="text-sm">Get started with a new account and get access to secure banking features such as balance tracking, money transfers, and bill payments.</p>
                </div>
                    <a href="{{ route('register') }}">
                        <button class="mt-6 w-fit self-start rounded-md bg-[#ffca22] px-10 py-2 text-sm font-medium text-[#424874] shadow hover:bg-[#8e9ed6]">
                            Register
                        </button>
                    </a>
                </div>
            </div>

            <div class="min-w-[300px] flex-1 rounded-lg bg-[#424874] p-6 shadow-md">
                <div class="flex h-full flex-col justify-between text-right text-lg font-semibold text-[#dcd6f7]">
                <div>
                    <p class="text-4xl">AVAIL A CARD NOW!</p>
                    <br />
                    <p class="text-sm">Choose your card type, confirm the details, and start using it for secure transactions.</p>
                </div>
                <button class="mt-6 w-fit self-end rounded-md bg-[#ffca22] px-10 py-2 text-sm font-medium text-[#424874] shadow hover:bg-[#8e9ed6]">Get Bonzi Bank Card</button>
                </div>
            </div>
        </div>
    </main>

    @livewireScripts
</body>
</html>
