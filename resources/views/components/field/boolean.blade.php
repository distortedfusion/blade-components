@if ($state)
    <x-fad-circle-check {{ $attributes->class(['text-success']) }} />
@else
    <x-fad-circle-xmark {{ $attributes->class(['text-danger']) }} />
@endif
