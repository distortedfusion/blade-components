@props(['title' => null])
<div data-slot="list-group-item" {{ $attributes->class([
    'w-full flex items-center',
    'border-black/10 dark:border-white/10',
    'px-2' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>
    <div class="flex-grow group w-full rounded relative px-2 sm:px-4 -my-3 py-3">
        <div class="w-full flex items-center space-x-2">
            @include('blade-components::components.list-group.partials.title')
            <div class="flex-grow min-w-0 text-black dark:text-white truncate">{!! trim($slot) ? $slot : '&mdash;' !!}</div>
        </div>
    </div>
</div>
