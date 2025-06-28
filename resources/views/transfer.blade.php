<x-layouts.app :title="'Money Transfer'">
    <div class="max-w-md mx-auto mt-10 bg-black p-6 rounded-xl shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Money Transfer</h2>
        <h3 class="text-xl font-bold mb-6 text-center">
            Balance: ₱{{ number_format($balance, 2) }}
        </h3>

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

        {{-- FRONT END STUFFS --}}
        <form method="POST" action="{{ route('transfer') }}" class="mb-6">
            @csrf
            <div class="mb-4">
                <label for="recipient_email" class="block text-sm font-medium text-white mb-1">
                    Recipient Email
                </label>

                <input type="email" name="recipient_email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2">
            </div>

            <div class="mb-4">
                <label for="amount" class="block text-sm font-medium text-white mb-1">
                    Amount
                </label>
            
                <input type="number" name="amount" min="1" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2">
            </div>
            
            <button type="submit" class="w-full bg-white text-black font-semibold py-2 px-4 rounded-xl">
                Send
            </button>
        </form>
    </div>
</x-layouts.app>
