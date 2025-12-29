@props(['style' => 'default'])
<div data-slot="list-group" {{ $attributes->class([
    'w-full flex flex-col rounded-[var(--radius)]',

    'bg-[var(--card)]' => $style === 'default',
    'border border-[var(--border)]' => $style === 'default',
    'divide-y divide-[var(--border)]' => $style === 'default',
]) }}>
    {{ $slot }}
</div>
