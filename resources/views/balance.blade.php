<x-layouts.app :title="'Balance'">

<div class="max-w-md mx-auto mt-10 bg-[#424874] text-[#dcd6f7] p-6 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-center">
        Current Balance: ₱{{ number_format($balance, 2) }}
    </h2>

    <div class="flex justify-center space-x-2">

        <a href="{{route('transaction')}}">
            <button class="bg-white text-black font-semibold py-2 px-4 rounded-xl shadow transition cursor-pointer">
                Withdraw / Deposit
            </button>
        </a>

        <a href="{{ route('transferForm') }}">
            <button class="bg-white text-black font-semibold py-2 px-4 rounded-xl shadow transition cursor-pointer">
                Money Transfer
            </button>
        </a>

    </div>
</div>

</x-layouts.app>
