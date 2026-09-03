<template>
    <div
        :class="classes"
        role="alert"
    >
        <template v-if="icon">{{ icon }}</template>
        <slot />
    </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    // "default" | "sm"
    size: { type: String, default: 'default' },

    // "primary" | "secondary" | "success" | "info" | "warning" | "danger"
    variant: { type: String, default: 'primary' },

    // Blade printed a raw (HTML-escaped) `icon` string before the slot;
    // the Vue variant renders it as plain text (pass icon markup through
    // the default slot instead).
    icon: { type: String, default: null },
})

const classes = computed(() => [
    'inline-flex items-center justify-center gap-x-1 rounded-[var(--radius-inner)] shrink-0',
    'text-xs font-semibold',

    // Badge sizes...
    { 'px-2 py-1 -my-1': props.size === 'default' },
    { 'px-1 py-0.5 -my-0.5': props.size === 'sm' },

    // Styles...
    {
        'text-[var(--primary-foreground)] bg-[var(--primary)]': props.variant === 'primary',
        'text-[var(--secondary-foreground)] bg-[var(--secondary)]': props.variant === 'secondary',

        'text-[var(--success-foreground)] bg-[color-mix(in_oklab,var(--success)_10%,transparent)]': props.variant === 'success',
        'text-[var(--info-foreground)] bg-[color-mix(in_oklab,var(--info)_10%,transparent)]': props.variant === 'info',
        'text-[var(--warning-foreground)] bg-[color-mix(in_oklab,var(--warning)_10%,transparent)]': props.variant === 'warning',
        'text-[var(--danger-foreground)] bg-[color-mix(in_oklab,var(--danger)_10%,transparent)]': props.variant === 'danger',
    },

    // Icons...
    '[&_svg]:size-3',

    {
        '[&_svg]:text-[var(--muted-foreground)]': ['primary', 'secondary'].includes(props.variant),
        '[&_svg]:text-[var(--success)]': props.variant === 'success',
        '[&_svg]:text-[var(--info)]': props.variant === 'info',
        '[&_svg]:text-[var(--warning)]': props.variant === 'warning',
        '[&_svg]:text-[var(--danger)]': props.variant === 'danger',
    },
])
</script>
