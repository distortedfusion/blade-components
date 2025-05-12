@php
use Illuminate\Support\Str;
@endphp
@props(['style' => 'default'])
<div data-slot="card" {{ $attributes->class([
    'w-full rounded-[var(--radius)]',

    // Background / Foreground...
    'bg-[var(--card)]' => ! Str::contains($attributes->get('class'), ['bg-']),
    'text-[var(--card-foreground)]' => ! Str::contains($attributes->get('class'), ['text-']),

    // Border...
    'border border-[var(--border)]' => ! Str::contains($attributes->get('class'), ['border-']),

    // Border between elements...
    'divide-y divide-[var(--border)]' => ! Str::contains($attributes->get('class'), ['divide-']),

    // Specific styling...
    'ring-1 ring-offset-2 ring-offset-[var(--background)] ring-[color-mix(in_oklab,var(--success)_50%,transparent)]' => $style === 'success',
    'ring-1 ring-offset-2 ring-offset-[var(--background)] ring-[color-mix(in_oklab,var(--info)_50%,transparent)]' => $style === 'info',
    'ring-1 ring-offset-2 ring-offset-[var(--background)] ring-[color-mix(in_oklab,var(--warning)_50%,transparent)]' => $style === 'warning',
    'ring-1 ring-offset-2 ring-offset-[var(--background)] ring-[color-mix(in_oklab,var(--danger)_50%,transparent)]' => $style === 'danger',
    'border-transparent' => $style === 'ghost',

    // Specific styling, applicable to card footers...
    // '[&>[data-slot=card-footer]]:border-[var(--border)]',

    // Card body, reset border when following by a card header...
    '[&:has([data-slot=card-header]+[data-slot=card-body])>[data-slot=card-header]]:border-b-0',
    '[&:has([data-slot=card-header]+[data-slot=card-body])>[data-slot=card-body]]:pt-0',

    // List group, reset borders when list group is directly added to card...
    // This is an alternative to supplying the flush attribute directly.
    '[&>[data-slot=list-group]]:rounded-none',
    '[&>[data-slot=list-group]]:border-0',
]) }}>
    {{ $slot }}
</div>
