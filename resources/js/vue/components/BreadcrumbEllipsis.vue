<template>
    <li :class="['leading-none']">
        <!-- Blade rendered `BladeComponents::defaultBreadcrumbEllipsisIcon()`
             (heroicon-o-ellipsis-horizontal) by name; the Vue variant expects
             a component passed as the `icon` prop or the `icon` slot. -->
        <slot name="icon">
            <component
                v-if="icon"
                :is="icon"
                class="size-4 text-[var(--muted-foreground)]"
            />
        </slot>
    </li>
</template>

<script setup>
import { computed } from 'vue'

// Blade defaulted to the `heroicon-o-ellipsis-horizontal` heroicon name;
// the Vue variant expects a component (or use the `icon` slot).
defineProps({
    icon: { type: [Object, Function, String], default: null },
})

const classes = computed(() => [
    'leading-none',
])
</script>
