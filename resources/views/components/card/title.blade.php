<x-heading :heading-level="$headingLevel" :as-heading="$asHeading" {{ $attributes->class([
    'text-base leading-6 py-1'
]) }}>{{ $slot }}</x-heading>
