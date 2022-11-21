@if(! is_null($title))
    <div {{ $title->attributes->class([
        'flex-shrink-0',
        'w-1/3' => $align !== 'right',
    ]) }}>
        <h3 class="text-xs text-muted font-semibold">{!! $title !!}</h3>
    </div>
@endif
