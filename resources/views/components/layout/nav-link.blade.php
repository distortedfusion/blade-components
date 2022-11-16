@props(['active', 'icon'])

@php
$active = $active ?? false;
$baseClasses = 'group relative flex items-center px-4 py-2 rounded mb-1 font-semibold text-brand-100 bg-white hover:no-underline hover:text-white hover:bg-opacity-50 transition-all duration-200';
$classes = ($active)
    ? $baseClasses.' bg-opacity-25 text-white shadow-sm'
    : $baseClasses.' bg-opacity-0 hover:shadow-sm';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    @if($active)
        <div class="absolute inset-y-0 left-0 w-1 my-2 bg-white rounded-full -ml-0.5"></div>
    @endif

    @if($icon ?? false)
        <span class="mr-4 {{ $active ? 'text-white' : 'text-brand-200 group-hover:text-white' }}">
            <x-bootstrap.dropdown-icon :icon="$icon" />
        </span>
    @endif

    <span>{{ $slot }}</span>
</a>
