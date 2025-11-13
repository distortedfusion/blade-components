@php
use Illuminate\Support\Str;
@endphp
@aware(['transition' => true])
@props(['fade' => true])
<div data-slot="accordion-content"
    :aria-labelledby="id"
    x-show="expanded"
    @if($transition)
    x-collapse
    @else
    x-collapse.duration.0ms
    @endif
    x-cloak>
    <div {{ $attributes->class([
            'flex flex-col gap-y-5 transition-all duration-500',
            'pb-3' => ! Str::contains($attributes->get('class'), ['p-', 'pb-', 'py-']),

            'opacity-100' => ! $fade || ! $transition,
        ]) }}
        :class="{
            'opacity-0': ! expanded && transition,
        }">
        {{ $slot }}
    </div>
</div>
