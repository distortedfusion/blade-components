@if ($label)
    <span {{ $attributes->class([
        'form-label',
        'text-gray-600',
        'dark:text-gray-400',
    ]) }}>
        {{ $label }}
    </span>
@endif
