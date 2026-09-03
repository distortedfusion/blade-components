<template>
    <caption
        data-slot="table-caption"
        :class="classes"
    >
        <slot />
    </caption>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    // Propagated from the parent table via Blade @aware; the Vue
    // variant expects it to be passed down explicitly.
    // "top" | "bottom"
    caption: { type: String, default: 'bottom' },
})

const classes = computed(() => [
    'text-[var(--muted-foreground)]',

    { 'mb-4': props.caption === 'top' },
    { 'mt-4': props.caption === 'bottom' },
])
</script>
