<template>
    <component
        :is="tag"
        data-slot="button"
        :data-style="variant"
        :data-size="size"
        :class="classes"
        :type="tag === 'button' ? type : undefined"
        :href="tag === 'a' ? href : undefined"
        :disabled="disabled ? '' : null"
    >
        <template v-if="prefix">{{ prefix }}</template>
        <slot />
        <template v-if="suffix">{{ suffix }}</template>
    </component>
</template>

<script setup>
import { computed, useAttrs } from 'vue'

const props = defineProps({
    // "default" | "sm" | "lg" | "icon" | "icon-sm" | "icon-lg"
    size: { type: String, default: 'default' },

    // "primary" | "secondary" | "ghost" | "outline" | "success" | "info" | "warning" | "danger"
    variant: { type: String, default: 'primary' },

    // "center" | "left" | "right"
    alignment: { type: String, default: 'center' },

    disabled: { type: Boolean, default: false },

    type: { type: String, default: 'button' },

    // Renders an <a> instead of a <button> when set (unless disabled).
    href: { type: String, default: null },

    // Blade printed these (escaped) strings around the slot content.
    prefix: { type: String, default: null },
    suffix: { type: String, default: null },
})

const attrs = useAttrs()

// Mirrors `! Str::contains($attributes->get('class'), ['rounded-'])`.
const hasRoundedClass = computed(() => {
    return String(attrs.class || '').includes('rounded-')
})

// Mirrors BladeComponents::containsHorizontalPaddingClass() from
// src/Concerns/ChecksClass.php (Str::contains with 'px-', 'pl-', 'pr-').
const hasHorizontalPaddingClass = computed(() => {
    const classString = String(attrs.class || '')

    return classString.includes('px-') || classString.includes('pl-') || classString.includes('pr-')
})

// Mirrors BladeComponents::containsVerticalPaddingClass() from
// src/Concerns/ChecksClass.php (Str::contains with 'py-', 'pt-', 'pb-').
const hasVerticalPaddingClass = computed(() => {
    const classString = String(attrs.class || '')

    return classString.includes('py-') || classString.includes('pt-') || classString.includes('pb-')
})

// Mirrors `Str::startsWith($size, 'icon-')`.
const isIconSize = computed(() => {
    return String(props.size).startsWith('icon-')
})

// Mirrors `@if(is_null($href) || $disabled)` rendering a <button>.
const tag = computed(() => {
    return props.href === null || props.disabled ? 'button' : 'a'
})

const classes = computed(() => [
    'inline-flex items-center justify-center gap-x-1.5 shrink-0',
    'text-sm/5 font-medium shadow-none',

    'hover:no-underline hover:outline-0',
    'focus:no-underline focus:outline-0',

    { 'rounded-[var(--radius)]': ! hasRoundedClass.value },

    {
        'text-center': props.alignment === 'center',
        'text-left': props.alignment === 'left',
        'text-right': props.alignment === 'right',
    },

    // Icons...
    '[&_svg:not([class*=size-])]:size-4',

    // Button sizes...
    { 'h-10': props.size === 'lg' },
    { 'h-9': props.size === 'default' },
    { 'h-8': props.size === 'sm' },

    { 'size-10': props.size === 'icon-lg' },
    { 'size-9': props.size === 'icon' },
    { 'size-8': props.size === 'icon-sm' },

    {
        'px-6': ! hasHorizontalPaddingClass.value && ! isIconSize.value && props.size === 'lg',
        'px-4': ! hasHorizontalPaddingClass.value && ! isIconSize.value && props.size === 'default',
        'px-3': ! hasHorizontalPaddingClass.value && ! isIconSize.value && props.size === 'sm',
    },

    {
        'py-2.5': ! hasVerticalPaddingClass.value && ! isIconSize.value && props.size === 'lg',
        'py-2': ! hasVerticalPaddingClass.value && ! isIconSize.value && props.size === 'default',
        'py-1.5': ! hasVerticalPaddingClass.value && ! isIconSize.value && props.size === 'sm',
    },

    // Styles...
    'border',

    { 'border-transparent': props.variant !== 'outline' },

    // Primary...
    {
        'bg-[var(--primary)] text-[var(--primary-foreground)]': props.variant === 'primary',
        'hover:bg-[color-mix(in_oklab,var(--primary)_90%,var(--background))]': props.variant === 'primary',
        'focus:bg-[color-mix(in_oklab,var(--primary)_90%,var(--background))]': props.variant === 'primary',
        'active:bg-[var(--primary)]': props.variant === 'primary',
    },

    // Secondary, Ghost and Outline...
    {
        'bg-[var(--secondary)] text-[var(--secondary-foreground)]': ['secondary', 'ghost'].includes(props.variant),
        'hover:bg-[color-mix(in_oklab,var(--secondary),var(--foreground)_5%)]': ['secondary', 'ghost', 'outline'].includes(props.variant),
        'focus:bg-[color-mix(in_oklab,var(--secondary),var(--foreground)_5%)]': ['secondary', 'ghost', 'outline'].includes(props.variant),
        'active:bg-[var(--secondary)]': ['secondary', 'ghost'].includes(props.variant),
    },

    // Ghost...
    { 'bg-transparent': ['ghost', 'outline'].includes(props.variant) },

    // Outline...
    {
        'border-[var(--border)] text-[var(--secondary-foreground)]': props.variant === 'outline',
        'active:bg-[var(--input)]': props.variant === 'outline',
    },

    // Success...
    {
        'bg-[color-mix(in_oklab,var(--success)_20%,var(--background))] text-[var(--success-foreground)]': props.variant === 'success',
        'hover:bg-[color-mix(in_oklab,var(--success)_40%,var(--background))]': props.variant === 'success',
        'focus:bg-[color-mix(in_oklab,var(--success)_40%,var(--background))]': props.variant === 'success',
        'active:bg-[color-mix(in_oklab,var(--success)_20%,var(--background))]': props.variant === 'success',
    },

    // Info...
    {
        'bg-[color-mix(in_oklab,var(--info)_20%,var(--background))] text-[var(--info-foreground)]': props.variant === 'info',
        'hover:bg-[color-mix(in_oklab,var(--info)_40%,var(--background))]': props.variant === 'info',
        'focus:bg-[color-mix(in_oklab,var(--info)_40%,var(--background))]': props.variant === 'info',
        'active:bg-[color-mix(in_oklab,var(--info)_20%,var(--background))]': props.variant === 'info',
    },

    // Warning...
    {
        'bg-[color-mix(in_oklab,var(--warning)_20%,var(--background))] text-[var(--warning-foreground)]': props.variant === 'warning',
        'hover:bg-[color-mix(in_oklab,var(--warning)_40%,var(--background))]': props.variant === 'warning',
        'focus:bg-[color-mix(in_oklab,var(--warning)_40%,var(--background))]': props.variant === 'warning',
        'active:bg-[color-mix(in_oklab,var(--warning)_20%,var(--background))]': props.variant === 'warning',
    },

    // Danger...
    {
        'bg-[color-mix(in_oklab,var(--danger)_20%,var(--background))] text-[var(--danger-foreground)]': props.variant === 'danger',
        'hover:bg-[color-mix(in_oklab,var(--danger)_40%,var(--background))]': props.variant === 'danger',
        'focus:bg-[color-mix(in_oklab,var(--danger)_40%,var(--background))]': props.variant === 'danger',
        'active:bg-[color-mix(in_oklab,var(--danger)_20%,var(--background))]': props.variant === 'danger',
    },

    // Disabled...
    'disabled:pointer-events-none disabled:opacity-50',

    // Transitions...
    'transition-colors duration-100',

    // Pause transitions during appearance changes...
    '[[data-ddfsn-pause-transitions]_&]:transition-none',
])
</script>
