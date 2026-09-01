@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
@props(['container' => null, 'sticky' => false, 'fixed' => false])
<header data-slot="header" {{ $attributes->class([
    '[grid-area:header]',
    'flex items-center justify-between gap-2 z-10',

    'bg-[var(--header)] min-h-[var(--header-height,3.5rem)]',
    '[:where(&)]:border-be [:where(&)]:border-[var(--border)]',

    'fixed top-0 inset-x-0' => $fixed,
    'sticky [:where(&)]:top-0' => $sticky,

    // Match the default spacing of a container, reset when a container is explicitly used...
    '[:where(&)]:px-4 [:where(&)]:sm:px-6 [:where(&)]:lg:px-8 [&:has([data-slot=container])]:px-0' => is_null($container),
]) }}
@if($sticky) sticky @endif
@if($fixed) fixed @endif>
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
