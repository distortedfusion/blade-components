@props(['reverse' => false])
<div data-slot="stack" data-order="{{ $reverse ? 'desc' : 'asc' }}" {{ $attributes->class([
    'flex relative',

    // Overlap previous/next child in stack...
    '[&>*:not(:first-child)]:-mt-[calc(var(--radius)*2)] flex-col' => ! $reverse,
    '[&>*:not(:last-child)]:-mt-[calc(var(--radius)*2)] flex-col-reverse' => $reverse,
    '[&>*]:relative',

    // Add a spacer to each child to compensate for the ovelap...
    // Note that reversing the display order doesn't change the DOM order.
    '[&>*:before,&>*:after]:h-[calc(var(--radius)*2)] [&>*:before,&>*:after]:block',
    '[&>*:not(:last-child):after]:content-[""]' => ! $reverse,
    '[&>*:not(:last-child):before]:content-[""]' => $reverse,
]) }}>
    {{ $slot }}
</div>
