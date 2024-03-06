<p {{ $attributes->class([
    'text-gray-600 dark:text-gray-300',

    'text-base' => $size === 'lg',
    'text-sm' => is_null($size) || ! in_array($size, ['lg']),
]) }}>
    {{ $slot }}
</p>
