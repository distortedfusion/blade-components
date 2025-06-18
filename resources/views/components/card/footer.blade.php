<div data-slot="card-footer" {{ $attributes->class([
    'flex flex-col-reverse sm:flex-row sm:justify-end gap-2',
    'rounded-b-[var(--radius-inner)]',
    'px-6' => ! Str::contains($attributes->get('class'), ['px-']),
]) }}>
    {{ $slot }}
</div>
