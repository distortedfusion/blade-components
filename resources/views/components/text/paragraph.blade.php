@props(['style' => null, 'size' => null])
<p {{ $attributes->class([
    // Sizes...
    'text-lg' => $size === 'lg',
    'text-base' => is_null($size),
    'text-sm' => $size === 'sm',

    // Styles...
    'text-[var(--foreground)]' => ! Str::contains($attributes->get('class'), ['text-']) && is_null($style),
    'text-[var(--muted-foreground)]' => $style === 'muted',
]) }}>
    {{ $slot }}
</p>
