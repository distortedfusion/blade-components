@props(['highlight' => null])
<tbody data-slot="table-body" {{ $attributes->class([
    '[&>[data-slot=table-row]:last-child>*]:border-b-0',

    // Row highlighting...
    '[&>[data-slot=table-row]:nth-child(even)>*]:bg-[color-mix(in_oklab,var(--muted)_70%,var(--background))]' => $highlight === 'even',
    '[&>[data-slot=table-row]:nth-child(odd)>*]:bg-[color-mix(in_oklab,var(--muted)_70%,var(--background))]' => $highlight === 'odd',

    // Sticky cell adjustments...
    '[&>[data-slot=table-row]:nth-child(even)>*:after]:from-[color-mix(in_oklab,var(--muted)_70%,var(--background))]' => $highlight === 'even',
    '[&>[data-slot=table-row]:nth-child(odd)>*:after]:from-[color-mix(in_oklab,var(--muted)_70%,var(--background))]' => $highlight === 'odd',
]) }}>
    {{ $slot }}
</tbody>
