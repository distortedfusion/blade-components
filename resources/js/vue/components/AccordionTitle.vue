<template>
    <!-- Blade rendered `<x-dynamic-component :component="accordion.toggle">`. -->
    <AccordionToggle :indicator-icon="indicatorIcon">
        <template v-if="$slots.indicator" #indicator>
            <!-- Blade passed this via a typo'd `<x-slot:indictor>` slot that
                 relied on parent-scope injection; forwarded as `indicator`. -->
            <slot name="indicator" />
        </template>

        <!-- Blade rendered the `heading` component with
             :heading-level="3" (and no attributes, so font-semibold always
             applies); the heading subcomponent is inlined here. -->
        <h3
            data-slot="heading"
            :class="headingClasses"
        ><slot /></h3>
    </AccordionToggle>
</template>

<script setup>
import { computed } from 'vue'
import AccordionToggle from './AccordionToggle.vue'

const props = defineProps({
    // "xs" | "sm" | "default" | "lg"
    size: { type: String, default: 'default' },

    // Blade accepted a heroicon NAME string; the Vue variant expects an
    // icon component (or use the `indicator` slot).
    indicatorIcon: { type: [Object, Function, String], default: null },
})

const headingSizeClasses = {
    lg: 'text-lg',
    default: '[:where(&)]:text-base',
    sm: 'text-sm',
    xs: 'text-xs',
}

const headingClasses = computed(() => [
    'text-[var(--foreground)]',
    'font-sans-heading hyphens-auto',
    'font-semibold',
    headingSizeClasses[props.size] || headingSizeClasses.default,
])
</script>
