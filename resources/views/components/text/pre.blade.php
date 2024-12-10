@props(['withCopy' => false, 'copyLabel' => 'Copy', 'copiedLabel' => 'Copied!'])
@php
$refId = 'pre-'.crc32($slot);
@endphp
<div {{ $attributes->class([
        'flex items-start space-x-2 rounded-lg',
        'bg-gray-100 dark:bg-gray-900' => ! Str::contains($attributes->get('class'), 'bg-'),
    ]) }}
    x-data="{
        'refId': {{ $refId }},
        'copyLabel': '{{ $copyLabel }}',
        'copiedLabel': '{{ $copiedLabel }}',
    }">
    <pre x-ref="{{ $refId }}" {{ $attributes->class([
        'flex-grow p-4 overflow-scroll',
        'text-sm leading-6 font-mono',
    ]) }}>{{ $slot }}</pre>
    @if($withCopy)
        <div class="flex-shrink-0 pr-3">
            <x-btn class="mt-3"
                style="tertiary"
                size="sm"
                x-on:click="navigator.clipboard.writeText($refs[refId].innerText); $el.textContent = copiedLabel; setTimeout(() => $el.textContent = copyLabel, 2000)">
                {{ $copyLabel }}
            </x-btn>
        </div>
    @endif
</div>
