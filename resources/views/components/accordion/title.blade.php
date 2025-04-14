@aware(['id'])
<button data-slot="accordion-title"
    type="button"
    x-on:click="expanded = ! expanded"
    :aria-expanded="expanded"
    :aria-controls="id"
    {{ $attributes->class([
        'flex w-full items-center justify-between space-x-4 py-3 text-left group',
        'focus:outline-none',
    ]) }}>
    <x-heading :heading-level="3" size="base">{{ $slot }}</x-heading>
    @if($indicator ?? false)
        {{ $indicator }}
    @else
        <x-dynamic-component :component="$indicatorIcon"
            class="w-4 h-4 text-black dark:text-white opacity-50 group-hover:opacity-100 group-focus:opacity-100 relative z-10"
            ::class="{
                'transition': transition,
                'rotate-180': expanded,
            }"
            x-cloak />
    @endif
</button>
