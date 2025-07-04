@php
use DistortedFusion\BladeComponents\BladeComponents;

$element = $asHeading ? 'h'.$headingLevel : 'div';
@endphp
<{{ $element }} data-slot="heading"{{ $attributes->merge(['id' => $id()])->class([
    'text-[var(--foreground)]',
    'font-sans-heading hyphens-auto',

    'font-semibold' => ! BladeComponents::containsFontWeightClass($attributes->get('class')),

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
]) }}>{{ $slot }}</{{ $element }}>
