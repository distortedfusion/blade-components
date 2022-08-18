<div {{ $attributes->class([
    'table-cell align-middle text-sm text-'.$align,
    'px-4' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
    'rounded-l' => $isFirst,
    'rounded-r' => $isLast,
    'bg-gray-50' => $isEven,
]) }}>
    {{ $slot }}
</div>
