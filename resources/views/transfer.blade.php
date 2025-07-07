<x-layouts.app :title="'Money Transfer'">

<div class="max-w-xl mx-auto mt-10 bg-[#424874] text-[#dcd6f7] p-6 rounded-xl shadow-lg">
    <h1 class="text-3xl font-bold mb-6 text-center">
        Money Transfer
    </h1>
    <h2 class="text-xl font-bold mb-6 text-center">
        Balance: ₱{{ number_format($balance, 2) }}
    </h2>

    @if(session('success'))
        <div class="mb-4 p-3 text-green-600 rounded-lg">
            {{session('success')}}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-4 p-3 text-red-600 rounded-lg">
            {{ session('error') }}
        </div>
    @endif

    {{-- Money Transfer --}}
    <form method="POST" action="{{ route('transfer') }}" class="mb-6">
        @csrf
        <div class="mb-4">
            <label for="recipient_email" class="block text-xl font-semibold mb-3">
                Recipient Email
            </label>

            <input type="email" name="recipient_email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2">
        </div>

        <div class="mb-4">
            <label for="amount" class="block text-xl font-semibold mb-3">
                Amount
            </label>

            <input type="number" name="amount" min="1" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2">
        </div>

        <button type="submit" class="w-full bg-[#ffca22] hover:bg-[#dcd6f7] text-[#424874] font-semibold py-2 px-4 rounded-xl cursor-pointer">
            Send
        </button>
    </form>

    {{-- History --}}
    @if($transfers->isNotEmpty())
        <div class="mt-10">
            <h1 class="text-xl font-semibold mb-4">
                Money Transfer History
            </h1>

            <h2 class="max-h-70 overflow-y-auto space-y-2">
                @foreach($transfers as $i)
                    <li class="grid grid-cols-4 gap-1 p-3 text-black bg-gray-100 rounded-xl justify-between">
                        <span class="capitalize">{{$i->type}}</span>
                        <span class="text-left">₱{{number_format($i->amount, 2)}}</span>
                        <span class="text-xs">{{ $i->recipient->email }}</span>
                        <span class="text-sm text-gray-500 text-right">{{$i->created_at->diffForHumans()}}</span>
                    </li>
                @endforeach
            </h2>
        </div>
    @endif
</div>

</x-layouts.app>
