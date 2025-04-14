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
    <div class="pb-3 space-y-5 transition-all duration-500"
        :class="{
            'opacity-0': ! expanded && transition,
        }">
        {{ $slot }}
    </div>
</div>
