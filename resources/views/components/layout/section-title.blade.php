<x-heading :heading-level="$headingLevel" {{ $attributes->class([
    'font-sans-heading font-bold text-lg',
    'text-black dark:text-white',
]) }}>{{ $slot }}</x-heading>
