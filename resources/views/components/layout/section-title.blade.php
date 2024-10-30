<x-heading size="flex" :heading-level="$headingLevel" {{ $attributes->class([
    'font-sans-heading hyphens-auto text-base md:text-xl font-normal',
    'text-black dark:text-white',
]) }}>{{ $slot }}</x-heading>
