@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
<div {{ $attributes }}>
    <x-dynamic-component class="truncate"
        :component="BladeComponents::componentAliasWithPrefix('heading')"
        :as-heading="false"
        size="sm">
        {{ $slot }}
    </x-dynamic-component>
    @if($description ?? false)
        <div {{ $description->attributes->class([
            '[&_p]:text-[var(--muted-foreground)]',
        ]) }}>
            {{ $description }}
        </div>
    @endif
</div>
