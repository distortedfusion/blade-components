@php
$element = $asHeading ? 'h'.$headingLevel : 'p';
@endphp
<{{ $element }} {{ $attributes->merge(['id' => $id()])->class([
    'text-black dark:text-white',
    'font-sans-heading',
    'hyphens-auto' => ! Str::contains($attributes->get('class'), ['hyphens-']),
    'font-semibold' => $headingLevel === 1 && ! Str::contains($attributes->get('class'), ['font-']),
    'font-medium' => $headingLevel !== 1 && ! Str::contains($attributes->get('class'), ['font-']),
    'text-5xl md:text-5xl' => $headingLevel === 1 && ! Str::contains($attributes->get('class'), ['text-']),
    'text-4xl md:text-4xl' => $headingLevel === 2 && ! Str::contains($attributes->get('class'), ['text-']),
    'text-3xl md:text-3xl' => $headingLevel === 3 && ! Str::contains($attributes->get('class'), ['text-']),
    'text-2xl md:text-2xl' => $headingLevel === 4 && ! Str::contains($attributes->get('class'), ['text-']),
    'text-xl md:text-xl' => $headingLevel === 5 && ! Str::contains($attributes->get('class'), ['text-']),
    'text-lg md:text-lg' => $headingLevel === 6 && ! Str::contains($attributes->get('class'), ['text-']),
]) }}>{{ $slot }}</{{ $element }}>
