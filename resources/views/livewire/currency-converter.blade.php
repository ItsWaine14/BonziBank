<div class="max-w-md p-6 mx-auto bg-[#424874] shadow-md rounded space-y-4 text-[#dcd6f7]">
    <h2 class="text-xl font-bold">Currency Converter</h2>

    <input wire:model="amount" type="number" step="0.01" placeholder="Amount" class="w-full border p-2 rounded bg-accent-foreground text-[#424874]" />

    <div class="flex gap-2">
        <select wire:model="to" class="w-1/2 border border-[#424874] bg-[#dcd6f7] text-[#1b1b18] p-2 rounded focus:outline-none focus:ring-2 focus:ring-[#ffca22]">
            <option value="USD">USD - US Dollar</option>
            <option value="PHP">PHP - Philippine Peso</option>
            <option value="EUR">EUR - Euro</option>
            <option value="JPY">JPY - Japanese Yen</option>
            <option value="KRW">KRW - South Korean Won</option>
            <option value="SGD">SGD - Singapore Dollar</option>

        </select>

        <select wire:model="to" class="w-1/2 border border-[#424874] bg-[#dcd6f7] text-[#1b1b18] p-2 rounded focus:outline-none focus:ring-2 focus:ring-[#ffca22]">
            <option value="PHP">PHP - Philippine Peso</option>
            <option value="USD">USD - US Dollar</option>
            <option value="EUR">EUR - Euro</option>
            <option value="JPY">JPY - Japanese Yen</option>
            <option value="KRW">KRW - South Korean Won</option>
            <option value="SGD">SGD - Singapore Dollar</option>

        </select>
    </div>

    <button wire:click="convert" class="bg-[#ffca22] text-[#424874] px-4 py-2 rounded hover:bg-[#dcd6f7]">
        Convert
    </button>

    @if (!is_null($result ?? null))
        <div class="text-[#ffca22] font-semibold">
            Result: {{ number_format($result, 2) }} {{ $to }}
        </div>
    @endif
</div>
