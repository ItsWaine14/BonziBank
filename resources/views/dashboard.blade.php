<x-layouts.app :title="__('Dashboard')">
    <div class="text-2xl font-bold mb-6">
        Current Balance: ₱{{ number_format($balance, 2) }}
    </div>

   <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-2">
            <div class="relative h-40 overflow-hidden rounded-xl border border-[#2c2f4e] dark:border-neutral-700 flex items-center justify-center bg-[#424874]">
                <a href="{{route('transaction')}}" class="w-full h-full flex items-center text-4xl text-[#424874] justify-center bg-[#ffca22] font-semibold rounded-xl shadow transition cursor-pointer hover:bg-[#dcd6f7]">
                    Transaction
                </a>
            </div>

            <div class="relative h-40 overflow-hidden rounded-xl border border-[#2c2f4e] dark:border-neutral-700 flex items-center justify-center bg-[#424874]">
                <a href="{{route('transferForm')}}" class="w-full h-full flex items-center text-4xl text-[#424874] justify-center bg-[#ffca22] font-semibold rounded-xl shadow transition cursor-pointer hover:bg-[#dcd6f7]">
                    Money Transfer
                </a>
            </div>

            <div class="relative h-40 overflow-hidden rounded-xl border border-[#2c2f4e] dark:border-neutral-700 flex items-center justify-center bg-[#424874]">
                <a href="{{route('billForm')}}" class="w-full h-full flex items-center text-4xl text-[#424874] justify-center bg-[#ffca22] font-semibold rounded-xl shadow transition cursor-pointer hover:bg-[#dcd6f7]">
                    Bills
                </a>
            </div>

{{--
        <div class="relative h-40 overflow-hidden rounded-xl border border-[#2c2f4e] dark:border-neutral-700 flex items-center justify-center bg-[#424874]">

                <a href="{{ route('balance') }}">
                    <button class="bg-white text-2xl font-semibold py-2 px-4 rounded-xl shadow transition cursor-pointer">
                        Check Balance
                    </button>
                </a>
            </div>
        </div>
--}}

    </div>
</x-layouts.app>
