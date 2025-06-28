<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bonzi Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gradient-to-b from-[#dcd6f7] to-[#a6b1e1] text-[#1b1b18] min-h-screen flex flex-col">

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
                            <li><a class="text-[#dcd6f7] hover:text-[#ffca22]" href="{{ route('about') }}">About Us</a></li>
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

    <main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 mt-10 flex-grow">
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

        <div class="w-[555px] flex-1 rounded-lg bg-[#424874] p-6 shadow-md m-8 justify-center items-center ml-80">
                <div class="flex h-full flex-col justify-between text-center text-lg font-semibold text-[#dcd6f7]">
                    <div>
                        <p class="text-4xl">Currency Converter</p>
                        <br />
                        <p class="text-sm">Convert World Currencies Here!</p>
                    </div>
                    <a href="">
                        <button class="mt-6 w-fit self-start rounded-md bg-[#ffca22] px-10 py-2 text-sm font-medium text-[#424874] shadow hover:bg-[#8e9ed6]">
                            Convert
                        </button>
                    </a>
                </div>
            </div>
    </main>

    <footer class="bg-[#424874] text-[#dcd6f7]">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a class="flex items-center">
                        <img src="{{ asset('logo.png') }}" class="h-8 me-3" alt="Bonzi Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap ">Bonzi</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-[#dcd6f7] uppercase ">Resources</h2>
                        <ul class="text-[#a6b1e1] font-medium">
                            <li class="mb-4">
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-[#dcd6f7] uppercase ">Follow us</h2>
                        <ul class="text-[#a6b1e1]  font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-[#dcd6f7] uppercase ">Legal</h2>
                        <ul class="text-[#a6b1e1] font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-[#dcd6f7] sm:mx-auto lg:my-8" />

            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm sm:text-center text-[#dcd6f7]">© 2023 Bonzi. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-[#dcd6f7] hover:text-[#ffca22] dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                            </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-[#dcd6f7] hover:text-[#ffca22] dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-[#dcd6f7] hover:text-[#ffca22] dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    @livewireScripts
</body>
</html>
