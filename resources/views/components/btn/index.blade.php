@php
$class = [
    'inline-flex items-center justify-center gap-x-2 shrink-0 transition-all',
    'text-sm font-semibold leading-8 shadow-none',

    'hover:no-underline hover:outline-0',
    'focus:no-underline focus:outline-0',

    'rounded-[var(--radius)]' => ! Str::contains($attributes->get('class'), ['rounded-']),

    'text-center' => is_null($alignment),
    'text-left' => $alignment === 'left',
    'text-right' => $alignment === 'right',

    // Button sizes...
    'h-14' => $size === 'xl',
    'h-12' => $size === 'lg',
    'h-10' => is_null($size) || ! in_array($size, ['sm', 'lg', 'xl']),
    'h-8' => $size === 'sm',

    'px-4' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),

    'py-3' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']) && $size === 'xl',
    'py-2' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']) && $size === 'lg',
    'py-2' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']) && is_null($size) || ! in_array($size, ['sm', 'lg', 'xl']),
    'py-0' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']) && $size === 'sm',

    // Styles...
    'border',
    'border-transparent' => $style !== 'outline',

    // Primary...
    'bg-[var(--primary)] text-[var(--primary-foreground)]' => $style === 'primary',
    'hover:bg-[color-mix(in_oklab,var(--primary)_90%,transparent)]' => $style === 'primary',
    'focus:bg-[color-mix(in_oklab,var(--primary)_90%,transparent)]' => $style === 'primary',
    'active:bg-[var(--primary)]' => $style === 'primary',

    // Secondary, Ghost and Outline...
    'bg-[var(--secondary)] text-[var(--secondary-foreground)]' => $style === 'secondary' || $style === 'ghost',
    'hover:bg-[color-mix(in_oklab,var(--secondary)_70%,transparent)]' => $style === 'secondary' || $style === 'ghost' || $style === 'outline',
    'focus:bg-[color-mix(in_oklab,var(--secondary)_70%,transparent)]' => $style === 'secondary' || $style === 'ghost' || $style === 'outline',
    'active:bg-[var(--secondary)]' => $style === 'secondary' || $style === 'ghost' || $style === 'outline',

    // Ghost...
    'bg-transparent' => $style === 'ghost',

    // Outline...
    'bg-transparent border-[var(--border)] text-[var(--secondary-foreground)]' => $style === 'outline',

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

$attributes = $attributes->merge(['data-slot' => 'button'])->class($class);
@endphp
@if(is_null($href) || $disabled)
<button type="{{ $type }}" {{ $attributes->merge(['disabled' => $disabled]) }}>
    @if($prefix ?? false)
        <div class="flex-shrink-0">{{ $prefix }}</div>
    @endif
    <div class="flex-grow">{{ $slot }}</div>
    @if($suffix ?? false)
        <div class="flex-shrink-0">{{ $suffix }}</div>
    @endif
</button>
@else
<a href="{{ $href }}" {{ $attributes }}>
    @if($prefix ?? false)
        <div class="flex-shrink-0">{{ $prefix }}</div>
    @endif
    <div class="flex-grow">{{ $slot }}</div>
    @if($suffix ?? false)
        <div class="flex-shrink-0">{{ $suffix }}</div>
    @endif
</a>
@endif
