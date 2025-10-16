@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
@props(['headingLevel' => 3, 'asHeading' => true])
<x-dynamic-component
    :component="BladeComponents::componentAliasWithPrefix('heading')"
    :heading-level="$headingLevel"
    :as-heading="$asHeading">
    {{ $slot }}
</x-dynamic-component>
