@props(['style' => null, 'size' => null])
@php
use DistortedFusion\BladeComponents\BladeComponents;
@endphp
<p {{ $attributes->class([
    'text-[var(--foreground)]' => ! Str::contains($attributes->get('class'), ['text-']) && is_null($style),
    'text-[var(--muted-foreground)]' => $style === 'muted',

    'text-lg' => ! BladeComponents::containsFontSizeClass($attributes->get('class'))
        && $size === 'lg'
        && $size !== 'none',
    'text-base' => ! BladeComponents::containsFontSizeClass($attributes->get('class'))
        && is_null($size)
        && $size !== 'none',
    'text-sm' => ! BladeComponents::containsFontSizeClass($attributes->get('class'))
        && $size === 'sm'
        && $size !== 'none',
    'text-xs' => ! BladeComponents::containsFontSizeClass($attributes->get('class'))
        && $size === 'xs'
        && $size !== 'none',
]) }}>
    {{ $slot }}
</p>
