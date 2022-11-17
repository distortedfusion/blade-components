<div {{ $attributes->class([
    'list-group-item block relative border-t border-b',
    'sm:px-6' => ! Str::contains($attributes->get('class'), ['sm:px-', 'sm:pl-', 'sm:pr-']),
    'px-4' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>
    <div class="flex items-baseline">
        @include('tailwind-layout::components.list-group.partials.title')
        <div class="flex-grow text-{{ $align }}">{!! trim($slot) ? $slot : '&mdash;' !!}</div>
    </div>
</div>
