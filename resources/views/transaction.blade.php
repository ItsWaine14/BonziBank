<x-layouts.app :title="'Transactions'">

<div class="max-w-md mx-auto mt-10 bg-[#424874] text-[#dcd6f7] p-6 rounded-xl shadow-lg ">
    <h1 class="text-3xl font-bold mb-6 text-center">
        Transactions
    </h1>
    <h2 class="text-xl font-bold mb-6 text-center">
        Balance: ₱{{ number_format($balance, 2) }}
    </h2>

    @if(session('message'))
        <div class="mb-4 p-3 text-green-600 rounded-lg">
            {{session('message')}}
        </div>
    @endif

    {{-- Withdraw --}}
    <form method="POST" action="{{route('withdraw')}}" class="mb-6">
        @csrf
        <div class="mb-4">
            <label for="withdraw_amount" class="block text-xl font-semibold mb-3">
                Withdraw Amount
            </label>

            <input type="number" name="amount" id="withdraw_amount" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2">
        </div>

        <button type="submit" class="w-full bg-[#ffca22] hover:bg-[#dcd6f7] text-[#424874] font-semibold py-2 px-4 rounded-xl cursor-pointer">
            Withdraw
        </button>
    </form>

    {{-- Deposit --}}
    <form method="POST" action="{{route('deposit')}}">
        @csrf
        <div class="mb-4">
            <label for="deposit_amount" class="block text-xl font-semibold mb-3">
                Deposit Amount
            </label>

            <input type="number" name="amount" id="deposit_amount" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2">
        </div>

        <button type="submit" class="w-full bg-[#ffca22] hover:bg-[#dcd6f7] text-[#424874] font-semibold py-2 px-4 rounded-xl cursor-pointer">
             Deposit
        </button>
    </form>

    {{-- History --}}
    @if($transactions->isNotEmpty())
        <div class="mt-10">
            <h1 class="text-xl font-semibold mb-4">
                Transaction History
            </h1>

            <h2 class="max-h-70 overflow-y-auto space-y-2">
                @foreach($transactions as $i)
                    <li class="grid grid-cols-3 gap-4 p-3 text-black bg-gray-100 rounded-xl justify-between">
                        <span class="capitalize">{{$i->type}}</span>
                        <span class="text-left">₱{{number_format($i->amount, 2)}}</span>
                        <span class="text-sm text-gray-500 text-right">{{$i->created_at->diffForHumans()}}</span>
                    </li>
                @endforeach
            </h2>
        </div>
    @endif
</div>

</x-layouts.app>
