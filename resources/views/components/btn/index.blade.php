@php
$class = [
    'inline-flex items-center justify-center space-x-2 shrink-0 text-center border rounded-lg transition-all',
    'hover:no-underline hover:outline-0',
    'focus:no-underline focus:outline-0',

    // Button sizes...
    'h-14 py-3 px-4 text-sm font-semibold leading-8' => $size === 'lg',
    'h-12 py-2 px-4 text-sm font-semibold leading-8' => is_null($size) || ! in_array($size, ['sm', 'lg']),
    'h-8 py-0 px-4 text-sm font-semibold leading-8' => $size === 'sm',

    // Primary color...
    'shadow-none bg-brand-600 border-brand-800 text-white' => $style === 'primary',
    'shadow-none hover:bg-brand-500 hover:border-brand-500 hover:text-white' => $style === 'primary',
    'shadow-none focus:bg-brand-500 focus:border-brand-500 focus:text-white' => $style === 'primary',
    'shadow-none active:bg-brand-500 active:border-brand-500 active:text-white' => $style === 'primary',

    'shadow-none dark:bg-white dark:border-gray-300 dark:text-gray-700' => $style === 'primary',
    'shadow-none dark:hover:bg-gray-100 dark:hover:border-gray-300 dark:hover:text-gray-700' => $style === 'primary',
    'shadow-none dark:focus:bg-gray-100 dark:focus:border-gray-300 dark:focus:text-gray-700' => $style === 'primary',
    'shadow-none dark:active:bg-gray-100 dark:active:border-gray-300 dark:active:text-gray-700' => $style === 'primary',

    // Secondary color...
    'shadow-none bg-white border-gray-300 text-gray-700' => $style === 'secondary' || $style === 'default',
    'shadow-none hover:bg-gray-100 hover:border-gray-300 hover:text-gray-700' => $style === 'secondary' || $style === 'default',
    'shadow-none focus:bg-gray-100 focus:border-gray-300 focus:text-gray-700' => $style === 'secondary' || $style === 'default',
    'shadow-none active:bg-gray-100 active:border-gray-300 active:text-gray-700' => $style === 'secondary' || $style === 'default',

    // Tertiary color...
    'shadow-none bg-transparent border-transparent text-gray-700' => $style === 'tertiary',
    'shadow-none hover:bg-gray-100 hover:border-gray-100 hover:text-gray-700' => $style === 'tertiary',
    'shadow-none focus:bg-gray-100 focus:border-gray-100 focus:text-gray-700' => $style === 'tertiary',
    'shadow-none active:bg-gray-100 active:border-gray-100 active:text-gray-700' => $style === 'tertiary',

    // Info color...
    'shadow-none bg-blue-600 border-blue-600 text-white' => $style === 'info',
    'shadow-none hover:bg-blue-500 hover:border-blue-500 hover:text-white' => $style === 'info',
    'shadow-none focus:bg-blue-500 focus:border-blue-500 focus:text-white' => $style === 'info',
    'shadow-none active:bg-blue-500 active:border-blue-500 active:text-white' => $style === 'info',

    // Warning color...
    'shadow-none bg-amber-600 border-amber-600 text-white' => $style === 'warning',
    'shadow-none hover:bg-amber-500 hover:border-amber-500 hover:text-white' => $style === 'warning',
    'shadow-none focus:bg-amber-500 focus:border-amber-500 focus:text-white' => $style === 'warning',
    'shadow-none active:bg-amber-500 active:border-amber-500 active:text-white' => $style === 'warning',

    // Danger color...
    'shadow-none bg-red-600 border-red-600 text-white' => $style === 'danger',
    'shadow-none hover:bg-red-500 hover:border-red-500 hover:text-white' => $style === 'danger',
    'shadow-none focus:bg-red-500 focus:border-red-500 focus:text-white' => $style === 'danger',
    'shadow-none active:bg-red-500 active:border-red-500 active:text-white' => $style === 'danger',

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
