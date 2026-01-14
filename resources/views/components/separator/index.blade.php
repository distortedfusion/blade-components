@props(['style' => 'solid', 'vertical' => false])
@php
use Illuminate\View\ComponentAttributeBag;

$withSlot = trim($slot) && ! $vertical;

$class = [
    'border-0',

    'self-center' => ! $vertical,
    'self-stretch' => $vertical,
    'h-px' => ! $vertical,
    'w-px' => $vertical,

    // Styles...
    'bg-[var(--border)]' => $style === 'solid',

    'bg-linear-[90deg,var(--border),var(--border)_75%,transparent_75%,transparent_100%] bg-size-[5px_1px]' => $style === 'dashed' && ! $vertical,
    'bg-linear-[0deg,var(--border),var(--border)_75%,transparent_75%,transparent_100%] bg-size-[1px_5px]' => $style === 'dashed' && $vertical,
];
@endphp
@if(! $withSlot)
<div data-slot="separator" data-orientation="{{ $vertical ? 'vertical' : 'horizontal' }}" {{ $attributes->class($class) }}></div>
@else
<div data-slot="separator" data-orientation="horizontal" {{ $attributes->class([
    'w-full flex items-center gap-6',
    '[&>[data-slot=separator-arm]]:flex-1'
]) }}>
    <div data-slot="separator-arm" {{ (new ComponentAttributeBag())->class($class) }}></div>
    <div>{{ $slot }}</div>
    <div data-slot="separator-arm" {{ (new ComponentAttributeBag())->class($class) }}></div>
</div>
@endif
