@props(['href' => null, 'active' => false])
@php
use Illuminate\View\ComponentAttributeBag;

$class = [
    'text-[var(--muted-foreground)]' => ! $active,
    'text-[var(--foreground)] font-semibold' => $active,
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
            'outline-none',
            'hover:no-underline hover:text-[var(--foreground)]',
            'focus:text-[var(--foreground)] focus-visible:underline',
            ...$class
        ]) }}>
            {{ $slot }}
        </a>
    @endif
</li>
