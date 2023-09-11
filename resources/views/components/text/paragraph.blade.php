<p {{ $attributes->class([
    'text-sm' => ! Str::contains($attributes->get('class'), ['text-xs', 'text-sm', 'text-md', 'text-lg', 'text-xl', 'text-2xl']),
]) }}>
    {{ $slot }}
</p>
