<div {{ $attributes->class([
    'card rounded-lg',
    'border border-black/10 dark:border-white/10',
    'bg-white dark:bg-white/5',
    'ring-2 ring-offset-2 ring-offset-white dark:ring-offset-black ring-green-500' => $style === 'success',
    'ring-2 ring-offset-2 ring-offset-white dark:ring-offset-black ring-blue-500' => $style === 'info',
    'ring-2 ring-offset-2 ring-offset-white dark:ring-offset-black ring-amber-500' => $style === 'warning',
    'ring-2 ring-offset-2 ring-offset-white dark:ring-offset-black ring-red-500' => $style === 'danger',
]) }}>
    {{ $slot }}
</div>
