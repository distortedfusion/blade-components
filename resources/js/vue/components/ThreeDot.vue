<template>
    <div
        data-slot="three-dot"
        :class="classes"
    >
        <div class="inline-flex items-center gap-x-1">
            <div data-slot="dot" class="size-1 rounded-full animate-[pulse_2s_infinite_cubic-bezier(.4,0,.6,1)_0ms]"></div>
            <div data-slot="dot" class="size-1 rounded-full animate-[pulse_2s_infinite_cubic-bezier(.4,0,.6,1)_125ms]"></div>
            <div data-slot="dot" class="size-1 rounded-full animate-[pulse_2s_infinite_cubic-bezier(.4,0,.6,1)_250ms]"></div>
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
