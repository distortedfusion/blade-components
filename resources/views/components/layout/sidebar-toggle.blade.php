@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
<x-dynamic-component
    data-slot="sidebar-toggle"
    :component="BladeComponents::componentAliasWithPrefix('btn')"
    :attributes="$attributes"
    size="icon"
    style="ghost"
    x-data
    x-on:click="$dispatch('sidebar:toggle')"
    aria-label="{{ __('Toggle sidebar') }}">
    @if(is_string($icon) && ! is_null($icon))
        <x-dynamic-component :component="$icon" data-slot="icon" />
    @elseif($icon ?? false)
        {{ $icon }}
    @endif
</x-dynamic-component>
