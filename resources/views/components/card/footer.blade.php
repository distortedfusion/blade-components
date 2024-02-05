@aware(['style' => 'default'])
<div {{ $attributes->class([
    'card-footer flex items-center space-x-2 rounded-b-md',
    'px-4 sm:px-6' => ! Str::contains($attributes->get('class'), ['px-']),
    'py-3' => ! Str::contains($attributes->get('class'), ['py-']),

    'border-t',
    'bg-black/5 dark:bg-white/5 border-black/10 dark:border-white/10' => $style === 'default',
    'bg-green-50/95 dark:bg-green-500/10 border-green-500/50 dark:border-green-500/50' => $style === 'success',
    'bg-blue-50/95 dark:bg-blue-500/10 border-blue-500/50 dark:border-blue-500/50' => $style === 'info',
    'bg-amber-50/95 dark:bg-amber-500/10 border-amber-500/50 dark:border-amber-500/50' => $style === 'warning',
    'bg-red-50/95 dark:bg-red-500/10 border-red-500/50 dark:border-red-500/50' => $style === 'danger',
]) }}>
    {{ $slot }}
</div>
