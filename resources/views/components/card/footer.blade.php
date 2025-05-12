<div data-slot="card-footer" {{ $attributes->class([
    'rounded-b-[var(--radius-inner)]',
    'px-4 sm:px-6' => ! Str::contains($attributes->get('class'), ['px-']),
    'py-3' => ! Str::contains($attributes->get('class'), ['py-']),
]) }}>
    {{ $slot }}
</div>
