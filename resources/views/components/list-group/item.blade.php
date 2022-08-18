<div {{ $attributes->class([
    'list-group-item block relative border',
    'sm:px-6' => ! Str::contains($attributes->get('class'), ['sm:px-', 'sm:pl-', 'sm:pr-']),
    'px-4' => ! Str::contains($attributes->get('class'), ['px-', 'pl-', 'pr-']),
    'py-4' => ! Str::contains($attributes->get('class'), ['py-', 'pt-', 'pb-']),
]) }}>
    <div class="flex items-baseline">
        @if(! is_null($title))
            <div class="w-1/3 flex-shrink-0">
                <h3 {{ $title->attributes->class([
                    'text-xs text-muted font-semibold',
                ]) }}>{!! $title !!}</h3>
            </div>
        @endif
        <div class="flex-grow text-{{ $align }}">{!! $slot ?: '&mdash;' !!}</div>
    </div>
</div>
