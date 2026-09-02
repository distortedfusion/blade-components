<template>
    <div
        data-slot="card-body"
        :class="classes"
    >
        <slot />
    </div>
</template>

<script setup>
import { computed, useAttrs } from 'vue'

const attrs = useAttrs()

// Mirrors `! Str::contains($attributes->get('class'), ['p-', 'px-', 'pl-', 'pr-'])`.
const hasHorizontalPaddingClass = computed(() =>
    ['p-', 'px-', 'pl-', 'pr-'].some((needle) =>
        String(attrs.class || '').includes(needle)
    )
)

const classes = computed(() => [
    { 'px-4': ! hasHorizontalPaddingClass.value },
])
</script>
