@props(['icon', 'style' => 'primary', 'size' => null])
<div {{ $attributes->class([
    'inline-flex items-center justify-center border rounded-md aspect-square',

    'w-12' => $size === 'lg',
    'w-10' => is_null($size) || ! in_array($size, ['xs', 'sm', 'lg']),
    'w-8' => $size === 'sm',
    'w-6' => $size === 'xs',

    // Primary...
    'bg-[var(--primary)] border-transparent text-[var(--primary-foreground)]' => $style === 'primary',

    // Secondary...
    'bg-[var(--secondary)] border-transparent text-[var(--secondary-foreground)]' => $style === 'secondary',

    // Outline...
    'bg-transparent border-[var(--border)] text-[var(--secondary-foreground)]' => $style === 'outline',
]) }}>
    <x-dynamic-component :component="$icon" class="size-4" />
</div>
