@props(['headingLevel' => 3, 'asHeading' => true])
<x-heading :heading-level="$headingLevel" :as-heading="$asHeading">{{ $slot }}</x-heading>
