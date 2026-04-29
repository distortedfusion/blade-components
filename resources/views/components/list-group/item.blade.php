@php
use DistortedFusion\BladeComponents\BladeComponents;

$componentAttributes = $attributes->filter(fn ($value, $key) => ! Str::startsWith($key, 'wire:') && ! Str::startsWith($key, 'x-'));
$indicatorAttributes = $attributes->filter(fn ($value, $key) => Str::startsWith($key, 'wire:') || Str::startsWith($key, 'x-'));
@endphp
@aware(['style'])
<div data-slot="list-group-item" {{ $componentAttributes->class([
    'group flex items-center relative',
    'text-[var(--foreground)] leading-6',
    'py-3 px-3',

    '[&:not(:last-child)]:mb-1 border border-[var(--border)] bg-[var(--card)] rounded-[var(--radius)]' => $style === 'pills',
]) }}>
    @if(! is_null($href) || $button)
        {{-- hover-indicator --}}
        <div class="absolute inset-x-1 inset-y-1 z-0 scale-95 bg-[color-mix(in_oklab,var(--secondary)_70%,transparent)] rounded opacity-0 transition group-hover:scale-100 group-hover:opacity-100"></div>
    @endif

    <div class="flex-grow min-w-0 relative z-10">
        @if(! is_null($title))
            <x-dynamic-component :component="BladeComponents::componentAliasWithPrefix('list-group.precomposed.title')">
                <x-slot:title>{{ $title }}</x-slot:title>
                {!! trim($slot) ? $slot : '&mdash;' !!}
            </x-dynamic-component>
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
