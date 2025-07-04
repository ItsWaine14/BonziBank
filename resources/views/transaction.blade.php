<x-layouts.app :title="'Transactions'">

<div class="max-w-md mx-auto mt-10 bg-[#424874] text-[#dcd6f7] p-6 rounded-xl shadow-lg ">
    <h1 class="text-3xl font-bold mb-6 text-center">
        Transactions
    </h1>
    {{-- For convenience w/o having to go to check balance (remove if not planning to) --}}
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

        <button type="submit" class="w-full bg-white text-black font-semibold py-2 px-4 rounded-xl cursor-pointer">
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

        <button type="submit" class="w-full bg-white text-black font-semibold py-2 px-4 rounded-xl cursor-pointer">
             Deposit
        </button>
    </form>

    {{-- History --}}
    @if($transactions->isNotEmpty())
        <div class="mt-10">
            <h3 class="text-xl font-semibold mb-4">Transaction History</h3>
            <ul class="max-h-70 overflow-y-auto space-y-2">
                @foreach($transactions as $i)
                    <li class="p-3 text-black bg-gray-100 rounded-xl flex justify-between">
                        <span class="capitalize">{{$i->type}}</span>
                        <span>₱{{number_format($i->amount, 2)}}</span>
                        <span class="text-sm text-gray-500">{{$i->created_at->diffForHumans()}}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

</x-layouts.app>
