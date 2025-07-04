@extends('appmain')

@section('title', 'Welcome to Bonzi Bank')

@section('content')
    <h1 class="text-2xl font-bold text-center">Welcome to Bonzi Bank</h1>
    <p class="mt-2 text-sm dark:text-[#a6b1e1] text-center">Secure your future. Start today.</p>

    <div class="m-8 flex flex-wrap gap-10">
        {{-- Create Account Card --}}
        <div class="min-w-[300px] flex-1 rounded-lg bg-[#424874] dark:bg-[#2c2f4e] p-6 shadow-md">
            <div class="flex h-full flex-col justify-between text-left text-lg font-semibold text-[#dcd6f7]">
                <div>
                    <p class="text-4xl">CREATE AN ACCOUNT</p>
                    <br />
                    <p class="text-sm dark:text-[#a6b1e1]">Get started with a new account and get access to secure banking features such as balance tracking, money transfers, and bill payments.</p>
                </div>
                <a href="{{ route('register') }}">
                    <button class="mt-6 w-fit self-start rounded-md bg-[#ffca22] px-10 py-2 text-sm font-medium text-[#424874] shadow hover:bg-[#8e9ed6] cursor-pointer">
                        Register
                    </button>
                </a>
            </div>
        </div>

        {{-- Avail Card Now --}}
        <div class="min-w-[300px] flex-1 rounded-lg bg-[#424874] dark:bg-[#2c2f4e] p-6 shadow-md">
            <div class="flex h-full flex-col justify-between text-right text-lg font-semibold text-[#dcd6f7]">
                <div>
                    <p class="text-4xl">AVAIL A CARD NOW!</p>
                    <br />
                    <p class="text-sm dark:text-[#a6b1e1]">Choose your card type, confirm the details, and start using it for secure transactions.</p>
                </div>
                <button class="mt-6 w-fit self-end rounded-md bg-[#ffca22] px-10 py-2 text-sm font-medium text-[#424874] shadow hover:bg-[#8e9ed6] cursor-pointer">
                    Get Bonzi Bank Card
                </button>
            </div>
        </div>
    </div>

    {{-- Currency Converter --}}
    <div class="w-[555px] flex-1 rounded-lg bg-[#424874] dark:bg-[#2c2f4e] p-6 shadow-md m-8 justify-center items-center ml-80">
        <div class="flex h-full flex-col justify-between text-center text-lg font-semibold text-[#dcd6f7]">
            <div>
                <p class="text-4xl">Currency Converter</p>
                <br />
                <p class="text-sm dark:text-[#a6b1e1]">Convert World Currencies Here!</p>
            </div>
            <a href="{{ route('currency') }}">
                <button class="mt-6 w-fit self-start rounded-md bg-[#ffca22] px-10 py-2 text-sm font-medium text-[#424874] shadow hover:bg-[#8e9ed6] cursor-pointer">
                    Convert
                </button>
            </a>
        </div>
    </div>

    <br><br>
    <h1 class="text-2xl font-bold text-center">Available Cards!</h1>
    <x-carousel />
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper(".default-carousel", {
            loop: true,
            autoplay: {
                delay: 4000,
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
@endpush
