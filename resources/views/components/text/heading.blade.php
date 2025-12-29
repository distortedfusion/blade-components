@php
use DistortedFusion\BladeComponents\BladeComponents;

$element = $asHeading ? 'h'.$headingLevel : 'div';
@endphp
<{{ $element }} data-slot="heading"{{ $attributes->merge(['id' => $id()])->class([
    'text-[var(--foreground)]',
    'font-sans-heading hyphens-auto',

    'font-semibold' => ! BladeComponents::containsFontWeightClass($attributes->get('class')),

    'text-lg' => ! BladeComponents::containsFontSizeClass($attributes->get('class')) && $size === 'lg',
    'text-base' => ! BladeComponents::containsFontSizeClass($attributes->get('class')) && $size === 'default',
    'text-sm' => ! BladeComponents::containsFontSizeClass($attributes->get('class')) && $size === 'sm',
    'text-xs' => ! BladeComponents::containsFontSizeClass($attributes->get('class')) && $size === 'xs',
]) }}>{{ $slot }}</{{ $element }}>
