<div {{ $attributes->merge(['class' => 'table-cell align-middle px-4 py-2 border-t border-b relative text-xs uppercase font-semibold'.($isFirst ? ' rounded-l border-l' : null ).($isLast ? ' rounded-r border-r' : null )]) }}>
    {{ $slot }}
</div>
