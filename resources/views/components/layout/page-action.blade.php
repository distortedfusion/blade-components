@if ($disabled)
    <button type="button" {{ $attributes->merge(['class' => 'btn btn-sm btn-default', 'disabled' => true]) }}>
        {{ $slot }}
    </button>
@else
    <a href="{{ $href }}" {{ $attributes->class([
        'btn',
        'btn-sm',
        'btn-default' => ! Str::contains($attributes->get('class'), ['default', 'primary', 'success', 'info', 'warning', 'danger'])
    ]) }}>
        {{ $slot }}
    </a>
@endif
