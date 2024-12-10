@aware(['style' => 'default'])
<div data-slot="card-footer" {{ $attributes->class([
    'flex items-center space-x-2 rounded-b-md',
    'px-4 sm:px-6' => ! Str::contains($attributes->get('class'), ['px-']),
    'py-3' => ! Str::contains($attributes->get('class'), ['py-']),

    'border-t',
    'dark:border-white/10' => $style === 'default',
    'border-green-500/50 dark:border-green-500/50' => $style === 'success',
    'border-blue-500/50 dark:border-blue-500/50' => $style === 'info',
    'border-amber-500/50 dark:border-amber-500/50' => $style === 'warning',
    'border-red-500/50 dark:border-red-500/50' => $style === 'danger',
]) }}>
    {{ $slot }}
</div>
