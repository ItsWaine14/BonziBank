<header class="w-full">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 px-9 items-center justify-between">

            <!-- Logo and Name -->
            <div class="flex h-16 items-center justify-between">
                <a href="/" class="flex items-center gap-2">
                    <img src="{{ asset('logo.png') }}" alt="Bonzi Bank Logo" class="h-10 w-auto">
                    <span class="text-lg font-medium text-[#424874] dark:text-[#dcd6f7]">Bonzi Bank</span>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="bg-[#424874] dark:bg-[#2c2f4e] px-12 py-3 block rounded-lg ml-10">
                <nav aria-label="Global">
                    <ul class="flex items-center gap-15 text-sm">
                        <li><a class="text-[#dcd6f7] hover:text-[#ffca22]" href="{{ route('about') }}">About Us</a></li>
                        <li><a class="text-[#dcd6f7] hover:text-[#ffca22]" href="{{ route('currency') }}">Conversion</a></li>
                        <li><a class="text-[#dcd6f7] hover:text-[#ffca22]" href="{{ route('card') }}">Cards</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Auth Buttons -->
            <div class="flex items-center gap-4">
                <div class="sm:flex sm:gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="rounded-md bg-[#ffca22] px-5 py-2.5 text-sm font-medium text-[#424874] shadow-sm hover:bg-[#dcd6f7]"
                            >
                                Dashboard
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="hidden sm:flex">
                                @csrf
                                <button type="submit" class="rounded-md bg-[#424874] dark:bg-[#dcd6f7] px-5 py-2.5 text-sm font-medium text-[#dcd6f7] dark:text-[#1b1b18] cursor-pointer hover:bg-[#ffca22]">
                                    Logout
                                </button>
                            </form>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="rounded-md bg-[#ffca22] px-5 py-2.5 text-sm font-medium text-[#424874] shadow-sm hover:bg-[#dcd6f7]"
                            >
                                Login
                            </a>

                            @if (Route::has('register'))
                                <div class="hidden sm:flex">
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md bg-[#424874] dark:bg-[#dcd6f7] px-5 py-2.5 text-sm font-medium text-[#ffca22] dark:text-[#1b1b18] hover:bg-[#dcd6f7]"
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
