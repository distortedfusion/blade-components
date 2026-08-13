@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
@props(['container' => null])
<div data-slot="footer" {{ $attributes->class([
    '[grid-area:footer]',

    // Match the default spacing of a container, reset when a container is explicitly used...
    '[:where(&)]:px-4 [:where(&)]:sm:px-6 [:where(&)]:lg:px-8 [&:has([data-slot=container])]:px-0' => is_null($container),
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
</div>
