@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
<li {{ $attributes->class(['leading-none']) }}>
    <x-dynamic-component :component="BladeComponents::defaultBreadcrumbEllipsisIcon()"
        class="size-4 text-[var(--muted-foreground)]" />
</li>
