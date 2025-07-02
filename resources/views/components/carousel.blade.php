<div class="w-full relative px-[50px] py-8">
        <div class="swiper default-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rounded-2xl h-96 flex justify-center items-center">
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

           <div class="flex items-center gap-4 justify-center mt-10">
                <button class="swiper-button-prev group p-1 w-12 h-12 rounded-full duration-300 flex justify-center items-center">
                    <svg class="h-4 w-4 text-[#ffca22]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                        <path d="M10 12L6 8l4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <button class="swiper-button-next group p-1 w-12 h-12 rounded-full duration-300 flex justify-center items-center">
                    <svg class="h-4 w-4 text-[#ffca22]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                        <path d="M6 4l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>


            <div class="swiper-pagination mt-6"></div>
        </div>
    </div>
