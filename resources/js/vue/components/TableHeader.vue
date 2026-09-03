<template>
    <thead
        data-slot="table-header"
        :class="classes"
    >
        <slot />
    </thead>
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
    '[&>*]:text-[var(--muted-foreground)]',

    { 'sticky top-0 z-20 bg-[var(--background)]': props.sticky },
    { '[&>[data-slot=table-row]:hover>*]:bg-transparent': props.hover },
])
</script>
