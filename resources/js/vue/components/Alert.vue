<template>
    <div
        data-slot="alert"
        :class="classes"
        role="alert"
    >
        <div class="flex items-start gap-x-2">
            <div
                v-if="icon || $slots.icon"
                :class="iconClasses"
            >
                <slot name="icon">
                    <component :is="icon" class="size-4" />
                </slot>
            </div>

            <div class="text-sm leading-6">
                <div
                    v-if="title"
                    class="flex items-start flex-wrap"
                >
                    <div class="mt-2 font-semibold mr-2">{{ title }}</div>
                    <div class="my-2"><slot /></div>
                </div>

                <div
                    v-else
                    class="my-2"
                >
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed, useAttrs } from 'vue'

const props = defineProps({
    // A Vue icon component (Blade renders a heroicon by name; the Vue
    // variant expects the consumer to supply the component or the
    // `icon` slot).
    icon: { type: [Object, Function, String], default: null },

    title: { type: String, default: null },

    // "default" | "success" | "info" | "warning" | "danger"
    variant: { type: String, default: 'default' },
})

const attrs = useAttrs()

// Mirrors `! Str::contains($attributes->get('class'), ['rounded'])`.
const hasRoundedClass = computed(() => {
    return String(attrs.class || '').includes('rounded')
})

const variants = {
    default: 'text-[var(--foreground)] bg-[var(--accent)] border-[var(--border)]',
    success: 'text-[var(--success-foreground)] bg-[color-mix(in_oklab,var(--success)_20%,var(--background))] border-[color-mix(in_oklab,var(--success)_50%,var(--background))]',
    info: 'text-[var(--info-foreground)] bg-[color-mix(in_oklab,var(--info)_20%,var(--background))] border-[color-mix(in_oklab,var(--info)_50%,var(--background))]',
    warning: 'text-[var(--warning-foreground)] bg-[color-mix(in_oklab,var(--warning)_20%,var(--background))] border-[color-mix(in_oklab,var(--warning)_50%,var(--background))]',
    danger: 'text-[var(--danger-foreground)] bg-[color-mix(in_oklab,var(--danger)_20%,var(--background))] border-[color-mix(in_oklab,var(--danger)_50%,var(--background))]',
}

const iconVariants = {
    default: 'text-[var(--muted-foreground)]',
    success: 'text-[var(--success)]',
    info: 'text-[var(--info)]',
    warning: 'text-[var(--warning)]',
    danger: 'text-[var(--danger)]',
}

const classes = computed(() => [
    'px-2 py-1 border',

    { 'rounded-[var(--radius)]': ! hasRoundedClass.value },

    // Reset border radius when used as a direct descendant of a card...
    '[[data-slot=card]>*]:rounded-none [[data-slot=card]>*]:-mx-px',

    variants[props.variant] || variants.default,
])

const iconClasses = computed(() => [
    'h-full my-1 p-2 flex-shrink-0 inline-block',

    iconVariants[props.variant] || iconVariants.default,
])
</script>
