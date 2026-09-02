<template>
    <ul :class="classes">
        <slot />
    </ul>
</template>

<script setup>
const classes = ['list-disc pl-5 marker:text-[var(--muted-foreground)]']
</script>
