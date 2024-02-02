<p {{ $attributes->class([
    'text-sm' => ! Str::contains($attributes->get('class'), ['text-xs', 'text-sm', 'text-md', 'text-lg', 'text-xl', 'text-2xl']),
    'text-gray-600 dark:text-gray-300',
]) }}>
    {{ $slot }}
</p>
