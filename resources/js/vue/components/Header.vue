<template>
    <header
        data-slot="header"
        :class="classes"
        :sticky="sticky ? '' : null"
        :fixed="fixed ? '' : null"
    >
        <!-- Blade resolved the (optionally prefixed) container component via
             BladeComponents::componentAliasWithPrefix('container'). -->
        <Container v-if="container !== null" :size="container">
            <slot />
        </Container>

        <slot v-else />
    </header>
</template>

<script setup>
import { computed } from 'vue'
import Container from './Container.vue'

const props = defineProps({
    // When set, the slot is wrapped in a container of this size.
    container: { type: [String, Boolean], default: null },

    sticky: { type: Boolean, default: false },

    fixed: { type: Boolean, default: false },
})

// Blade echoed literal "sticky" / "fixed" attribute tokens in the opening tag
// when the matching prop was set; they are kept for output parity.
const classes = computed(() => [
    '[grid-area:header]',
    'flex items-center justify-between gap-2 z-10',

    'bg-[var(--sidebar)] min-h-[var(--header-height,3.5rem)]',
    '[:where(&)]:border-be [:where(&)]:border-[var(--border)]',

    { 'fixed top-0 inset-x-0': props.fixed },
    { 'sticky [:where(&)]:top-0': props.sticky },

    // Match the default spacing of a container, reset when a container is explicitly used...
    { '[:where(&)]:px-4 [:where(&)]:sm:px-6 [:where(&)]:lg:px-8 [&:has([data-slot=container])]:px-0': props.container === null },
])
</script>
