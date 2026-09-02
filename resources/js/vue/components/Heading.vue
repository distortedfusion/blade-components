<template>
    <component
        :is="tag"
        data-slot="heading"
        :id="headingId()"
        :class="classes"
    ><slot /></component>
</template>

<script setup>
import { computed, useAttrs, useSlots } from 'vue'

const props = defineProps({
    headingLevel: { type: Number, default: 1 },

    asHeading: { type: Boolean, default: true },

    // "lg" | "default" | "sm" | "xs"
    size: { type: String, default: 'default' },
})

const attrs = useAttrs()
const slots = useSlots()

// Default Tailwind scales, mirroring
// BladeComponents::$defaultTailwindSizingScale / $defaultTailwindWeightScale.
const defaultTailwindSizingScale = ['xs', 'sm', 'base', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl', '8xl', '9xl']
const defaultTailwindWeightScale = ['thin', 'extralight', 'light', 'normal', 'medium', 'semibold', 'bold', 'extrabold', 'black']

// Mirrors BladeComponents::containsFontSizeClass() from src/Concerns/ChecksClass.php.
function containsFontSizeClass(classString) {
    return defaultTailwindSizingScale.some((scale) => classString.includes('text-' + scale))
}

// Mirrors BladeComponents::containsFontWeightClass() from src/Concerns/ChecksClass.php.
function containsFontWeightClass(classString) {
    return defaultTailwindWeightScale.some((scale) => classString.includes('font-' + scale))
}

// Mirrors Str::slug() (ASCII folding approximated with NFKD + accent stripping).
function slugify(value) {
    return String(value)
        .normalize('NFKD')
        .replace(/[\u0300-\u036f]/g, '')
        .toLowerCase()
        .replace(/[^a-z0-9]+/g, '-')
        .replace(/^-+|-+$/g, '')
}

// Flattens the rendered text of the default slot so it can be slugged.
function slotText() {
    const defaultSlot = slots.default

    if (! defaultSlot) {
        return ''
    }

    return [].concat(defaultSlot({})).map(nodeToText).join('')
}

function nodeToText(node) {
    if (node === null || node === undefined || node === false || node === true) {
        return ''
    }

    if (typeof node === 'string' || typeof node === 'number') {
        return String(node)
    }

    if (Array.isArray(node)) {
        return node.map(nodeToText).join('')
    }

    if (typeof node !== 'object') {
        return ''
    }

    const { type, children } = node

    // Skip comment placeholders (v-if / v-else-if / v-else / v-for).
    if (typeof type === 'symbol' && typeof children === 'string' && /^v-/.test(children)) {
        return ''
    }

    if (typeof children === 'string') {
        return children
    }

    if (Array.isArray(children)) {
        return children.map(nodeToText).join('')
    }

    return ''
}

// Mirrors Heading::id(): Str::slug of the slot content. A user-supplied id
// attribute wins over this through regular attribute fallthrough, matching
// the ->merge(['id' => ...]) behaviour in Blade.
function headingId() {
    return slugify(slotText())
}

// Mirrors $element = $asHeading ? 'h'.$headingLevel : 'div'.
const tag = computed(() => (props.asHeading ? 'h' + props.headingLevel : 'div'))

const classString = computed(() => String(attrs.class || ''))

const classes = computed(() => [
    'text-[var(--foreground)]',
    'font-sans-heading hyphens-auto',

    { 'font-semibold': ! containsFontWeightClass(classString.value) },

    {
        'text-lg': ! containsFontSizeClass(classString.value) && props.size === 'lg',
        '[:where(&)]:text-base': ! containsFontSizeClass(classString.value) && props.size === 'default',
        'text-sm': ! containsFontSizeClass(classString.value) && props.size === 'sm',
        'text-xs': ! containsFontSizeClass(classString.value) && props.size === 'xs',
    },
])
</script>
