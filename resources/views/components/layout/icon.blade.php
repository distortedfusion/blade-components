@props(['icon', 'style' => 'primary', 'size' => null])
<div {{ $attributes->class([
    'inline-flex items-center justify-center border rounded aspect-square',

    'w-12' => $size === 'lg',
    'w-10' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'w-8' => $size === 'sm',
    'w-6' => $size === 'xs',

    // Primary color...
    'bg-black border-black text-gray-100' => $style === 'primary',
    'dark:bg-white dark:border-white dark:text-gray-900' => $style === 'primary',

    // Secondary color...
    'bg-gray-100 border-gray-100 text-gray-900' => $style === 'secondary',
    'dark:bg-gray-900 dark:border-gray-900 dark:text-gray-100' => $style === 'secondary',
]) }}>
    <x-dynamic-component :component="$icon" class="size-4" />
</div>
