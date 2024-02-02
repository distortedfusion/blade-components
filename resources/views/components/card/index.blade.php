<div {{ $attributes->class([
    'card rounded-lg',
    'border border-black/10 dark:border-white/10',
    'bg-white/95 dark:bg-white/5',
    'ring-2 ring-offset-2 ring-offset-white dark:ring-offset-black ring-amber-500' => $style === 'warning',
    'ring-2 ring-offset-2 ring-offset-white dark:ring-offset-black ring-red-500' => $style === 'danger',
]) }}>
    {{ $slot }}
</div>
