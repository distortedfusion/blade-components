@if ($label)
    <div {{ $attributes->class([
        'form-label w-full truncate',
        'text-gray-600',
        'dark:text-gray-400',
    ]) }}>
        {!! $label !!}
    </div>
@endif
