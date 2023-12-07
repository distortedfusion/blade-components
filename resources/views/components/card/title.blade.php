<x-heading :heading-level="$headingLevel" :as-heading="$asHeading" {{ $attributes->class([
    'text-lg leading-6 py-1'
]) }}>{{ $slot }}</x-heading>
