<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-[#2c2f4e] dark:border-neutral-700 flex items-center justify-center bg-[#424874]">

                <a href="{{route('transaction')}}">
                    <button class="bg-white text-black font-semibold py-2 px-4 rounded-xl shadow transition cursor-pointer">
                        Withdraw / Deposit
                    </button>
                </a>
            </div>

            <div class="relative aspect-video overflow-hidden rounded-xl border border-[#2c2f4e] dark:border-neutral-700 flex items-center justify-center bg-[#424874]">

                <a href="{{ route('transferForm') }}">
                    <button class="bg-white text-black font-semibold py-2 px-4 rounded-xl shadow transition cursor-pointer">
                        Money Transfer
                    </button>
                </a>
            </div>

            <div class="relative aspect-video overflow-hidden rounded-xl border border-[#2c2f4e] dark:border-neutral-700 flex items-center justify-center bg-[#424874]">

                <a href="{{ route('balance') }}">
                    <button class="bg-white text-black font-semibold py-2 px-4 rounded-xl shadow transition cursor-pointer">
                        Check Balance
                    </button>
                </a>
            </div>
        </div>

    </div>
</x-layouts.app>
