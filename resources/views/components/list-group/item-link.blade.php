<a href="{{ $url }}" {{ $attributes->class([
    'group list-group-item block relative border',
    'text-current hover:no-underline',
    'hover:bg-gray-100' => ! Str::contains($attributes->get('class'), 'hover:bg-'),
    'sm:px-6' => ! Str::contains($attributes->get('class'), ['sm:px-', 'sm:pl-', 'sm:pr-']),
    'px-4' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>
    <div class="flex items-center space-x-2">
        <div class="flex-grow flex items-baseline">
            @include('tailwind-layout::components.list-group.partials.title')
            <div class="flex-grow text-{{ $align }}">{!! trim($slot) ? $slot : '&mdash;' !!}</div>
        </div>

        <div class="flex-no-shrink">
            @include('tailwind-layout::components.list-group.partials.icon')
        </div>
    </div>
</a>
