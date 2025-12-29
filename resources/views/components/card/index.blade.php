@php
use Illuminate\Support\Str;
@endphp
@props(['style' => 'default'])
<div data-slot="card" {{ $attributes->class([
    'w-full flex flex-col gap-y-4 rounded-[var(--radius)]',

    'py-6' => ! Str::contains($attributes->get('class'), ['p-', 'py-', 'pt-', 'pb-']),

    // Background / Foreground...
    'bg-[var(--card)]' => ! Str::contains($attributes->get('class'), ['bg-']),
    'text-[var(--card-foreground)]' => ! Str::contains($attributes->get('class'), ['text-']),

    // Border...
    'border border-[var(--border)]' => ! Str::contains($attributes->get('class'), ['border-']),

    // Styles...
    'ring-1 ring-offset-2 ring-offset-[var(--background)] ring-[color-mix(in_oklab,var(--success)_50%,transparent)]' => $style === 'success',
    'ring-1 ring-offset-2 ring-offset-[var(--background)] ring-[color-mix(in_oklab,var(--info)_50%,transparent)]' => $style === 'info',
    'ring-1 ring-offset-2 ring-offset-[var(--background)] ring-[color-mix(in_oklab,var(--warning)_50%,transparent)]' => $style === 'warning',
    'ring-1 ring-offset-2 ring-offset-[var(--background)] ring-[color-mix(in_oklab,var(--danger)_50%,transparent)]' => $style === 'danger',
    'border-transparent' => $style === 'ghost',

    // Avatars...
    '[&_[data-slot=avatar]]:ring-[var(--card)]',

    // List group...
    '[&>[data-slot=list-group]]:bg-transparent',
    '[&>[data-slot=list-group]]:rounded-none',
    '[&>[data-slot=list-group]]:border-x-0',

    // Reset list group border when it's the first or last item.
    '[&>[data-slot=list-group]:is(:first-child)]:border-t-0',
    '[&>[data-slot=list-group]:is(:last-child)]:border-b-0',

    // Adjust list-group padding when it's directly within the x-card.
    '[&>[data-slot=list-group]_[data-slot=list-group-item]]:px-6',
    '[&>[data-slot=list-group]_[data-slot=list-group-item]_[data-slot=list-group-item-indicator]]:-mr-4',

    // Reset card padding when a list group is the first or last item.
    '[&:has(>[data-slot=list-group]:is(:first-child))]:pt-0',
    '[&:has(>[data-slot=list-group]:is(:last-child))]:pb-0',
]) }}>
    {{ $slot }}
</div>
