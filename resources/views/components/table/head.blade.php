@props(['align' => 'start', 'sticky' => false])
<th data-slot="table-head" {{ $attributes->class([
    'align-middle p-2 [&:has([role="checkbox"])]:p-0',
    '[:where(&)]:bg-[var(--background)] transition-colors',

    'font-medium',

    '[:where(&)]:text-left' => $align === 'start',
    '[:where(&)]:text-center' => $align === 'center',
    '[:where(&)]:text-right' => $align === 'end',

    'sticky first:left-0 last:right-0 z-10' => $sticky,
    'after:from-[var(--background)] after:to-transparent after:w-2 after:absolute after:inset-y-0 after:pointer-events-none' => $sticky,
    'first:after:bg-linear-to-r first:after:right-0 first:after:translate-x-full' => $sticky,
    'last:after:bg-linear-to-l last:after:left-0 last:after:-translate-x-full' => $sticky,
]) }}>
    {{ $slot }}
</th>
