@props(['style' => null, 'size' => null])
<p {{ $attributes->class([
    // Sizes...
    'text-lg lg:text-xl' => $size === 'xl',
    'text-sm lg:text-base' => $size === 'lg',
    'text-sm' => is_null($size),

    // Styles...
    'text-[var(--foreground)]' => ! Str::contains($attributes->get('class'), ['text-']) && is_null($style),
    'text-[var(--muted-foreground)]' => $style === 'muted',
]) }}>
    {{ $slot }}
</p>
