<template>
    <div :class="classes">
        <div class="w-full h-full bg-[var(--secondary)] rounded-full overflow-hidden relative">
            <div
                class="bg-[var(--primary)] absolute inset-y-0 left-0 transition-all ease-out"
                :style="{ width: progress + '%' }"
            ></div>
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    // The fill percentage (0-100).
    progress: { type: Number, default: 0 },

    // "sm" | "default" | "lg"
    size: { type: String, default: 'default' },
})

const classes = computed(() => [
    'w-full',
    { 'h-4': props.size === 'lg' },
    { 'h-2': props.size === 'default' },
    { 'h-1': props.size === 'sm' },
])
</script>
