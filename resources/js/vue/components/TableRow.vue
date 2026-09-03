<template>
    <tr
        data-slot="table-row"
        :class="classes"
    >
        <slot />
    </tr>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    sticky: { type: Boolean, default: false },

    // Propagated from the parent table via Blade @aware; the Vue
    // variant expects it to be passed down explicitly.
    hover: { type: Boolean, default: false },
})

const classes = computed(() => [
    { 'sticky top-0 [&>*]:bg-[var(--background)]': props.sticky },
    { '[&:hover>*]:bg-[color-mix(in_oklab,var(--secondary)_70%,var(--background))]': props.hover },

    // Apply border to descendants...
    '[&>*]:border-b [&>*]:border-[var(--border)]',
])
</script>
