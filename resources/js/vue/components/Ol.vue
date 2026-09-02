<template>
    <ol :class="classes">
        <slot />
    </ol>
</template>

<script setup>
const classes = ['list-decimal pl-5 marker:text-[var(--muted-foreground)]']
</script>
