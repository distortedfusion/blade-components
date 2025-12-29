@props(['style' => 'primary', 'size' => 'default'])
<div {{ $attributes->class([
    'inline-flex items-center',

    'size-8' => $size === 'lg',
    'size-4' => $size === 'default',
    'size-2' => $size === 'sm',

    '[&_[data-slot=spinner]]:border-t-[var(--primary)]' => $style === 'primary',
    '[&_[data-slot=spinner]]:border-t-[var(--success)]' => $style === 'success',
    '[&_[data-slot=spinner]]:border-t-[var(--info)]' => $style === 'info',
    '[&_[data-slot=spinner]]:border-t-[var(--warning)]' => $style === 'warning',
    '[&_[data-slot=spinner]]:border-t-[var(--danger)]' => $style === 'danger',
]) }}>
    <div data-slot="spinner" class="animate-spin w-full h-auto aspect-square border-2 border-[var(--border)] rounded-full"></div>
</div>
