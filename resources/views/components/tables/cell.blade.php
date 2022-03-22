<div {{ $attributes->class([
    'table-cell align-middle px-4 py-4 text-sm text-'.$align,
    'rounded-l' => $isFirst,
    'rounded-r' => $isLast,
    'bg-gray-50' => $isEven,
]) }}>
    {{ $slot }}
</div>
