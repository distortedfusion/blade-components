@if(! is_null($title))
    <div {{ $title->attributes->class([
            'flex-shrink-0' => ! Str::contains($title->attributes->get('class'), ['flex-']),
            'flex items-center',
            'text-xs font-semibold',
            'w-1/3' => $align !== 'right' && ! ($vertical ?? false) && ! Str::contains($title->attributes->get('class'), ['w-']),
        ]) }}>
        {!! $title !!}
    </div>
@endif
