<div data-slot="button-group" {{ $attributes->class([
    'flex items-center',
    '[&>[data-slot=button]:not(:first-child)]:rounded-l-none',
    '[&>[data-slot=button]:not(:first-child)]:border-l-0',
    '[&>[data-slot=button]:not(:last-child)]:rounded-r-none',
]) }}>
    {{ $slot }}
</div>
