<div {{ $attributes->class([
    'list-group flex flex-col rounded',
    'border border-black/10' => ! $flush,
    'divide-y',
]) }}>
    {{ $slot }}
</div>
