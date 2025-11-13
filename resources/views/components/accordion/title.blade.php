@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
@props(['size' => null, 'indicatorIcon' => null])
<x-dynamic-component
    :component="BladeComponents::componentAliasWithPrefix('accordion.toggle')"
    :indicator-icon="$indicatorIcon"
    {{ $attributes }}>
    @if($indicator ?? false)
        <x-slot:indictor>
            {{ $indicator }}
        </x-slot:indictor>
    @endif
    <x-dynamic-component
        :component="BladeComponents::componentAliasWithPrefix('heading')"
        :heading-level="3"
        :size="$size">
        {{ $slot }}
    </x-dynamic-component>
</x-dynamic-component>
