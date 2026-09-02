<template>
    <td
        data-slot="table-cell"
        :class="classes"
    >
        <slot />
    </td>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    // "start" | "center" | "end"
    align: { type: String, default: 'start' },

    sticky: { type: Boolean, default: false },
})

const classes = computed(() => [
    'align-middle p-2 [&:has([role="checkbox"])]:p-0',
    '[:where(&)]:bg-[var(--background)] transition-colors',

    { '[:where(&)]:text-left': props.align === 'start' },
    { '[:where(&)]:text-center': props.align === 'center' },
    { '[:where(&)]:text-right': props.align === 'end' },

    { 'sticky first:left-0 last:right-0 z-10': props.sticky },
    { 'after:from-[var(--background)] after:to-transparent after:w-2 after:absolute after:inset-y-0 after:pointer-events-none': props.sticky },
    { 'first:after:bg-linear-to-r first:after:right-0 first:after:translate-x-full': props.sticky },
    { 'last:after:bg-linear-to-l last:after:left-0 last:after:-translate-x-full': props.sticky },
])
</script>
