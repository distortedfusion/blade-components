<template>
    <div
        data-slot="avatar-stack"
        :class="classes"
    >
        <slot />
    </div>
</template>

<script setup>
import { computed } from 'vue'

const classes = computed(() => [
    'flex flex-row-reverse items-center',

    '[&>[data-slot=avatar]:not(:first-child):is([data-size=lg])]:-mr-8',
    '[&>[data-slot=avatar]:not(:first-child):is([data-size=default])]:-mr-6',
    '[&>[data-slot=avatar]:not(:first-child):is([data-size=sm])]:-mr-4',
    '[&>[data-slot=avatar]:not(:first-child):is([data-size=xs])]:-mr-2',
])
</script>
