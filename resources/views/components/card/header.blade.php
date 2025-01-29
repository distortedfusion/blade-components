<div data-slot="card-header" {{ $attributes->class([
    'flex items-center justify-between space-x-2 rounded-t-lg',
    'p-4 sm:px-6',

    // Heading styling...
    '[&>[data-slot=heading]]:text-base [&>[data-slot=heading]]:py-1',
    '[&>*:is(h1,h2,h3,h4,h5,h6)]:text-base [&>*:is(h1,h2,h3,h4,h5,h6)]:py-1',
]) }}>
    {{ $slot }}
    @if($action ?? false)
        <div class="flex-shrink-0 flex items-center space-x-2">
            {{ $action }}
        </div>
    @endif
</div>
