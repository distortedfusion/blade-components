@props(['style' => null, 'size' => null])
<p {{ $attributes->class([
    // Sizes...
    'text-lg lg:text-xl' => $size === 'xl',
    'text-sm lg:text-base' => $size === 'lg',
    'text-sm' => is_null($size),

    // Styles...
    'text-gray-800 dark:text-gray-100' => ! Str::contains($attributes->get('class'), ['text-']) && is_null($style),
    'text-gray-600 dark:text-gray-300' => $style === 'muted',
]) }}>
    {{ $slot }}
</p>
