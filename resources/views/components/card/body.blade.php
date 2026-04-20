<div data-slot="card-body" {{ $attributes->class([
    'px-4' => ! Str::contains($attributes->get('class'), ['p-', 'px-', 'pl-', 'pr-']),
]) }}>
    {{ $slot }}
</div>
