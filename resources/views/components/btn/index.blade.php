@php
$class = [
    'inline-flex items-center justify-center space-x-2 shrink-0 text-center border rounded-lg shadow transition-all',
    'hover:no-underline hover:outline-0',
    'focus:no-underline focus:outline-0',

    // Button sizes...
    'h-14 py-3 px-4 text-sm font-semibold leading-8' => $size === 'lg',
    'h-12 py-2 px-4 text-sm font-semibold leading-8' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'h-8 py-0 px-4 text-sm font-semibold leading-8' => $size === 'sm',

    // Primary color...
    'bg-brand-600 border-brand-800 text-white' => $style === 'primary',
    'hover:bg-brand-500 hover:border-brand-500 hover:text-white' => $style === 'primary',
    'focus:bg-brand-500 focus:border-brand-500 focus:text-white' => $style === 'primary',
    'active:bg-brand-500 active:border-brand-500 active:text-white' => $style === 'primary',

    // Default color...
    'bg-white border-gray-300 text-gray-700' => $style === 'default',
    'hover:bg-white hover:border-gray-300 hover:text-gray-500' => $style === 'default',
    'focus:bg-white focus:border-gray-600 focus:text-gray-500' => $style === 'default',
    'active:bg-gray-100 active:border-gray-600 active:text-gray-800' => $style === 'default',

    // Info color...
    'bg-blue-600 border-blue-600 text-black' => $style === 'info',
    'hover:bg-blue-500 hover:border-blue-500 hover:text-black' => $style === 'info',
    'focus:bg-blue-500 focus:border-blue-500 focus:text-black' => $style === 'info',
    'active:bg-blue-500 active:border-blue-500 active:text-black' => $style === 'info',

    // Warning color...
    'bg-amber-600 border-amber-600 text-black' => $style === 'warning',
    'hover:bg-amber-500 hover:border-amber-500 hover:text-black' => $style === 'warning',
    'focus:bg-amber-500 focus:border-amber-500 focus:text-black' => $style === 'warning',
    'active:bg-amber-500 active:border-amber-500 active:text-black' => $style === 'warning',

    // Danger color...
    'bg-red-600 border-red-600 text-black' => $style === 'danger',
    'hover:bg-red-500 hover:border-red-500 hover:text-black' => $style === 'danger',
    'focus:bg-red-500 focus:border-red-500 focus:text-black' => $style === 'danger',
    'active:bg-red-500 active:border-red-500 active:text-black' => $style === 'danger',

    // Disabled color...
    'disabled:bg-white disabled:border-gray-300 disabled:text-gray-400 disabled:cursor-not-allowed',
];
@endphp
@if(is_null($href) || $disabled)
<button type="{{ $type }}" {{ $attributes->merge(['disabled' => $disabled])->class($class) }}>
    @if($prefix ?? false)
        <div class="flex-shrink-0">{{ $prefix }}</div>
    @endif
    <div class="flex-grow">{{ $slot }}</div>
    @if($suffix ?? false)
        <div class="flex-shrink-0">{{ $suffix }}</div>
    @endif
</button>
@else
<a href="{{ $href }}" {{ $attributes->class($class) }}>
    @if($prefix ?? false)
        <div class="flex-shrink-0">{{ $prefix }}</div>
    @endif
    <div class="flex-grow">{{ $slot }}</div>
    @if($suffix ?? false)
        <div class="flex-shrink-0">{{ $suffix }}</div>
    @endif
</a>
@endif
