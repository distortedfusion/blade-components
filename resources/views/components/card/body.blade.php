<div data-slot="card-body" {{ $attributes->class([
    'px-6' => ! Str::contains($attributes->get('class'), ['p-', 'px-', 'pl-', 'pr-']),
]) }}>
    {{ $slot }}
</div>
