@props(['reverse' => false])
<div data-slot="stack" data-order="{{ $reverse ? 'desc' : 'asc' }}" {{ $attributes->class([
    'flex relative',

    // Stacking direction...
    'flex-col' => ! $reverse,
    'flex-col-reverse' => $reverse,

    // Overlap previous/next child in stack...
    '[&>*]:-mt-[calc(var(--radius)*2)] [&>*]:relative',

    // Add a spacer to each child to compensate for the ovelap...
    // Note that reversing the display order doesn't change the DOM order.
    '[&>*:before,&>*:after]:h-[calc(var(--radius)*2)] [&>*:before,&>*:after]:block',
    '[&>*:not(:last-child):after]:content-[""]' => ! $reverse,
    '[&>*:not(:last-child):before]:content-[""]' => $reverse,
]) }}>
    {{ $slot }}
</div>
