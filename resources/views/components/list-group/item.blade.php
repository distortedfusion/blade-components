@php
$componentAttributes = $attributes->filter(fn ($value, $key) => ! Str::startsWith($key, 'wire:') && ! Str::startsWith($key, 'x-'));
$indicatorAttributes = $attributes->filter(fn ($value, $key) => Str::startsWith($key, 'wire:') || Str::startsWith($key, 'x-'));
@endphp
<div data-slot="list-group-item" {{ $componentAttributes->class([
    'group flex items-center relative',
    'border-[var(--border)]',
    'text-[var(--foreground)]',
    'py-4 px-4 sm:px-6',
    'pr-2 sm:pr-4' => ! is_null($href) || $button,
]) }}>
    @if(! is_null($href) || $button)
        {{-- hover-indicator --}}
        <div class="absolute inset-x-2 inset-y-1 z-0 scale-95 bg-black/5 dark:bg-white/5 rounded opacity-0 transition group-hover:scale-100 group-hover:opacity-100"></div>
    @endif

    <div class="flex-grow min-w-0 relative z-10">
        @if(! is_null($title))
            <x-list-group.precomposed.title>
                <x-slot:title>{{ $title }}</x-slot:title>
                {!! trim($slot) ? $slot : '&mdash;' !!}
            </x-list-group.precomposed.title>
        @else
            {!! trim($slot) ? $slot : '&mdash;' !!}
        @endif
    </div>

    @if(! is_null($href) && ! $button)
        <a href="{{ $href }}" target="{{ $target }}" {{ $indicatorAttributes->class([
            'ml-2 flex-shrink-0 block hover:no-underline outline-none group/indicator',
        ]) }}>
            <span class="sr-only">Go to</span>
            @include('blade-components::components.list-group.partials.indicator')
        </a>
    @elseif($button)
        <button type="{{ $type }}" {{ $indicatorAttributes->class([
            'ml-2 flex-shrink-0 block hover:no-underline outline-none group/indicator',
        ]) }}>
            <span class="sr-only">Go to</span>
            @include('blade-components::components.list-group.partials.indicator')
        </button>
    @endif
</div>
