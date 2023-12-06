<div {{ $attributes->class([
    'inline-flex items-center space-x-2 border rounded-md',

    // Badge sizes...
    'p-3 py-1 text-base' => $size === 'lg',
    'p-2 py-0.5 text-sm' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'p-1 py-0 text-xs' => $size === 'sm',

    'text-green-900 border-green-200 bg-green-100' => $style === 'success',
    'text-blue-900 border-blue-200 bg-blue-100' => $style === 'info',
    'text-yellow-900 border-yellow-200 bg-yellow-100' => $style === 'warning',
    'text-red-900 border-red-200 bg-red-100' => $style === 'danger',
    'text-gray-700 border-gray-300 bg-gray-100' => $style === 'default',
    'dark:text-gray-300 dark:border-gray-700 dark:bg-gray-900' => $style === 'default',
]) }} role="alert">
    @if(! is_null($icon))
        <div class="flex-shrink-0">
            <x-badge.icon :icon="$icon" />
        </div>
    @endif
    <div class="flex-grow">{{ $slot }}</div>
</div>
