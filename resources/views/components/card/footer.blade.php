<div {{ $attributes->class([
    'card-footer flex items-center space-x-2 rounded-b',
    'bg-gray-100' => ! Str::contains($attributes->get('class'), ['bg-']),
    'border-t' => ! Str::contains($attributes->get('class'), ['border-']),
    'px-4 sm:px-6' => ! Str::contains($attributes->get('class'), ['px-']),
    'py-3' => ! Str::contains($attributes->get('class'), ['py-']),
]) }}>
    {{ $slot }}
</div>
