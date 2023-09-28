@props(['icon'])
<x-dynamic-component :component="$icon" {{ $attributes->class([
    '-ml-1 mr-2 text-inherit opacity-80',
]) }} />
