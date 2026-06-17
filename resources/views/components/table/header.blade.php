@props(['sticky' => false])
@aware(['hover' => false])
<thead data-slot="table-header" {{ $attributes->class([
    '[&>*]:text-[var(--muted-foreground)]',
    'sticky top-0 z-20 bg-[var(--background)]' => $sticky,
    '[&>[data-slot=table-row]:hover>*]:bg-transparent' => $hover,
]) }}>
    {{ $slot }}
</thead>
