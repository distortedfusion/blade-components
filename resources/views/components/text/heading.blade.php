@php
$element = $asHeading ? 'h'.$headingLevel : 'div';
@endphp
<{{ $element }} data-slot="heading"{{ $attributes->merge(['id' => $id()])->class([
    'text-[var(--foreground)]',
    'font-sans-heading font-semibold hyphens-auto',

    'text-xl' => $size === 'xl',
    'text-lg' => $size === 'lg',
    'text-base' => is_null($size),
    'text-sm' => $size === 'sm',
    'text-xs' => $size === 'xs',
]) }}>{{ $slot }}</{{ $element }}>
