@if(! is_null($title))
    <div class="flex-shrink-0{{ $align !== 'right' && ! ($vertical ?? false) ? ' w-1/3' : null }}">
        <p {{ $title->attributes->class([
            'flex items-center',
            'text-xs font-semibold',
        ]) }}>{!! $title !!}</p>
    </div>
@endif
