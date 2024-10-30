<x-heading :heading-level="$headingLevel" :as-heading="$asHeading" size="flex" {{ $attributes->class([
    'text-base leading-6 py-1',
    'text-black dark:text-white',
]) }}>{{ $slot }}</x-heading>
