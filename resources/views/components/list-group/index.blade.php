<div data-slot="list-group" {{ $attributes->class([
    'w-full flex flex-col rounded',
    'border border-black/10 dark:border-white/10' => ! $flush,
    'divide-y divide-black/10 dark:divide-white/10',
]) }}>
    {{ $slot }}
</div>
