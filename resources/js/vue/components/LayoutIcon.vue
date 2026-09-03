<template>
    <div :class="classes">
        <!-- Blade rendered a heroicon by NAME here; the Vue variant expects
             the icon prop to be a Vue icon component (or use the icon slot). -->
        <component :is="icon" data-slot="icon" />
    </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    // A Vue icon component (Blade rendered a heroicon by name).
    icon: { type: [Object, Function, String], required: true },

    // "primary" | "secondary" | "outline"
    variant: { type: String, default: 'primary' },

    // "lg" | "default" | "sm" | "xs"
    size: { type: String, default: 'default' },
})

const classes = computed(() => [
    'inline-flex items-center justify-center border rounded-md aspect-square',

    {
        '[&>[data-slot=icon]]:size-4 w-12': props.size === 'lg',
        '[&>[data-slot=icon]]:size-4 w-10': props.size === 'default',
        '[&>[data-slot=icon]]:size-4 w-8': props.size === 'sm',
        '[&>[data-slot=icon]]:size-3 w-6': props.size === 'xs',
    },

    // Primary...
    { 'bg-[var(--primary)] border-transparent text-[var(--primary-foreground)]': props.variant === 'primary' },

    // Secondary...
    { 'bg-[var(--secondary)] border-transparent text-[var(--secondary-foreground)]': props.variant === 'secondary' },

    // Outline...
    { 'bg-transparent border-[var(--border)] text-[var(--secondary-foreground)]': props.variant === 'outline' },
])
</script>
