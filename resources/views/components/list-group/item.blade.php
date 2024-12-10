@aware(['flush' => false])
<div data-slot="list-group-item" {{ $attributes->class([
    'w-full flex items-center',
    'border-black/10 dark:border-white/10',
    'px-2' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>
    @if($prefix ?? false)
        <div {{ $prefix->attributes->class(['relative pr-1 pl-2 sm:pl-4 mr-1 border-r']) }}>
            {{ $prefix }}
        </div>
    @endif

    <div class="flex-grow group w-full rounded relative px-2 sm:px-4 -my-3 py-3">
        <div class="w-full flex items-center space-x-2">
            @include('blade-components::components.list-group.partials.title')
            <div class="flex-grow min-w-0 text-black dark:text-white">{!! trim($slot) ? $slot : '&mdash;' !!}</div>
        </div>
    </div>

    @if($suffix ?? false)
        <div {{ $suffix->attributes->class(['relative pl-1 pr-2 sm:pr-4 ml-1 border-l']) }}>
            {{ $suffix }}
        </div>
    @endif
</div>
