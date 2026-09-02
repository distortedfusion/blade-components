@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
<li data-slot="breadcrumb-separator" {{ $attributes->class(['leading-none']) }}>
    <x-dynamic-component :component="BladeComponents::defaultBreadcrumbSeparatorIcon()"
        class="size-3 text-[var(--foreground)]" />
</li>
