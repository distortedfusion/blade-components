<h{{ $headingLevel }} {{ $attributes->merge(['id' => $id()])->class([
    'font-bold hyphens-auto',
    'text-4xl md:text-4xl' => ! Str::contains($attributes->get('class'), ['text-'])
]) }}>{{ $slot }}</h{{ $headingLevel }}>
