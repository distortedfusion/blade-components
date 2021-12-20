<i {{ $attributes->class([
    'fad' => ! Str::contains($attributes->get('class'), ['fab', 'fad', 'far', 'fas']),
    'fa-fw '.$icon,
]) }}></i>
