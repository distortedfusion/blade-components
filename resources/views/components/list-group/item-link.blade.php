<a href="{{ $url }}" {{ $attributes->class([
    'list-group-item block relative border',
    'text-current hover:no-underline',
    'hover:bg-gray-100' => ! Str::contains($attributes->get('class'), 'hover:bg-')
    'sm:px-6' => ! Str::contains($attributes->get('class'), ['sm:px-', 'sm:pl-', 'sm:pr-']),
    'px-4' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>
    <div class="flex items-center">
        <div class="flex-grow flex items-baseline">
            @if(! is_null($title))
                <div class="w-1/3 flex-shrink-0">
                    <h3 {{ $title->attributes->class([
                        'text-xs text-muted font-semibold',
                    ]) }}>{!! $title !!}</h3>
                </div>
            @endif
            <div class="flex-grow text-{{ $align }}">{!! $slot ?: '&mdash;' !!}</div>
        </div>

        <div class="flex-no-shrink">
            <x-fas-angle-right class="text-muted" />
        </div>
    </div>
</a>
