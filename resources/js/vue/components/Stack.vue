<template>
    <div
        data-slot="stack"
        :data-order="reverse ? 'desc' : 'asc'"
        :class="classes"
    >
        <slot />
    </div>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    // Stack the children in reverse visual order.
    reverse: { type: Boolean, default: false },
})

const classes = computed(() => [
    'flex relative',

    // Overlap previous/next child in stack...
    { '[&>*:not(:first-child)]:-mt-[calc(var(--radius)*2)] flex-col': ! props.reverse },
    { '[&>*:not(:last-child)]:-mt-[calc(var(--radius)*2)] flex-col-reverse': props.reverse },
    '[&>*]:relative',

    // Add a spacer to each child to compensate for the ovelap...
    // Note that reversing the display order doesn't change the DOM order.
    '[&>*:before,&>*:after]:h-[calc(var(--radius)*2)] [&>*:before,&>*:after]:block',
    { '[&>*:not(:last-child):after]:content-[""]': ! props.reverse },
    { '[&>*:not(:last-child):before]:content-[""]': props.reverse },
])
</script>
