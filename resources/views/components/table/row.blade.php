@props(['sticky' => false])
@aware(['hover' => false])
<tr data-slot="table-row" {{ $attributes->class([
    'sticky top-0 [&>*]:bg-[var(--background)]' => $sticky,
    '[&:hover>*]:bg-[color-mix(in_oklab,var(--secondary)_70%,var(--background))]' => $hover,

    // Apply border to descendants...
    '[&>*]:border-b [&>*]:border-[var(--border)]',
]) }}>
    {{ $slot }}
</tr>
