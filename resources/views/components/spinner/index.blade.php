@props(['size' => null])
<div {{ $attributes->class([
    'inline-flex items-center aspect-square',

    'w-8' => $size === 'lg',
    'w-4' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'w-2' => $size === 'sm',
]) }}>
    <div class="animate-spin w-full h-auto aspect-square border-2 border-black/10 dark:border-white/10 border-t-black dark:border-t-white rounded-full"></div>
</div>
