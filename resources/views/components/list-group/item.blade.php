<div {{ $attributes->class([
    'list-group-item flex items-center w-full relative border-t border-b border-l border-r',
    'px-2' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>
    @if($prefix ?? false)
        <div {{ $prefix->attributes->class(['relative pr-1 pl-2 sm:pl-4 mr-1 border-r']) }}>
            {{ $prefix }}
        </div>
    @endif

    <div class="{{
        'flex-grow group block w-full rounded relative'
        . ' px-2 sm:px-4 -my-3 py-3'
    }}">
        <div class="flex items-baseline {{ $vertical ? 'flex-col' : 'space-x-2' }}">
            @include('tailwind-layout::components.list-group.partials.title')
            <div class="flex-grow text-{{ $align }}">{!! trim($slot) ? $slot : '&mdash;' !!}</div>
        </div>
    </div>

    @if($suffix ?? false)
        <div {{ $suffix->attributes->class(['relative pl-1 pr-2 sm:pr-4 ml-1 border-l']) }}>
            {{ $suffix }}
        </div>
    @endif
</div>
