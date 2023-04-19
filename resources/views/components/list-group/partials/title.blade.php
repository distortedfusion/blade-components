@if(! is_null($title))
    <div class="flex-shrink-0{{ $align !== 'right' && ! ($vertical ?? false) ? ' w-1/3' : null }}">
        <h3 {{ $title->attributes->class([
            'flex items-center',
            'text-xs text-muted font-semibold',
        ]) }}>{!! $title !!}</h3>
    </div>
@endif
