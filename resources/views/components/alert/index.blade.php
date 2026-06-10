@php
use Illuminate\View\ComponentAttributeBag;
@endphp
<div data-slot="alert" {{ $attributes->class([
    'px-2 py-1 border',

    'rounded-[var(--radius)]' => ! Str::contains($attributes->get('class'), ['rounded']),

    'text-[var(--secondary-foreground)] border-[var(--border)]' => $style === 'default',
    'text-[var(--success-foreground)] bg-[color-mix(in_oklab,var(--success)_10%,var(--background))] border-[color-mix(in_oklab,var(--success)_50%,var(--background))]' => $style === 'success',
    'text-[var(--info-foreground)] bg-[color-mix(in_oklab,var(--info)_10%,var(--background))] border-[color-mix(in_oklab,var(--info)_50%,var(--background))]' => $style === 'info',
    'text-[var(--warning-foreground)] bg-[color-mix(in_oklab,var(--warning)_10%,var(--background))] border-[color-mix(in_oklab,var(--warning)_50%,var(--background))]' => $style === 'warning',
    'text-[var(--danger-foreground)] bg-[color-mix(in_oklab,var(--danger)_10%,var(--background))] border-[color-mix(in_oklab,var(--danger)_50%,var(--background))]' => $style === 'danger',
]) }} role="alert">
    <div class="flex items-start gap-x-2">
        @if(! is_null($icon))
            <div {{ (new ComponentAttributeBag)->class([
                'h-full my-1 p-2 flex-shrink-0 inline-block',
                'text-[var(--success)]' => $style === 'success',
                'text-[var(--info)]' => $style === 'info',
                'text-[var(--warning)]' => $style === 'warning',
                'text-[var(--danger)]' => $style === 'danger',
                'text-[var(--muted-foreground)]' => $style === 'default',
            ]) }}>
                <x-dynamic-component :component="$icon" class="size-4" />
            </div>
        @endif
        <div class="text-sm leading-6">
            @if (! is_null($title))
                <div class="flex items-start flex-wrap">
                    <div class="mt-2 font-semibold mr-2">{{ $title }}</div>
                    <div class="my-2">{{ $slot }}</div>
                </div>
            @else
                <div class="my-2">{{ $slot }}</div>
            @endif
        </div>
    </div>
</div>
