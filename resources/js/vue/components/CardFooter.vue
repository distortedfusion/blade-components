<template>
    <div
        data-slot="card-footer"
        :class="classes"
    >
        <slot />
    </div>
</template>

<script setup>
import { computed } from 'vue'

const classes = computed(() => [
    'flex flex-col-reverse sm:flex-row sm:[:where(&)]:justify-end gap-2',
    'rounded-b-[var(--radius-inner)]',
    '[:where(&)]:px-4',
])
</script>
