@aware(['style' => 'default'])
<div {{ $attributes->class([
    'card-footer border-t flex items-center space-x-2 rounded-b-md',
    'px-4 sm:px-6' => ! Str::contains($attributes->get('class'), ['px-']),
    'py-3' => ! Str::contains($attributes->get('class'), ['py-']),

    'bg-gray-50 dark:bg-gray-900' => is_null($style) || ! in_array($style, ['warning', 'danger']),
    'bg-amber-50' => $style === 'warning',
    'bg-red-50' => $style === 'danger',

    'border-separate',
    'border-black/10 dark:border-white/10' => $style === 'default',
    'border-amber-200' => $style === 'warning',
    'border-red-200' => $style === 'danger',
]) }}>
    {{ $slot }}
</div>
