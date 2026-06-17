@aware(['caption' => 'bottom'])
<caption data-slot="table-caption" {{ $attributes->class([
    'text-[var(--muted-foreground)]',

    'mb-4' => $caption === 'top',
    'mt-4' => $caption === 'bottom',
]) }}>
    {{ $slot }}
</caption>
