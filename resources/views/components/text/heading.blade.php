@php
$element = $asHeading ? 'h'.$headingLevel : 'div';
@endphp
<{{ $element }} data-slot="heading"{{ $attributes->merge(['id' => $id()])->class([
    'text-black dark:text-white',
    'font-sans-heading',
    'hyphens-auto' => ! Str::contains($attributes->get('class'), ['hyphens-']),
    'font-semibold' => ! Str::contains($attributes->get('class'), ['font-']),

    'text-5xl' => $size === 'flex' && $headingLevel === 1 && ! Str::contains($attributes->get('class'), ['text-']),
    'text-4xl' => $size === 'flex' && $headingLevel === 2 && ! Str::contains($attributes->get('class'), ['text-']),
    'text-3xl' => $size === 'flex' && $headingLevel === 3 && ! Str::contains($attributes->get('class'), ['text-']),
    'text-2xl' => $size === 'flex' && $headingLevel === 4 && ! Str::contains($attributes->get('class'), ['text-']),
    'text-xl' => $size === 'flex' && $headingLevel === 5 && ! Str::contains($attributes->get('class'), ['text-']),
    'text-lg' => $size === 'flex' && $headingLevel === 6 && ! Str::contains($attributes->get('class'), ['text-']),

    'text-7xl md:text-9xl' => $size === 'xl',
    'text-5xl md:text-7xl' => $size === 'lg',
    'text-3xl md:text-5xl' => is_null($size),
    'text-xl md:text-3xl' => $size === 'sm',
    'text-base md:text-xl' => $size === 'xs',
]) }}>{{ $slot }}</{{ $element }}>
