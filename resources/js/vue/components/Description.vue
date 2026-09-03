<template>
    <dl :class="classes">
        <dt class="text-[var(--muted-foreground)] text-sm">{{ title }}</dt>
        <dd><slot /></dd>
    </dl>
</template>

<script setup>
defineProps({
    // Blade received this through the (anonymous) component attributes.
    title: { type: String, default: null },
})

const classes = ['space-y-1']
</script>
