<template>
    <kbd
        data-slot="kbd-group"
        :class="classes"
    >
        <slot />
    </kbd>
</template>

<script setup>
import { computed } from 'vue'

const classes = computed(() => [
    'inline-flex items-center gap-x-1',
])
</script>
