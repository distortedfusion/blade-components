<div {{ $attributes->class([
    'list-group flex flex-col',
    'list-group-flush' => $flush,
]) }}>
    {{ $slot }}
</div>
