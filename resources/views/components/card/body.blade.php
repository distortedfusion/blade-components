<div {{ $attributes->class([
    'card-body',
    'px-4 sm:px-6' => ! Str::contains($attributes->get('class'), ['px-', 'p-']),
    'py-5 sm:py-3' => ! Str::contains($attributes->get('class'), ['py-', 'p-']),
]) }}>
    {{ $slot }}
</div>
