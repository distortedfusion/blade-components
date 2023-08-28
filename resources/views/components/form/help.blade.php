<p {{ $attributes->class([
    'text-muted text-sm',
    'mt-2' => ! Str::contains($attributes->get('class'), ['m-', 'my-', 'mt-'])
]) }}>
    <x-fad-circle-info class="inline-block -mb-0.5 mr-2" /><span>{{ $slot }}</span>
</p>
