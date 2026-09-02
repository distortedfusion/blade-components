<template>
    <div
        data-slot="accordion"
        :class="classes"
    >
        <slot />
    </div>
</template>

<script setup>
import { computed, provide, ref } from 'vue'

const props = defineProps({
    // Only allow one item to be expanded at a time.
    exclusive: { type: Boolean, default: false },

    // Animate expanding and collapsing the item content.
    transition: { type: Boolean, default: true },
})

// Mirrors the Alpine `active` state on the Blade accordion: the id of the
// exclusively expanded item, or null while no item has been toggled yet.
const active = ref(null)

const context = {
    exclusive: computed(() => props.exclusive),
    transition: computed(() => props.transition),
    active,

    // Broadcast an item toggle. Mirrors the Alpine `expanded` setter: in
    // exclusive mode `active` becomes the toggled item's id, or null when
    // the active item is collapsed again.
    setExpanded(id, value) {
        if (props.exclusive) {
            active.value = value ? id : null
        }
    },
}

// Consumed by <AccordionItem>, <AccordionToggle> and <AccordionContent>
// (the Blade @aware() / Alpine parent scope equivalent).
provide('accordion', context)

const classes = [
    'w-full divide-y divide-[var(--border)]',
]
</script>
