<div {{ $attributes->class([
    'list-group flex flex-col rounded',
    'border border-black/10' => ! $flush,
    'divide-y divide-black/10 dark:divide-white/10',
]) }}>
    {{ $slot }}
</div>
