<template>
    <div
        data-slot="avatar"
        :data-size="size"
        :class="classes"
    >
        <div class="absolute inset-0">
            <div class="flex items-center justify-center absolute inset-0">
                <!-- Blade rendered a heroicon by name (constructor default
                     `heroicon-o-user`); the Vue variant expects a component
                     passed as the `icon` prop. -->
                <component
                    v-if="icon"
                    :is="icon"
                    data-slot="icon"
                />
            </div>

            <img
                v-if="src"
                class="absolute inset-0 size-full object-cover"
                :src="src"
                :srcset="srcset"
                :alt="alt || ''"
            >
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    src: { type: String, default: null },
    srcset: { type: String, default: null },
    alt: { type: String, default: null },

    // "xs" | "sm" | "default" | "lg"
    size: { type: String, default: 'default' },

    circle: { type: Boolean, default: false },

    // Blade rendered a heroicon by name; the Vue variant expects the
    // consumer to supply the icon component.
    icon: { type: [Object, Function, String], default: null },
})

const sizeVariants = {
    lg: '[&_[data-slot=icon]]:size-4 w-10',
    default: '[&_[data-slot=icon]]:size-4 w-9',
    sm: '[&_[data-slot=icon]]:size-4 w-8',
    xs: '[&_[data-slot=icon]]:size-3 w-6',
}

const classes = computed(() => [
    'block relative overflow-hidden aspect-square',
    'bg-[var(--muted)] text-[var(--muted-foreground)]',
    'ring-1 ring-[var(--background)]',

    // Border element, will be overlain with the image.
    "after:content-[''] after:absolute after:inset-0 after:border after:border-[var(--border)]",

    { 'rounded-[var(--radius)] after:rounded-[var(--radius)]': ! props.circle },
    { 'rounded-full after:rounded-full': props.circle },

    sizeVariants[props.size] || sizeVariants.default,
])
</script>
