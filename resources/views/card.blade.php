<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <title>Bonzi Bank - Cards</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
    @livewireStyles

    <style>
        .swiper-wrapper {
            width: 100%;
            height: max-content !important;
            padding-bottom: 64px !important;
            -webkit-transition-timing-function: linear !important;
            transition-timing-function: linear !important;
            position: relative;
        }

        .swiper-pagination-bullet {
            background: #424874;
        }
    </style>
</head>
<body class="bg-gradient-to-b from-[#dcd6f7] to-[#a6b1e1] text-[#1b1b18] dark:from-[#1b1b18] dark:to-[#424874] dark:text-[#dcd6f7] min-h-screen flex flex-col transition-colors duration-200">

    <x-layouts.header />

    <main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 mt-10 flex-grow">

    <div class="w-full relative px-[50px] py-8">
        <div class="swiper default-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rounded-2xl h-96 flex justify-center items-center text-center">
                        <img src="{{ asset('Cards/1.png') }}" alt="Card Image" class="w-140 h-auto object-contain" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rounded-2xl h-96 flex justify-center items-center">
                        <img src="{{ asset('Cards/2.png') }}" alt="Card Image" class="w-140 h-auto object-contain" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rounded-2xl h-96 flex justify-center items-center">
                        <img src="{{ asset('Cards/3.png') }}" alt="Card Image" class="w-140 h-auto object-contain" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rounded-2xl h-96 flex justify-center items-center">
                        <img src="{{ asset('Cards/4.png') }}" alt="Card Image" class="w-140 h-auto object-contain" />
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4 justify-center mt-4">
                <button class="swiper-button-prev group p-1 w-12 h-12 rounded-full duration-300 flex justify-center items-center">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                        <path d="M10 12L6 8l4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <button class="swiper-button-next group p-1 w-12 h-12 rounded-full duration-300 flex justify-center items-center">
                    <svg class="h-4 w-4 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                        <path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <div class="swiper-pagination mt-6"></div>
        </div>
    </div>

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
