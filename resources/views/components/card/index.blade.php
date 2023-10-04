<div {{ $attributes->class([
    'card border rounded-lg',
    'bg-white dark:bg-black',
    'border-gray-300 dark:border-gray-700' => is_null($style) || ! in_array($style, ['warning', 'danger']),
    'border-amber-200' => $style === 'warning',
    'border-red-200' => $style === 'danger',
]) }}>
    {{ $slot }}
</div>
