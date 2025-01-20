@props(['spacing' => 'responsive', 'size' => null])
@php
use Illuminate\Support\Str;
@endphp
{{-- The max-width, except for 3xl, are matched to the default tailwindcss breakpoints --}}
<div {{ $attributes->class([
    'mx-auto',

    // Spacing...
    'px-4 sm:px-6 lg:px-8' => $spacing === 'responsive' && $spacing !== 'none',
    'px-8' => $spacing === 'lg' && $spacing !== 'none',
    'px-6' => $spacing === 'md' && $spacing !== 'none',
    'px-4' => $spacing === 'sm' && $spacing !== 'none',

    // Sizes...
    'max-w-full' => $size === 'full',
    'max-w-[120rem]' => $size === '3xl',
    'max-w-[96rem]' => $size === '2xl',
    'max-w-7xl' => $size === null || $size === 'xl',
    'max-w-5xl' => $size === 'lg',
    'max-w-3xl' => $size === 'md',
    'max-w-[40rem]' => $size === 'sm',
]) }}>
    {!! $slot !!}
</div>
