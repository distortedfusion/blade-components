<template>
    <div
        data-slot="table-container"
        :class="containerClasses"
    >
        <table
            data-slot="table"
            v-bind="tableAttrs"
            :class="tableClasses"
        >
            <slot />
        </table>
    </div>
</template>

<script setup>
import { computed, useAttrs } from 'vue'

// The Blade view routes attributes manually: everything except the
// `container:class` attribute is placed on the <table> element, while
// `container:class` decorates the container div. Attribute inheritance
// is disabled so Vue does not also fall the attributes through onto the
// root container div.
defineOptions({ inheritAttrs: false })

const props = defineProps({
    // "top" | "bottom"
    caption: { type: String, default: 'bottom' },

    // Consumed by the table-header / table-row children via Blade
    // @aware; the Vue variant expects it to be passed down explicitly.
    hover: { type: Boolean, default: false },
})

const attrs = useAttrs()

const containerClasses = computed(() => [
    'flex flex-col overflow-auto',

    attrs['container:class'] || '',
])

// Mirrors `$attributes->except('container:class')`.
const tableAttrs = computed(() => {
    const tableAttributes = {}

    for (const [key, value] of Object.entries(attrs)) {
        if (key !== 'container:class') {
            tableAttributes[key] = value
        }
    }

    return tableAttributes
})

const tableClasses = computed(() => [
    '[:where(&)]:min-w-full table-fixed border-separate border-spacing-0 isolate',
    '[:where(&)]:text-sm whitespace-nowrap',

    // Caption placement...
    { '[:where(&)]:caption-top': props.caption === 'top' },
    { '[:where(&)]:caption-bottom': props.caption === 'bottom' },
])
</script>
