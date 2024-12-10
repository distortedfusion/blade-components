<div data-slot="card-body" {{ $attributes->class([
    'px-4 sm:px-6' => ! Str::contains($attributes->get('class'), ['p-', 'px-', 'pl-', 'pr-']),
    'py-3 sm:py-6' => ! Str::contains($attributes->get('class'), ['p-', 'py-', 'pt-', 'pb-']),
]) }}>
    {{ $slot }}
</div>
