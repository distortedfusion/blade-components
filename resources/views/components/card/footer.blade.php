<div data-slot="card-footer" {{ $attributes->class([
    'flex flex-col-reverse sm:flex-row sm:justify-end gap-2',
    'rounded-b-[var(--radius-inner)]',
    'px-4 sm:px-6' => ! Str::contains($attributes->get('class'), ['px-']),
    'py-3' => ! Str::contains($attributes->get('class'), ['py-']),
]) }}>
    {{ $slot }}
</div>
