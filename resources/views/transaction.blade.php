<x-layouts.app :title="'Transactions'">

<div class="max-w-md mx-auto mt-10 bg-black p-6 rounded-xl shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-center">
        Transactions
    </h2>
    <h3 class="text-xl font-bold mb-6 text-center">
        Balance: ₱{{ number_format($balance, 2) }}
    </h3>

    @if(session('message'))
        <div class="mb-4 p-3 text-green-600 rounded-lg">
            {{session('message')}}
        </div>
    @endif

    {{-- Withdraw Form --}}
    <form method="POST" action="{{route('withdraw')}}" class="mb-6">
        @csrf
        <div class="mb-4">
            <label for="withdraw_amount" class="block text-sm font-medium text-white mb-1">
                Withdraw Amount
            </label>

            <input type="number" name="amount" id="withdraw_amount" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2">
        </div>

        <button type="submit" class="w-full bg-white text-black font-semibold py-2 px-4 rounded-xl">
            Withdraw
        </button>
    </form>

    {{-- Deposit Form --}}
    <form method="POST" action="{{route('deposit')}}">
        @csrf
        <div class="mb-4">
            <label for="deposit_amount" class="block text-sm font-medium text-white mb-1">
                Deposit Amount
            </label>

            <input type="number" name="amount" id="deposit_amount" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2">
        </div>

        <button type="submit" class="w-full bg-white text-black font-semibold py-2 px-4 rounded-xl">
             Deposit
        </button>
    </form>
</div>

</x-layouts.app>
