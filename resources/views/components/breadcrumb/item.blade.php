@props(['href' => null, 'active' => false])
@php
use Illuminate\View\ComponentAttributeBag;

$class = [
    'text-gray-600 dark:text-gray-300' => ! $active,
    'text-dark dark:text-white font-semibold' => $active,
    'text-sm leading-8',
];
@endphp
<li {{ $attributes }}>
    @if(is_null($href))
        <span {{ (new ComponentAttributeBag)->class($class) }}>
            {{ $slot }}
        </span>
    @else
        <a href="{{ $href }}" {{ (new ComponentAttributeBag)->class([
            'hover:no-underline hover:text-black dark:hover:text-white outline-none focus:text-black dark:focus:text-white focus-visible:underline',
            ...$class
        ]) }}>
            {{ $slot }}
        </a>
    @endif
</li>
