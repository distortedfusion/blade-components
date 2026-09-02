<template>
    <ol :class="classes">
        <slot />
    </ol>
</template>

<script setup>
import { computed } from 'vue'

const classes = computed(() => [
    'flex items-center gap-x-1 md:gap-x-2',
])
</script>
