@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
@props(['container' => null, 'sticky' => false])
<header data-slot="header" {{ $attributes->class([
    '[grid-area:header]',
    'flex items-center justify-between gap-2 z-10',
    'bg-[var(--sidebar)] min-h-[var(--header-height,3.5rem)]',

    // Match the default spacing of a container, reset when a container is explicitly used...
    '[:where(&)]:px-4 [:where(&)]:sm:px-6 [:where(&)]:lg:px-8 [&:has([data-slot=container])]:px-0' => is_null($container),

    'sticky [:where(&)]:top-0' => $sticky,
]) }}>
    @if(! is_null($container))
        <x-dynamic-component
            :component="BladeComponents::componentAliasWithPrefix('container')"
            :size="$container">
            {{ $slot }}
        </x-dynamic-component>
    @else
        {{ $slot }}
    @endif
</header>
