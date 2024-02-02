<div {{ $attributes->class([
    'space-y-8 [&_section:not(:first-child)]:pt-8',
    'divide-y divide-black/10 dark:divide-white/10',
]) }}>
    {{ $slot }}
</div>
