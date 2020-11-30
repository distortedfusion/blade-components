<div {{ $attributes->merge(['class' => 'table-cell p-2'.($isFirst() ? ' rounded-l' : null ).($isLast() ? ' rounded-r' : null ).($isEvenRow() ? ' bg-gray-100' : null )]) }}>
    {{ $slot }}
</div>
