@props(['style' => 'default', 'variant' => null])
<div {{ $attributes->class([
    'inline-block',

    '[&_[data-slot=pulser-dot]]:bg-[var(--primary)]' => $style === 'default',
    '[&_[data-slot=pulser-dot]]:bg-[var(--success)]' => $style === 'success',
    '[&_[data-slot=pulser-dot]]:bg-[var(--info)]' => $style === 'info',
    '[&_[data-slot=pulser-dot]]:bg-[var(--warning)]' => $style === 'warning',
    '[&_[data-slot=pulser-dot]]:bg-[var(--danger)]' => $style === 'danger',
]) }}>
    @if($variant !== 'dot')
        <div class="inline-flex items-center gap-x-1">
            <div data-slot="pulser-dot" class="size-1 rounded-full animate-[pulse_2s_infinite_cubic-bezier(.4,0,.6,1)_0ms]"></div>
            <div data-slot="pulser-dot" class="size-1 rounded-full animate-[pulse_2s_infinite_cubic-bezier(.4,0,.6,1)_125ms]"></div>
            <div data-slot="pulser-dot" class="size-1 rounded-full animate-[pulse_2s_infinite_cubic-bezier(.4,0,.6,1)_250ms]"></div>
        </div>
    @else
        <div class="h-2 w-2 relative">
            <div data-slot="pulser-dot" class="h-full w-full rounded-full relative"></div>
            <div data-slot="pulser-dot" class="h-full w-full rounded-full absolute top-0 left-0 opacity-75 animate-ping"></div>
        </div>
    @endif
</div>
