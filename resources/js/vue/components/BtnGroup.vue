<template>
    <div
        data-slot="button-group"
        :class="classes"
    >
        <slot />
    </div>
</template>

<script setup>
import { computed } from 'vue'

const classes = computed(() => [
    'flex items-center',
    '[&>[data-slot=button]:not(:first-child)]:rounded-l-none',
    '[&>[data-slot=button]:not(:first-child)]:border-l-0',
    '[&>[data-slot=button]:not(:last-child)]:rounded-r-none',
])
</script>
