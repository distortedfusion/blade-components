@props(['flush' => false])
<div data-slot="list-group" {{ $attributes->class([
    'w-full flex flex-col rounded-[var(--radius)]',
    'border border-[var(--border)]' => ! $flush,
    'divide-y divide-[var(--border)]',
]) }}>
    {{ $slot }}
</div>
