@props(['scrollbar' => true, 'withCopy' => false, 'copyLabel' => 'Copy', 'copiedLabel' => 'Copied!'])
@php
use Illuminate\View\ComponentAttributeBag;

$refId = 'pre-'.crc32($slot);
@endphp
<div {{ $attributes->class([
        'flex items-start gap-x-2 rounded-[var(--radius)]',
        'bg-[var(--secondary)]' => ! Str::contains($attributes->get('class'), 'bg-'),
    ]) }}
    x-data="{
        'refId': '{{ $refId }}',
        'copyLabel': '{{ $copyLabel }}',
        'copiedLabel': '{{ $copiedLabel }}',
    }">
    <div {{ (new ComponentAttributeBag)->class([
        'flex-grow relative min-w-0',
        'before:content[\'\'] before:block before:w-4 before:absolute before:inset-y-0 before:right-0 before:pointer-events-none',
        'before:bg-gradient-to-r before:from-transparent before:to-[var(--secondary)]',
        'before:rounded-r-[var(--radius-inner)]' => ! $withCopy,
    ]) }}>
        <pre x-ref="{{ $refId }}" {{ (new ComponentAttributeBag())->class([
            'w-full px-4 py-2',
            'text-sm leading-6 font-mono',
            'overflow-scroll [scrollbar-width:_thin] [scrollbar-color:_var(--border)_transparent]' => $scrollbar,
            'overflow-scroll [&::-webkit-scrollbar]:hidden [-ms-overflow-style:_none] [scrollbar-width:_none]' => ! $scrollbar,
        ]) }}>{{ $slot }}</pre>
    </div>
    @if($withCopy)
        <div {{ (new ComponentAttributeBag())->class([
            'flex-shrink-0 pr-1 relative',
            'pt-1',
        ]) }}>
            <x-btn style="ghost" size="sm" x-on:click="navigator.clipboard.writeText($refs[refId].innerText); $el.textContent = copiedLabel; setTimeout(() => $el.textContent = copyLabel, 2000)">
                {{ $copyLabel }}
            </x-btn>
        </div>
    @endif
</div>
