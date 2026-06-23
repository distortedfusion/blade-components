<div data-slot="card-footer" {{ $attributes->class([
    'flex flex-col-reverse sm:flex-row sm:[:where(&)]:justify-end gap-2',
    'rounded-b-[var(--radius-inner)]',
    '[:where(&)]:px-4',
]) }}>
    {{ $slot }}
</div>
