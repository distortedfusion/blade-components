<template>
    <div :class="classes">
        <div data-slot="spinner" class="animate-spin w-full h-auto aspect-square border-2 border-[var(--border)] rounded-full"></div>
    </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    // "primary" | "success" | "info" | "warning" | "danger"
    variant: { type: String, default: 'primary' },

    // "default" | "sm" | "lg"
    size: { type: String, default: 'default' },
})

const classes = computed(() => [
    'inline-flex items-center',

    {
        'size-8': props.size === 'lg',
        'size-4': props.size === 'default',
        'size-2': props.size === 'sm',
    },

    {
        '[&_[data-slot=spinner]]:border-t-[var(--primary)]': props.variant === 'primary',
        '[&_[data-slot=spinner]]:border-t-[var(--success)]': props.variant === 'success',
        '[&_[data-slot=spinner]]:border-t-[var(--info)]': props.variant === 'info',
        '[&_[data-slot=spinner]]:border-t-[var(--warning)]': props.variant === 'warning',
        '[&_[data-slot=spinner]]:border-t-[var(--danger)]': props.variant === 'danger',
    },
])
</script>
