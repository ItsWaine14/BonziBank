<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bonzi Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
    @livewireStyles
</head>
<body class="bg-gradient-to-b from-[#dcd6f7] to-[#a6b1e1] text-[#1b1b18] min-h-screen flex flex-col">

<x-layouts.header />

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
                    <a href="{{ route('currency') }}">
                        <button class="mt-6 w-fit self-start rounded-md bg-[#ffca22] px-10 py-2 text-sm font-medium text-[#424874] shadow hover:bg-[#8e9ed6]">
                            Convert
                        </button>
                    </a>
                </div>
            </div>

            <br>
            <br>

            <h1 class="text-2xl font-bold text-center ">Available Cards!</h1>
        <x-carousel />
    </main>

<x-layouts.footer />

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 @livewireScripts
<script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper(".default-carousel", {
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        });

    </script>
</body>
</html>
