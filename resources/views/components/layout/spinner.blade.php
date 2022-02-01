<div {{ $attributes->class([
    'flex items-center justify-center text-brand-500',
    'p-4' => ! Str::contains($attributes->get('class'), ['p-', 'px-', 'py-']),
]) }}>
    <i class="fad fa-fw fa-spinner-third fa-spin"></i>
</div>
