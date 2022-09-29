<div {{ $attributes->class([
    'flex items-center justify-center',
    'text-brand-500' => ! Str::contains($attributes->get('class'), 'text-'),
    'p-4' => ! Str::contains($attributes->get('class'), ['p-', 'px-', 'py-']),
]) }}>
    <x-fad-spinner-third class="animate-spin" />
</div>
