@if(! is_null($title))
    <div {{ $title->attributes->class([
            'flex-shrink-0',
            'flex items-center',
            'text-xs font-semibold',
            'w-1/3' => $align !== 'right',
        ]) }}>
        {!! $title !!}
    </div>
@endif
