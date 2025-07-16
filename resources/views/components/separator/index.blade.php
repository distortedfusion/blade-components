@props(['vertical' => false])
@php
use Illuminate\View\ComponentAttributeBag;
@endphp
<div data-slot="separator" data-orientation="{{ $vertical ? 'vertical' : 'horizontal' }}" {{ $attributes->class([
    'border-0 bg-[var(--border)]',
    'self-center' => ! $vertical,
    'self-stretch' => $vertical,
    'h-px' => ! $vertical,
    'w-px' => $vertical,
]) }}></div>
