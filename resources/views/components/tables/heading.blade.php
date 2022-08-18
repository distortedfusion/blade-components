<div {{ $attributes->class([
    'table-cell align-middle border-t border-b relative text-xs font-semibold',
    'uppercase' => ! Str::contains($attributes->get('class'), ['uppercase', 'lowercase', 'normal-case', 'capitalize']),
    'px-4' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-2' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
    'rounded-l border-l' => $isFirst,
    'rounded-r border-r' => $isLast,
]) }}>
    {{ $slot }}
</div>
