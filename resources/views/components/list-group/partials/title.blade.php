@if(! is_null($title))
    <div {{ $title->attributes->class([
        'w-1/3 flex-shrink-0 text-left',
    ]) }}>
        <span class="text-xs font-semibold text-gray-600 dark:text-gray-300">{!! $title !!}</span>
    </div>
@endif
