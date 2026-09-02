<template>
    <div
        data-slot="list-group"
        :data-style="variant"
        :class="classes"
    >
        <slot />
    </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    // "default" | "pills"
    variant: { type: String, default: 'default' },
})

const classes = computed(() => [
    'w-full flex flex-col rounded-[var(--radius)]',

    { 'bg-[var(--card)]': props.variant === 'default' },
    { 'border border-[var(--border)]': props.variant === 'default' },
    { 'divide-y divide-[var(--border)]': props.variant === 'default' },

    { 'gap-y-0.5': props.variant === 'pills' },

    // Avatars...
    '[&_[data-slot=avatar]]:ring-[var(--card)]',
])
</script>
