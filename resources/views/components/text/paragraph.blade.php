<p {{ $attributes->class([
    'text-gray-600 dark:text-gray-300',

    'text-xl' => $size === 'xl',
    'text-base' => $size === 'lg',
    'text-sm' => is_null($size) || ! in_array($size, ['lg', 'xl']),
]) }}>
    {{ $slot }}
</p>
