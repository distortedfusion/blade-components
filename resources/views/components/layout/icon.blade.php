@props(['icon', 'style' => 'primary', 'size' => 'default'])
<div {{ $attributes->class([
    'inline-flex items-center justify-center border rounded-md aspect-square',

    '[&>[data-slot=icon]]:size-4 w-12' => $size === 'lg',
    '[&>[data-slot=icon]]:size-4 w-10' => $size === 'default',
    '[&>[data-slot=icon]]:size-4 w-8' => $size === 'sm',
    '[&>[data-slot=icon]]:size-3 w-6' => $size === 'xs',

    // Primary...
    'bg-[var(--primary)] border-transparent text-[var(--primary-foreground)]' => $style === 'primary',

    // Secondary...
    'bg-[var(--secondary)] border-transparent text-[var(--secondary-foreground)]' => $style === 'secondary',

    // Outline...
    'bg-transparent border-[var(--border)] text-[var(--secondary-foreground)]' => $style === 'outline',
]) }}>
    <x-dynamic-component :component="$icon" data-slot="icon" />
</div>
