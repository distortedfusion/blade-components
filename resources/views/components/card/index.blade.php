@php
use Illuminate\Support\Str;
@endphp
@props(['style' => 'default'])
<div data-slot="card" {{ $attributes->class([
    'w-full rounded-lg',

    // Background...
    'bg-white dark:bg-gray-950' => ! Str::contains($attributes->get('class'), ['bg-']),

    // Border...
    'border' => ! Str::contains($attributes->get('class'), ['border-']),

    // Border between elements, excluding the card footer from receiving the same color...
    'divide-y' => ! Str::contains($attributes->get('class'), ['divide-']),
    '[&>:not([data-slot=card-footer])]:border-black/10 dark:[&>:not([data-slot=card-footer])]:border-white/10' => ! Str::contains($attributes->get('class'), ['divide-']),

    // Specific styling...
    'border-black/10 dark:border-white/10' => $style === 'default',
    'border-green-500 dark:border-green-500' => $style === 'success',
    'border-blue-500 dark:border-blue-500' => $style === 'info',
    'border-amber-500 dark:border-amber-500' => $style === 'warning',
    'border-red-500 dark:border-red-500' => $style === 'danger',
    'border-transparent dark:border-transparent' => $style === 'ghost',

    // Specific styling, applicable to card footers...
    '[&>[data-slot=card-footer]]:border-black/10 dark:[&>[data-slot=card-footer]]:border-white/10' => $style === 'default' || $style === 'ghost',
    '[&>[data-slot=card-footer]]:border-green-500 dark:[&>[data-slot=card-footer]]:border-green-500' => $style === 'success',
    '[&>[data-slot=card-footer]]:border-blue-500 dark:[&>[data-slot=card-footer]]:border-blue-500' => $style === 'info',
    '[&>[data-slot=card-footer]]:border-amber-500 dark:[&>[data-slot=card-footer]]:border-amber-500' => $style === 'warning',
    '[&>[data-slot=card-footer]]:border-red-500 dark:[&>[data-slot=card-footer]]:border-red-500' => $style === 'danger',

    // Card body, reset border when following by a card header...
    '[&:has([data-slot=card-header]+[data-slot=card-body])>[data-slot=card-body]]:border-t-0',
    '[&:has([data-slot=card-header]+[data-slot=card-body])>[data-slot=card-body]]:pt-0',

    // List group, reset borders when list group is directly added to card...
    // This is an alternative to supplying the flush attribute directly.
    '[&>[data-slot=list-group]]:rounded-none',
    '[&>[data-slot=list-group]]:border-0',
]) }}>
    {{ $slot }}
</div>
