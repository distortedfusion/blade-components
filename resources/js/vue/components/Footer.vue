<template>
    <div
        data-slot="footer"
        :class="classes"
    >
        <!-- Blade resolved the (optionally prefixed) container component via
             BladeComponents::componentAliasWithPrefix('container'). -->
        <Container v-if="container !== null" :size="container">
            <slot />
        </Container>

        <slot v-else />
    </div>
</template>

<script setup>
import { computed } from 'vue'
import Container from './Container.vue'

const props = defineProps({
    // When set, the slot is wrapped in a container of this size.
    container: { type: [String, Boolean], default: null },
})

const classes = computed(() => [
    '[grid-area:footer]',

    // Match the default spacing of a container, reset when a container is explicitly used...
    { '[:where(&)]:px-4 [:where(&)]:sm:px-6 [:where(&)]:lg:px-8 [&:has([data-slot=container])]:px-0': props.container === null },
])
</script>
