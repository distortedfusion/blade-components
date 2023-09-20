@php
$class = [
    'inline-flex items-center justify-center shrink-0 text-center border rounded shadow transition-all',
    'hover:no-underline hover:outline-0',
    'focus:no-underline focus:outline-0',

    // Button sizes...
    'h-14 py-3 px-4 text-sm font-semibold leading-8' => $size === 'lg',
    'h-12 py-2 px-4 text-sm font-semibold leading-8' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'h-8 py-0 px-4 text-sm font-semibold leading-8' => $size === 'sm',

    // Default color...
    'bg-white border-gray-300 text-gray-700' => $style === 'default',
    'hover:bg-white hover:border-gray-300 hover:text-gray-500' => $style === 'default',
    'focus:bg-white focus:border-gray-600 focus:text-gray-500' => $style === 'default',
    'active:bg-gray-100 active:border-gray-600 active:text-gray-800' => $style === 'default',

    // Primary color...
    'bg-brand-400 border-brand-400 text-white' => $style === 'primary',
    'hover:bg-brand-300 hover:border-brand-300 hover:text-white' => $style === 'primary',
    'focus:bg-brand-300 focus:border-brand-300 focus:text-white' => $style === 'primary',
    'active:bg-brand-500 active:border-brand-500 active:text-white' => $style === 'primary',

    // Success color...
    'bg-green-400 border-green-400 text-white' => $style === 'success',
    'hover:bg-green-300 hover:border-green-300 hover:text-white' => $style === 'success',
    'focus:bg-green-300 focus:border-green-300 focus:text-white' => $style === 'success',
    'active:bg-green-500 active:border-green-500 active:text-white' => $style === 'success',

    // Info color...
    'bg-blue-400 border-blue-400 text-white' => $style === 'info',
    'hover:bg-blue-300 hover:border-blue-300 hover:text-white' => $style === 'info',
    'focus:bg-blue-300 focus:border-blue-300 focus:text-white' => $style === 'info',
    'active:bg-blue-500 active:border-blue-500 active:text-white' => $style === 'info',

    // Warning color...
    'bg-amber-400 border-amber-400 text-white' => $style === 'warning',
    'hover:bg-amber-300 hover:border-amber-300 hover:text-white' => $style === 'warning',
    'focus:bg-amber-300 focus:border-amber-300 focus:text-white' => $style === 'warning',
    'active:bg-amber-500 active:border-amber-500 active:text-white' => $style === 'warning',

    // Danger color...
    'bg-red-400 border-red-400 text-white' => $style === 'danger',
    'hover:bg-red-300 hover:border-red-300 hover:text-white' => $style === 'danger',
    'focus:bg-red-300 focus:border-red-300 focus:text-white' => $style === 'danger',
    'active:bg-red-500 active:border-red-500 active:text-white' => $style === 'danger',

    // Disabled color...
    'disabled:bg-white disabled:border-gray-300 disabled:text-gray-400 disabled:cursor-not-allowed',
];
@endphp
@if(is_null($href) || $disabled)
<button type="{{ $type }}" {{ $attributes->merge(['disabled' => $disabled])->class($class) }}>
    {{ $slot }}
</button>
@else
<a href="{{ $href }}" {{ $attributes->class($class) }}>
    {{ $slot }}
</a>
@endif
