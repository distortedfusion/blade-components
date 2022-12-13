<div {{ $attributes->class([
    'list-group-item block relative border-t border-b border-l border-r',
    'px-2' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>
    <div class="{{
        'group block w-full rounded relative'
        . ' px-2 sm:px-4 -my-3 py-3'
    }}">
        <div class="flex items-baseline space-x-2">
            @include('tailwind-layout::components.list-group.partials.title')
            <div class="flex-grow text-{{ $align }}">{!! trim($slot) ? $slot : '&mdash;' !!}</div>
        </div>
    </div>
</div>
