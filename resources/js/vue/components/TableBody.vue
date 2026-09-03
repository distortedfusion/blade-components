<template>
    <tbody
        data-slot="table-body"
        :class="classes"
    >
        <slot />
    </tbody>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    // "even" | "odd" | null
    highlight: { type: String, default: null },
})

const classes = computed(() => [
    '[&>[data-slot=table-row]:last-child>*]:border-b-0',

    // Row highlighting...
    { '[&>[data-slot=table-row]:nth-child(even)>*]:bg-[color-mix(in_oklab,var(--muted)_70%,var(--background))]': props.highlight === 'even' },
    { '[&>[data-slot=table-row]:nth-child(odd)>*]:bg-[color-mix(in_oklab,var(--muted)_70%,var(--background))]': props.highlight === 'odd' },

    // Sticky cell adjustments...
    { '[&>[data-slot=table-row]:nth-child(even)>*:after]:from-[color-mix(in_oklab,var(--muted)_70%,var(--background))]': props.highlight === 'even' },
    { '[&>[data-slot=table-row]:nth-child(odd)>*:after]:from-[color-mix(in_oklab,var(--muted)_70%,var(--background))]': props.highlight === 'odd' },
])
</script>
