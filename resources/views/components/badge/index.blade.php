@props(['size' => 'default', 'style' => 'primary'])
<div {{ $attributes->class([
    'inline-flex items-center justify-center gap-x-1 rounded-[var(--radius-inner)] shrink-0',
    'text-xs font-semibold',

    // Badge sizes...
    'px-2 py-1 -my-1' => $size === 'default',
    'px-1 py-0.5 -my-0.5' => $size === 'sm',

    // Styles...
    'text-[var(--primary-foreground)] bg-[var(--primary)]' => $style === 'primary',
    'text-[var(--secondary-foreground)] bg-[var(--secondary)]' => $style === 'secondary',

    'text-[var(--success-foreground)] bg-[color-mix(in_oklab,var(--success)_10%,transparent)]' => $style === 'success',
    'text-[var(--info-foreground)] bg-[color-mix(in_oklab,var(--info)_10%,transparent)]' => $style === 'info',
    'text-[var(--warning-foreground)] bg-[color-mix(in_oklab,var(--warning)_10%,transparent)]' => $style === 'warning',
    'text-[var(--danger-foreground)] bg-[color-mix(in_oklab,var(--danger)_10%,transparent)]' => $style === 'danger',

    // Icons...
    '[&_svg]:size-3',

    '[&_svg]:text-[var(--muted-foreground)]' => in_array($style, ['primary', 'secondary']),
    '[&_svg]:text-[var(--success)]' => $style === 'success',
    '[&_svg]:text-[var(--info)]' => $style === 'info',
    '[&_svg]:text-[var(--warning)]' => $style === 'warning',
    '[&_svg]:text-[var(--danger)]' => $style === 'danger',
]) }} role="alert">
    @if($icon ?? false)
        {{ $icon }}
    @endif
    {{ $slot }}
</div>
