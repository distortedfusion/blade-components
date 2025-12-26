@props(['size' => 'default', 'style' => 'primary', 'alignment' => 'center', 'disabled' => false, 'type' => 'button', 'href' => null])
@php
use DistortedFusion\BladeComponents\BladeComponents;

$class = [
    'inline-flex items-center justify-center gap-x-1.5 shrink-0 transition-all',
    'text-sm/5 font-semibold shadow-none',

    'hover:no-underline hover:outline-0',
    'focus:no-underline focus:outline-0',

    'rounded-[var(--radius)]' => ! Str::contains($attributes->get('class'), ['rounded-']),

    'text-center' => is_null($alignment),
    'text-left' => $alignment === 'left',
    'text-right' => $alignment === 'right',

    // Icons...
    '[&_svg]:size-4',

    // Button sizes...
    'h-10' => $size === 'lg',
    'h-9' => $size === 'default',
    'h-8' => $size === 'sm',

    'size-10' => $size === 'icon-lg',
    'size-9' => $size === 'icon',
    'size-8' => $size === 'icon-sm',

    'px-6' => ! BladeComponents::containsHorizontalPaddingClass($attributes->get('class')) && ! Str::startsWith($size, 'icon-') && $size === 'lg',
    'px-4' => ! BladeComponents::containsHorizontalPaddingClass($attributes->get('class')) && ! Str::startsWith($size, 'icon-') && $size === 'default',
    'px-3' => ! BladeComponents::containsHorizontalPaddingClass($attributes->get('class')) && ! Str::startsWith($size, 'icon-') && $size === 'sm',

    'py-2.5' => ! BladeComponents::containsVerticalPaddingClass($attributes->get('class')) && ! Str::startsWith($size, 'icon-') && $size === 'lg',
    'py-2' => ! BladeComponents::containsVerticalPaddingClass($attributes->get('class')) && ! Str::startsWith($size, 'icon-') && $size === 'default',
    'py-1.5' => ! BladeComponents::containsVerticalPaddingClass($attributes->get('class')) && ! Str::startsWith($size, 'icon-') && $size === 'sm',

    // Styles...
    'border',
    'border-transparent' => $style !== 'outline',

    // Primary...
    'bg-[var(--primary)] text-[var(--primary-foreground)]' => $style === 'primary',
    'hover:bg-[color-mix(in_oklab,var(--primary)_90%,transparent)]' => $style === 'primary',
    'focus:bg-[color-mix(in_oklab,var(--primary)_90%,transparent)]' => $style === 'primary',
    'active:bg-[var(--primary)]' => $style === 'primary',

    // Secondary, Ghost and Outline...
    'bg-[var(--secondary)] text-[var(--secondary-foreground)]' => in_array($style, ['secondary', 'ghost']),
    'hover:bg-[color-mix(in_oklab,var(--secondary)_70%,transparent)]' => in_array($style, ['secondary', 'ghost', 'outline']),
    'focus:bg-[color-mix(in_oklab,var(--secondary)_70%,transparent)]' => in_array($style, ['secondary', 'ghost', 'outline']),
    'active:bg-[var(--secondary)]' => in_array($style, ['secondary', 'ghost', 'outline']),

    // Ghost...
    'bg-transparent' => $style === 'ghost',

    // Outline...
    'bg-[var(--background)] border-[var(--border)] text-[var(--secondary-foreground)]' => $style === 'outline',

    'dark:bg-[color-mix(in_oklab,var(--input)_30%,transparent)]' => $style === 'outline',
    'dark:hover:bg-[color-mix(in_oklab,var(--input)_70%,transparent)]' => $style === 'outline',
    'dark:focus:bg-[color-mix(in_oklab,var(--input)_70%,transparent)]' => $style === 'outline',

    // Success...
    'bg-[color-mix(in_oklab,var(--success)_10%,transparent)] text-[var(--success-foreground)]' => $style === 'success',
    'hover:bg-[color-mix(in_oklab,var(--success)_20%,transparent)]' => $style === 'success',
    'focus:bg-[color-mix(in_oklab,var(--success)_20%,transparent)]' => $style === 'success',
    'active:bg-[color-mix(in_oklab,var(--success)_10%,transparent)]' => $style === 'success',

    // Info...
    'bg-[color-mix(in_oklab,var(--info)_10%,transparent)] text-[var(--info-foreground)]' => $style === 'info',
    'hover:bg-[color-mix(in_oklab,var(--info)_20%,transparent)]' => $style === 'info',
    'focus:bg-[color-mix(in_oklab,var(--info)_20%,transparent)]' => $style === 'info',
    'active:bg-[color-mix(in_oklab,var(--info)_10%,transparent)]' => $style === 'info',

    // Warning...
    'bg-[color-mix(in_oklab,var(--warning)_10%,transparent)] text-[var(--warning-foreground)]' => $style === 'warning',
    'hover:bg-[color-mix(in_oklab,var(--warning)_20%,transparent)]' => $style === 'warning',
    'focus:bg-[color-mix(in_oklab,var(--warning)_20%,transparent)]' => $style === 'warning',
    'active:bg-[color-mix(in_oklab,var(--warning)_10%,transparent)]' => $style === 'warning',

    // Danger...
    'bg-[color-mix(in_oklab,var(--danger)_10%,transparent)] text-[var(--danger-foreground)]' => $style === 'danger',
    'hover:bg-[color-mix(in_oklab,var(--danger)_20%,transparent)]' => $style === 'danger',
    'focus:bg-[color-mix(in_oklab,var(--danger)_20%,transparent)]' => $style === 'danger',
    'active:bg-[color-mix(in_oklab,var(--danger)_10%,transparent)]' => $style === 'danger',

    // Disabled...
    'disabled:cursor-not-allowed disabled:opacity-50',
];

$attributes = $attributes->merge([
    'data-style' => $style,
    'data-size' => $size,
    'data-slot' => 'button',
])->class($class);
@endphp
@if(is_null($href) || $disabled)
<button type="{{ $type }}" {{ $attributes->merge(['disabled' => $disabled]) }}>
@else
<a href="{{ $href }}" {{ $attributes }}>
@endif
    @if($prefix ?? false)
        {{ $prefix }}
    @endif
    {{ $slot }}
    @if($suffix ?? false)
        {{ $suffix }}
    @endif
@if(is_null($href) || $disabled)
</button>
@else
</a>
@endif
