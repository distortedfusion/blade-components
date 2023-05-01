@if ($label)
    <div {{ $attributes->class([
        'form-label w-full truncate font-semibold',
        'text-gray-600 dark:text-gray-200' => ! Str::contains($attributes->get('class'), 'text-'),
    ]) }}>
        {!! $label !!}
    </div>
@endif
