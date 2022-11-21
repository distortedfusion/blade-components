<div {{ $attributes->class([
    'list-group-item block relative border-t border-b',
    'sm:px-6' => ! Str::contains($attributes->get('class'), ['sm:px-', 'sm:pl-', 'sm:pr-']),
    'px-4' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>
    <button type="{{ $type }}" class="{{
        'group block rounded relative'
        . ' -mx-4 px-4 -my-3 py-3'
        . ' text-current hover:no-underline'
        . ' hover:bg-gray-100'
    }}">
        <div class="flex items-baseline">
            @include('tailwind-layout::components.list-group.partials.title')
            <div class="flex-grow text-{{ $align }} pr-4">{!! trim($slot) ? $slot : '&mdash;' !!}</div>
        </div>

        <div class="absolute inset-y-1/2 right-4 -mt-2">
            <x-fas-angle-right class="text-muted opacity-50 group-hover:opacity-100" />
        </div>
    </button>
</div>
