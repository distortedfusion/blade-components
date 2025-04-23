@props(['vertical' => false])
@php
use Illuminate\View\ComponentAttributeBag;
@endphp
<div data-slot="separator" data-orientation="{{ $vertical ? 'vertical' : 'horizontal' }}" {{ $attributes->class([
    'self-center self-stretch',
    'border-0 bg-[var(--border)]',
    'h-px' => ! $vertical,
    'w-px' => $vertical,
]) }}></div>
