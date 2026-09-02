<template>
    <Heading
        :heading-level="headingLevel"
        :as-heading="asHeading"
        :size="size"
    >
        <slot />
    </Heading>
</template>

<script setup>
// Blade rendered `BladeComponents::componentAliasWithPrefix('heading')` (the
// prefix is a Blade-only config concept); the Vue variant composes the
// Heading SFC directly.
import Heading from './Heading.vue'

defineProps({
    // "xs" | "sm" | "default" | "lg"
    size: { type: String, default: 'default' },

    headingLevel: { type: Number, default: 3 },

    asHeading: { type: Boolean, default: true },
})
</script>
