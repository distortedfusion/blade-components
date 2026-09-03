<template>
    <div
        data-slot="pulser"
        :class="classes"
    >
        <div class="h-2 w-2 relative">
            <div data-slot="dot" class="h-full w-full rounded-full relative"></div>
            <div data-slot="dot" class="h-full w-full rounded-full absolute top-0 left-0 opacity-75 animate-ping"></div>
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    // "primary" | "success" | "info" | "warning" | "danger"
    variant: { type: String, default: 'primary' },
})

const classes = computed(() => [
    'inline-block',

    {
        '[&_[data-slot=dot]]:bg-[var(--primary)]': props.variant === 'primary',
        '[&_[data-slot=dot]]:bg-[var(--success)]': props.variant === 'success',
        '[&_[data-slot=dot]]:bg-[var(--info)]': props.variant === 'info',
        '[&_[data-slot=dot]]:bg-[var(--warning)]': props.variant === 'warning',
        '[&_[data-slot=dot]]:bg-[var(--danger)]': props.variant === 'danger',
    },
])
</script>
