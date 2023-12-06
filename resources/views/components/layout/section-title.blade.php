<x-heading :heading-level="$headingLevel" {{ $attributes->class([
    'font-sans-heading font-bold text-lg',
]) }}>{{ $slot }}</x-heading>
