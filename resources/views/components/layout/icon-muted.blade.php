<x-layout.icon :icon="$icon" :type="$type" {{ $attributes->class([
    'text-gray-500' => ! Str::contains($attributes->get('class'), 'text-'),
    'bg-gray-100' => ! Str::contains($attributes->get('class'), 'bg-'),
]) }} />
