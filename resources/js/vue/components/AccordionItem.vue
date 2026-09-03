<template>
    <div data-slot="accordion-item">
        <slot />
    </div>
</template>

<script setup>
import { computed, inject, provide, ref, watchEffect } from 'vue'

const props = defineProps({
    // Whether the item starts out expanded. In exclusive accordions this
    // only applies until any item has been toggled.
    expanded: { type: Boolean, default: false },
})

// Unique id wiring aria-controls / aria-labelledby. Blade derived it from
// crc32($slot); a generated id fills the same role here.
const id = 'accordion-item-' + Math.random().toString(36).slice(2)

// Provided by <Accordion>; null when the item is used standalone.
const accordion = inject('accordion', null)

// The per-item explicit expand state — the Alpine `itemExpanded` property.
const itemExpanded = ref(props.expanded)

const expanded = computed({
    get: () => {
        // While no item has been toggled yet (exclusive mode) the explicit
        // expand state wins, afterwards the exclusively active item wins.
        // This mirrors the Alpine `expanded` getter on the Blade item.
        if (accordion && accordion.exclusive.value && accordion.active.value !== null) {
            return accordion.active.value === id
        }

        return itemExpanded.value
    },
    set: (value) => {
        itemExpanded.value = value

        if (accordion) {
            accordion.setExpanded(id, value)
        }
    },
})

// Keep the explicit state in sync while another item is exclusively
// expanded, so collapsing the active item does not resurrect this item's
// initial `expanded` state (the Alpine getter re-synced on every read).
watchEffect(() => {
    if (accordion && accordion.exclusive.value && accordion.active.value !== null) {
        itemExpanded.value = accordion.active.value === id
    }
})

// Consumed by <AccordionToggle> and <AccordionContent>.
provide('accordion-item', { id, expanded })
</script>
