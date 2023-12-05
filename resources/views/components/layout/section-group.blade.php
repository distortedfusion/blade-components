<div {{ $attributes->class([
    'space-y-8 [&_section:not(:first-child)]:pt-8',
    'divide-y divide-gray-200 dark:divide-gray-700',
]) }}>
    {{ $slot }}
</div>
