<div {{ $attributes->merge(['class' => 'table-cell px-4 py-2 text-sm text-'.$align.($isFirst() ? ' rounded-l' : null ).($isLast() ? ' rounded-r' : null ).($isEvenRow() ? ' bg-gray-100' : null )]) }}>
    {{ $slot }}
</div>
