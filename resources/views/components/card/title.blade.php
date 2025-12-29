@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
@props(['size' => 'default', 'headingLevel' => 3, 'asHeading' => true])
<x-dynamic-component
    :component="BladeComponents::componentAliasWithPrefix('heading')"
    :heading-level="$headingLevel"
    :as-heading="$asHeading"
    :size="$size">
    {{ $slot }}
</x-dynamic-component>
