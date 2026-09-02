<template>
    <button
        data-slot="accordion-toggle"
        type="button"
        :class="classes"
        :aria-expanded="expanded"
        :aria-controls="itemId"
        @click="onToggle"
    >
        <slot />

        <slot name="indicator">
            <!-- Blade resolved its "heroicon-o-chevron-down" NAME default
                 through the icon registry; the Vue variant ships this
                 stroke-based equivalent when no `indicator-icon` is given. -->
            <component
                :is="indicatorIcon || DefaultChevronIcon"
                class="w-4 h-4 text-[var(--foreground)] opacity-50 group-hover:opacity-100 group-focus:opacity-100 relative z-10"
                :class="indicatorClasses"
            />
        </slot>
    </button>
</template>

<script setup>
import { computed, inject, h } from 'vue'

// Blade defaulted the toggle indicator to `heroicon-o-chevron-down` via
// Components\Accordion\Toggle::$defaultIndicatorIcon; this is the Vue
// equivalent (heroicons render stroke-based at width 1.5).
const DefaultChevronIcon = {
    render: () => h('svg', {
        viewBox: '0 0 24 24',
        fill: 'none',
        stroke: 'currentColor',
        'stroke-width': '1.5',
        'stroke-linecap': 'round',
        'stroke-linejoin': 'round',
        'aria-hidden': 'true',
    }, [h('path', { d: 'm6 9 6 6 6-6' })]),
}

const props = defineProps({
    // Blade defaulted this to the "heroicon-o-chevron-down" NAME string;
    // the Vue variant expects an icon component (or use the `indicator`
    // slot).
    indicatorIcon: { type: [Object, Function, String], default: null },
})

// Provided by <AccordionItem> (Blade: item scope + @aware(['id'])).
const item = inject('accordion-item', null)

// Blade: @aware(['transition']) — falls back to true outside an accordion.
const accordion = inject('accordion', null)

const expanded = computed(() => (item ? item.expanded.value : false))
const itemId = computed(() => (item ? item.id : null))
const transition = computed(() => (accordion ? accordion.transition.value : true))

const classes = [
    'flex w-full items-center justify-between gap-x-2 py-3 text-left group',
    'outline-none focus-visible:underline',
]

// Mirrors `::class="{ 'transition': transition, 'rotate-180': expanded }"`.
const indicatorClasses = computed(() => ({
    transition: transition.value,
    'rotate-180': expanded.value,
}))

// Mirrors `x-on:click="expanded = ! expanded"`.
const onToggle = () => {
    if (item) {
        item.expanded.value = ! item.expanded.value
    }
}
</script>
