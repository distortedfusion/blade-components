@aware(['transition' => true])
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
            'flex flex-col gap-y-5 pb-3 transition-all duration-500'
        ]) }}
        :class="{
            'opacity-0': ! expanded && transition,
        }">
        {{ $slot }}
    </div>
</div>
