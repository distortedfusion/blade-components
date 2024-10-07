<p {{ $attributes->class([
    'text-gray-600 dark:text-gray-300' => ! Str::contains($attributes->get('class'), ['text-']),

    'text-lg lg:text-xl' => $size === 'xl',
    'text-sm lg:text-base' => $size === 'lg',
    'text-xs lg:text-sm' => is_null($size) || ! in_array($size, ['lg', 'xl']),
]) }}>
    {{ $slot }}
</p>
