<div data-slot="card-footer" {{ $attributes->class([
    'flex items-center space-x-2 rounded-b-md',
    'px-4 sm:px-6' => ! Str::contains($attributes->get('class'), ['px-']),
    'py-3' => ! Str::contains($attributes->get('class'), ['py-']),
]) }}>
    {{ $slot }}
</div>
