@php
use Illuminate\Support\Str;
@endphp
@props(['style' => 'default'])
<div data-slot="card" {{ $attributes->class([
    'w-full flex flex-col gap-4 rounded-[var(--radius)]',

    'py-4' => ! Str::contains($attributes->get('class'), ['p-', 'py-', 'pt-', 'pb-']),

    // Background / Foreground...
    'text-[var(--card-foreground)]' => ! Str::contains($attributes->get('class'), ['text-']),

    // Border...
    'border border-[var(--border)]' => ! Str::contains($attributes->get('class'), ['border-']),

    // Styles...
    'bg-[var(--card)]' => $style === 'default',
    'bg-[var(--muted)]' => $style === 'muted',

    'bg-[var(--card)] border-transparent' => $style === 'ghost',

    'bg-[var(--card)] ring-1 ring-offset-2 ring-offset-[var(--background)] ring-[color-mix(in_oklab,var(--success)_50%,transparent)]' => $style === 'success',
    'bg-[var(--card)] ring-1 ring-offset-2 ring-offset-[var(--background)] ring-[color-mix(in_oklab,var(--info)_50%,transparent)]' => $style === 'info',
    'bg-[var(--card)] ring-1 ring-offset-2 ring-offset-[var(--background)] ring-[color-mix(in_oklab,var(--warning)_50%,transparent)]' => $style === 'warning',
    'bg-[var(--card)] ring-1 ring-offset-2 ring-offset-[var(--background)] ring-[color-mix(in_oklab,var(--danger)_50%,transparent)]' => $style === 'danger',

    // Account for the padding element when used as a direct descendant of a `x-stack` component...
    // - Equals the gap-x class.
    '[[data-slot=stack][data-order=asc]>*:not(:last-child)]:after:-mt-4',
    '[[data-slot=stack][data-order=desc]>*:not(:last-child)]:before:-mb-4',

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
    '[&>[data-slot=list-group]_[data-slot=list-group-item]]:px-4',
    '[&>[data-slot=list-group]_[data-slot=list-group-item]_[data-slot=list-group-item-indicator]]:-mr-4',

    // Reset card padding when a list group is the first or last item.
    '[&:has(>[data-slot=list-group]:is(:first-child))]:pt-0',
    '[&:has(>[data-slot=list-group]:is(:last-child))]:pb-0',
]) }}>
    {{ $slot }}
</div>
