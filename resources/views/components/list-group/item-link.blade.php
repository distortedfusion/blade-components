@props(['title' => null, 'icon' => 'fal-chevron-right'])
<div data-slot="list-group-item" {{ $attributes->class([
    'list-group-item flex items-center w-full relative',
    'border-black/10 dark:border-white/10',
    'px-2' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>
    <a href="{{ $href }}" class="{{
        'flex-grow group w-full rounded relative'
        . ' px-2 sm:px-4 -my-3 py-3'
        . ' text-black dark:text-white hover:no-underline'
        . ' hover:bg-black/5 dark:hover:bg-white/5'
    }}">
        <div class="w-full flex items-center space-x-2">
            @include('blade-components::components.list-group.partials.title')
            <div class="flex-grow min-w-0 text-black dark:text-white truncate pr-6 sm:pr-4">{!! trim($slot) ? $slot : '&mdash;' !!}</div>
        </div>

        @if(! is_null($icon))
            <div class="absolute inset-y-1/2 right-2 -mt-2">
                <x-dynamic-component :component="$icon" class="w-4 h-4 text-muted opacity-50 group-hover:opacity-100" />
            </div>
        @endif
    </a>
</div>
