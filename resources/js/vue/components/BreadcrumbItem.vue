<template>
    <li :class="['leading-none']">
        <span
            v-if="href === null"
            :class="itemClasses"
        >
            <slot />
        </span>

        <a
            v-else
            :href="href"
            :class="linkClasses"
        >
            <slot />
        </a>
    </li>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    href: { type: String, default: null },

    active: { type: Boolean, default: false },
})

const itemClasses = computed(() => [
    props.active
        ? 'text-[var(--foreground)] font-semibold'
        : 'text-[var(--muted-foreground)]',
    'text-sm',
])

const linkClasses = computed(() => [
    'outline-none',
    'hover:no-underline hover:text-[var(--foreground)]',
    'focus:text-[var(--foreground)] focus-visible:underline',
    ...itemClasses.value,
])
</script>
