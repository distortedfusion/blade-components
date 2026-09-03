<template>
    <p
        data-slot="paragraph"
        :class="classes"
    ><slot /></p>
</template>

<script setup>
import { computed, useAttrs } from 'vue'

const props = defineProps({
    // null | "muted"
    variant: { type: String, default: null },

    // null | "lg" | "sm" | "xs" | "none"
    size: { type: String, default: null },
})

const attrs = useAttrs()

// Mirrors ! Str::contains($attributes->get('class'), ['text-']).
const hasAnyTextClass = computed(() => {
    return String(attrs.class || '').includes('text-')
})

// Mirrors BladeComponents::containsFontSizeClass() from src/Concerns/ChecksClass.php.
const hasFontSizeClass = computed(() => {
    const classString = String(attrs.class || '')

    return ['xs', 'sm', 'base', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl', '8xl', '9xl']
        .some((scale) => classString.includes('text-' + scale))
})

const classes = computed(() => [
    { 'text-[var(--foreground)]': ! hasAnyTextClass.value && props.variant === null },
    { 'text-[var(--muted-foreground)]': props.variant === 'muted' },

    {
        'text-lg': ! hasFontSizeClass.value && props.size === 'lg' && props.size !== 'none',
        'text-base': ! hasFontSizeClass.value && props.size === null && props.size !== 'none',
        'text-sm': ! hasFontSizeClass.value && props.size === 'sm' && props.size !== 'none',
        'text-xs': ! hasFontSizeClass.value && props.size === 'xs' && props.size !== 'none',
    },
])
</script>
