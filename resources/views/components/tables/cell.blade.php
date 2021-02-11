<div {{ $attributes->merge(['class' => 'table-cell align-middle px-4 py-4 text-sm text-'.$align.($isFirst ? ' rounded-l' : null ).($isLast ? ' rounded-r' : null ).($isEven ? ' bg-gray-100' : null )]) }}>
    {{ $slot }}
</div>
