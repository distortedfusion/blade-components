<template>
    <div
        data-slot="list-group-item"
        v-bind="componentAttrs"
        :class="classes"
    >
        <div
            v-if="href !== null || button"
            class="absolute inset-x-1 inset-y-1 z-0 scale-95 bg-[color-mix(in_oklab,var(--secondary),var(--foreground)_5%)] rounded opacity-0 transition group-hover:scale-100 group-hover:opacity-100"
        ></div>

        <div class="flex-grow min-w-0 relative z-1">
            <ListGroupItemTitle v-if="title">
                <template #title>{{ title }}</template>
                <template v-if="hasSlotContent"><slot /></template>
                <template v-else>&mdash;</template>
            </ListGroupItemTitle>
            <template v-else>
                <template v-if="hasSlotContent"><slot /></template>
                <template v-else>&mdash;</template>
            </template>
        </div>

        <a
            v-if="href !== null && ! button"
            :href="href"
            :target="target"
            v-bind="indicatorAttrs"
            :class="indicatorClasses"
        >
            <span class="sr-only">Go to</span>
            <div class="absolute inset-0 z-2"></div>
            <div
                data-slot="list-group-item-indicator"
                class="p-2 -my-2 -mr-2 relative"
            >
                <div class="absolute inset-0 z-0 bg-[color-mix(in_oklab,var(--secondary),var(--foreground)_5%)] rounded-[var(--radius-inner)] opacity-0 transition group-focus-visible/indicator:opacity-100"></div>

                <slot name="indicator">
                    <component
                        :is="indicatorIcon"
                        class="size-4 text-[var(--foreground)] opacity-50 group-hover:opacity-100 group-focus/indicator:opacity-100 relative z-10"
                    />
                </slot>
            </div>
        </a>
        <button
            v-else-if="button"
            :type="type"
            v-bind="indicatorAttrs"
            :class="indicatorClasses"
        >
            <span class="sr-only">Go to</span>
            <div class="absolute inset-0 z-2"></div>
            <div
                data-slot="list-group-item-indicator"
                class="p-2 -my-2 -mr-2 relative"
            >
                <div class="absolute inset-0 z-0 bg-[color-mix(in_oklab,var(--secondary),var(--foreground)_5%)] rounded-[var(--radius-inner)] opacity-0 transition group-focus-visible/indicator:opacity-100"></div>

                <slot name="indicator">
                    <component
                        :is="indicatorIcon"
                        class="size-4 text-[var(--foreground)] opacity-50 group-hover:opacity-100 group-focus/indicator:opacity-100 relative z-10"
                    />
                </slot>
            </div>
        </button>
    </div>
</template>

<script setup>
import { computed, useAttrs, useSlots } from 'vue'
import ListGroupItemTitle from './ListGroupItemTitle.vue'

// Mirrors the Blade view's attribute split: `$componentAttributes`
// (everything not prefixed with `wire:` / `x-`) decorates the root
// element while `$indicatorAttributes` (the `wire:` / `x-` prefixed
// attributes) are routed to the link / button indicator. Attribute
// inheritance is disabled so the split is applied exactly once.
defineOptions({ inheritAttrs: false })

const props = defineProps({
    href: { type: String, default: null },
    target: { type: String, default: '_self' },
    title: { type: String, default: null },
    type: { type: String, default: 'button' },
    button: { type: Boolean, default: false },

    // Blade defaults to the `heroicon-o-chevron-right` heroicon NAME
    // string; the Vue variant expects a component (or use the
    // `indicator` slot instead).
    indicatorIcon: { type: [Object, Function, String], default: null },

    // Propagated from the parent list-group via Blade @aware;
    // "default" | "pills".
    variant: { type: String, default: 'default' },
})

const attrs = useAttrs()
const slots = useSlots()

// Mirrors `$attributes->filter(fn ($value, $key) => ! Str::startsWith($key, 'wire:') && ! Str::startsWith($key, 'x-'))`.
const componentAttrs = computed(() => {
    const result = {}

    for (const [key, value] of Object.entries(attrs)) {
        if (! String(key).startsWith('wire:') && ! String(key).startsWith('x-')) {
            result[key] = value
        }
    }

    return result
})

// Mirrors `$attributes->filter(fn ($value, $key) => Str::startsWith($key, 'wire:') || Str::startsWith($key, 'x-'))`.
const indicatorAttrs = computed(() => {
    const result = {}

    for (const [key, value] of Object.entries(attrs)) {
        if (String(key).startsWith('wire:') || String(key).startsWith('x-')) {
            result[key] = value
        }
    }

    return result
})

// Mirrors `trim($slot) ? $slot : '&mdash;'`.
const hasSlotContent = computed(() => Boolean(slots.default))

const classes = computed(() => [
    'group flex items-center relative',
    'text-[var(--foreground)] leading-6',
    'py-3 px-3',

    { 'border border-[var(--border)] bg-[var(--card)] rounded-[var(--radius)]': props.variant === 'pills' },
])

const indicatorClasses = computed(() => [
    'ml-2 flex-shrink-0 block hover:no-underline outline-none group/indicator',
])
</script>
