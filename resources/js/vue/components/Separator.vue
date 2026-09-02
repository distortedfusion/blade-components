<template>
    <div
        v-if="! withSlot"
        data-slot="separator"
        :data-orientation="vertical ? 'vertical' : 'horizontal'"
        :class="separatorClasses"
    ></div>
    <div
        v-else
        data-slot="separator"
        data-orientation="horizontal"
        :class="['w-full flex items-center gap-6', '[&>[data-slot=separator-arm]]:flex-1']"
    >
        <div
            data-slot="separator-arm"
            :class="separatorClasses"
        ></div>
        <div><slot /></div>
        <div
            data-slot="separator-arm"
            :class="separatorClasses"
        ></div>
    </div>
</template>

<script setup>
import { computed, useSlots } from 'vue'

const props = defineProps({
    // "solid" | "dashed"
    variant: { type: String, default: 'solid' },

    vertical: { type: Boolean, default: false },
})

const slots = useSlots()

// Mirrors `$withSlot = trim($slot) && ! $vertical`.
const withSlot = computed(() => Boolean(slots.default) && ! props.vertical)

// The `$class` bag shared by the plain separator and both arms.
const separatorClasses = computed(() => [
    'border-0',

    { 'self-center': ! props.vertical },
    { 'self-stretch': props.vertical },
    { 'h-px': ! props.vertical },
    { 'w-px': props.vertical },

    // Styles...
    { 'bg-[var(--border)]': props.variant === 'solid' },

    {
        'bg-linear-[90deg,var(--border),var(--border)_75%,transparent_75%,transparent_100%] bg-size-[5px_1px]': props.variant === 'dashed' && ! props.vertical,
    },
    {
        'bg-linear-[0deg,var(--border),var(--border)_75%,transparent_75%,transparent_100%] bg-size-[1px_5px]': props.variant === 'dashed' && props.vertical,
    },
])
</script>
