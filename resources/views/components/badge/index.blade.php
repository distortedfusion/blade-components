@props(['style' => 'default', 'size' => null, 'icon' => null])
<div {{ $attributes->class([
    'inline-flex items-center space-x-2 rounded-md',

    // Badge sizes...
    'px-3 py-1 text-base' => $size === 'lg',
    'px-2 py-1 text-sm' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'px-1 py-0.5 text-xs' => $size === 'sm',

    'text-gray-700 dark:text-gray-300 bg-black/5 dark:bg-white/5 border-black/10 dark:border-white/10' => $style === 'default',
    'text-green-700 dark:text-green-300 bg-green-50/95 dark:bg-green-500/10 border-green-500/50 dark:border-green-500/50' => $style === 'success',
    'text-blue-700 dark:text-blue-300 bg-blue-50/95 dark:bg-blue-500/10 border-blue-500/50 dark:border-blue-500/50' => $style === 'info',
    'text-amber-700 dark:text-amber-300 bg-amber-50/95 dark:bg-amber-500/10 border-amber-500/50 dark:border-amber-500/50' => $style === 'warning',
    'text-red-700 dark:text-red-300 bg-red-50/95 dark:bg-red-500/10 border-red-500/50 dark:border-red-500/50' => $style === 'danger',
]) }} role="alert">
    @if(! is_null($icon))
        <div class="flex-shrink-0">
            <x-dynamic-component :component="$icon" class="text-inherit opacity-80 size-4" />
        </div>
    @endif
    <div class="flex-grow">{{ $slot }}</div>
</div>
