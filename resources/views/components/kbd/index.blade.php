<kbd data-slot="kbd" {{ $attributes->class([
    'inline-flex items-center justify-center rounded-[var(--radius-inner)] shrink-0',
    'h-5 w-fit min-w-5 px-1 bg-[var(--muted)] text-[var(--muted-foreground)]',
    'font-sans text-xs font-medium',

    '[&_svg]:size-3 [&_svg]:text-[var(--muted-foreground)]',
]) }}>
    {{ $slot }}
</kbd>
