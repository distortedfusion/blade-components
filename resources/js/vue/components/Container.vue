<template>
    <div
        data-slot="container"
        :class="classes"
    >
        <slot />
    </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    // "responsive" | "lg" | "md" | "sm" | "none"
    spacing: { type: String, default: 'responsive' },

    // null | "sm" | "md" | "lg" | "xl" | "2xl" | "3xl" | "full"
    size: { type: [String, Boolean], default: null },
})

const classes = computed(() => [
    'w-full mx-auto',

    // Spacing...
    { '[:where(&)]:px-4 [:where(&)]:sm:px-6 [:where(&)]:lg:px-8': props.spacing === 'responsive' && props.spacing !== 'none' },
    { '[:where(&)]:px-8': props.spacing === 'lg' && props.spacing !== 'none' },
    { '[:where(&)]:px-6': props.spacing === 'md' && props.spacing !== 'none' },
    { '[:where(&)]:px-4': props.spacing === 'sm' && props.spacing !== 'none' },

    // Sizes... (the max-widths, except for 3xl, are matched to the default tailwindcss breakpoints)
    { 'max-w-full': props.size === 'full' },
    { 'max-w-[120rem]': props.size === '3xl' },
    { 'max-w-[96rem]': props.size === '2xl' },
    { 'max-w-7xl': props.size === null || props.size === 'xl' },
    { 'max-w-5xl': props.size === 'lg' },
    { 'max-w-3xl': props.size === 'md' },
    { 'max-w-[40rem]': props.size === 'sm' },
])
</script>
