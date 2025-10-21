@props(['style' => 'primary'])
<div data-slot="three-dot" {{ $attributes->class([
    'inline-block',

    '[&_[data-slot=dot]]:bg-[var(--primary)]' => $style === 'primary',
    '[&_[data-slot=dot]]:bg-[var(--success)]' => $style === 'success',
    '[&_[data-slot=dot]]:bg-[var(--info)]' => $style === 'info',
    '[&_[data-slot=dot]]:bg-[var(--warning)]' => $style === 'warning',
    '[&_[data-slot=dot]]:bg-[var(--danger)]' => $style === 'danger',
]) }}>
    <div class="inline-flex items-center gap-x-1">
        <div data-slot="dot" class="size-1 rounded-full animate-[pulse_2s_infinite_cubic-bezier(.4,0,.6,1)_0ms]"></div>
        <div data-slot="dot" class="size-1 rounded-full animate-[pulse_2s_infinite_cubic-bezier(.4,0,.6,1)_125ms]"></div>
        <div data-slot="dot" class="size-1 rounded-full animate-[pulse_2s_infinite_cubic-bezier(.4,0,.6,1)_250ms]"></div>
    </div>
</div>
