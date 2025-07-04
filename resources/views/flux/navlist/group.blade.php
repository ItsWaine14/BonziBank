@props([
    'expandable' => false,
    'expanded' => true,
    'heading' => null,
])

<?php if ($expandable && $heading): ?>

<ui-disclosure
    {{ $attributes->class('group/disclosure') }}
    @if ($expanded === true) open @endif
    data-flux-navlist-group
>
    <button
        type="button"
        class="group/disclosure-button mb-[2px] flex h-10 w-full items-center rounded-lg
               text-[#dcd6f7] hover:bg-[#8e9ed6] hover:text-[#2c2f4e]
               lg:h-8 dark:text-[#dcd6f7] dark:hover:bg-[#8e9ed6] dark:hover:text-[#2c2f4e]"
    >
        <div class="ps-3 pe-4">
            <flux:icon.chevron-down class="hidden size-3! group-data-open/disclosure-button:block" />
            <flux:icon.chevron-right class="block size-3! group-data-open/disclosure-button:hidden" />
        </div>

        <span class="text-sm font-medium leading-none">{{ $heading }}</span>
    </button>

    <div class="relative hidden space-y-[2px] ps-7 data-open:block" @if ($expanded === true) data-open @endif>
        <div class="absolute inset-y-[3px] start-0 ms-4 w-px bg-[#2c2f4e] dark:bg-white/30"></div>

        {{ $slot }}
    </div>
</ui-disclosure>

<?php elseif ($heading): ?>

<div {{ $attributes->class('block space-y-[2px]') }}>
    <div class="px-1 py-2">
        <div class="text-xs leading-none text-[#2c2f4e] dark:text-[#a6b1e1]">{{ $heading }}</div>
    </div>

    <div>
        {{ $slot }}
    </div>
</div>

<?php else: ?>

<div {{ $attributes->class('block space-y-[2px]') }}>
    {{ $slot }}
</div>

<?php endif; ?>
