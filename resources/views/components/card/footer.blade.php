<div {{ $attributes->class([
    'card-footer flex items-center space-x-2 rounded-b-lg',
    'bg-gray-50' => ! Str::contains($attributes->get('class'), ['bg-']),
    'border-t border-black/10' => ! Str::contains($attributes->get('class'), ['border-']),
    'px-4 sm:px-6' => ! Str::contains($attributes->get('class'), ['px-']),
    'py-3' => ! Str::contains($attributes->get('class'), ['py-']),
]) }}>
    {{ $slot }}
</div>
