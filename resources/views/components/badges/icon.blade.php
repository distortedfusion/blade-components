@props(['icon'])
<x-dynamic-component :component="$icon" {{ $attributes->class([
    '-mx-1 text-inherit opacity-80',
    'w-4' => ! Str::contains($attributes->get('class'), ['w-']),
    'h-4' => ! Str::contains($attributes->get('class'), ['h-']),
]) }} />
