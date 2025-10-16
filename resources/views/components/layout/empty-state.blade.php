@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
<div {{ $attributes->class([
    'flex flex-col items-center gap-y-4 text-center py-12',
]) }}>
    <div class="flex flex-col gap-y-2">
        <x-dynamic-component
            :component="BladeComponents::componentAliasWithPrefix('heading')"
            :as-heading="$asHeading"
            :heading-level="3">
            {{ $title }}
        </x-dynamic-component>
        <div class="flex flex-col gap-y-4 max-w-[64ch] text-sm [&_p]:text-[var(--muted-foreground)]">
            {{ $slot }}
        </div>
    </div>

    @if($action ?? false)
        <div class="flex items-center gap-x-2">
            {{ $action }}
        </div>
    @endif
</div>
