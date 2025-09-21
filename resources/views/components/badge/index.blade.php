@props(['size' => null, 'style' => 'default', 'icon' => null])
@php
use Illuminate\View\ComponentAttributeBag;
@endphp
<div {{ $attributes->class([
    'inline-flex items-center gap-x-1 rounded-[var(--radius-inner)]',
    'text-xs font-semibold',

    'px-2 py-1 -my-1' => is_null($size),
    'px-1 py-0.5 -my-0.5' => $size === 'sm',

    'text-[var(--primary-foreground)] bg-[var(--primary)]' => $style === 'default',
    'text-[var(--secondary-foreground)] bg-[var(--secondary)]' => $style === 'secondary',

    'text-[var(--success-foreground)] bg-[color-mix(in_oklab,var(--success)_10%,transparent)]' => $style === 'success',
    'text-[var(--info-foreground)] bg-[color-mix(in_oklab,var(--info)_10%,transparent)]' => $style === 'info',
    'text-[var(--warning-foreground)] bg-[color-mix(in_oklab,var(--warning)_10%,transparent)]' => $style === 'warning',
    'text-[var(--danger-foreground)] bg-[color-mix(in_oklab,var(--danger)_10%,transparent)]' => $style === 'danger',
]) }} role="alert">
    @if(! is_null($icon))
        <div {{ (new ComponentAttributeBag)->class([
            'flex-shrink-0 inline-block',
            'text-[var(--success)]' => $style === 'success',
            'text-[var(--info)]' => $style === 'info',
            'text-[var(--warning)]' => $style === 'warning',
            'text-[var(--danger)]' => $style === 'danger',
            'text-[var(--muted-foreground)]' => in_array($style, ['default', 'secondary']),
        ]) }}>
            <x-dynamic-component :component="$icon" class="size-3 text-inherit" />
        </div>
    @endif
    <div class="flex-grow">{{ $slot }}</div>
</div>
