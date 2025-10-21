@props(['style' => 'default'])
<div data-slot="pulser" {{ $attributes->class([
    'inline-block',

    '[&_[data-slot=dot]]:bg-[var(--primary)]' => $style === 'default',
    '[&_[data-slot=dot]]:bg-[var(--success)]' => $style === 'success',
    '[&_[data-slot=dot]]:bg-[var(--info)]' => $style === 'info',
    '[&_[data-slot=dot]]:bg-[var(--warning)]' => $style === 'warning',
    '[&_[data-slot=dot]]:bg-[var(--danger)]' => $style === 'danger',
]) }}>
    <div class="h-2 w-2 relative">
        <div data-slot="dot" class="h-full w-full rounded-full relative"></div>
        <div data-slot="dot" class="h-full w-full rounded-full absolute top-0 left-0 opacity-75 animate-ping"></div>
    </div>
</div>
