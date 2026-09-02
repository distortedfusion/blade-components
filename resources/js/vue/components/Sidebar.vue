<template>
    <!-- The vanilla element name is written literally: <component :is> would
         camelize "ddfsn-sidebar" into the globally registered DdfsnSidebar
         component and mount this component inside itself, recursively. -->
    <!-- v-if/v-else branches disable Vue's automatic attribute fallthrough,
         so consumer attrs (class, ...) are bound explicitly. -->
    <ddfsn-sidebar v-if="isVanillaTag" ref="root" data-slot="sidebar" :class="classes" :sticky="sticky ? '' : null" :fixed="fixed ? '' : null" data-ddfsn-sidebar-cloak v-bind="$attrs">
        <slot />
    </ddfsn-sidebar>
    <component v-else :is="tag" ref="root" data-slot="sidebar" :class="classes" :sticky="sticky ? '' : null" :fixed="fixed ? '' : null" data-ddfsn-sidebar-cloak v-bind="$attrs">
        <slot />
    </component>
</template>

<script setup>
defineOptions({ inheritAttrs: false })

import { computed, onBeforeUnmount, onMounted, ref } from 'vue'
import {
    SIDEBAR_EVENTS,
    applySidebarDataAttributes,
    applySidebarStickyPosition,
    suppressSidebarTransitions,
    watchSidebarBreakpoint,
} from '../sidebar-core.js'

const props = defineProps({
    breakpoint: { type: [Number, String], default: 1024 },
    sticky: { type: Boolean, default: false },

    // Kept for parity with the vanilla element's `fixed` attribute;
    // styling remains owned by your CSS.
    fixed: { type: Boolean, default: false },

    // Native tag override ("aside", "nav", ...). Custom-element names
    // containing a dash cannot be used here: Vue resolves them as
    // components (see the template note above).
    tag: { type: String, default: "ddfsn-sidebar" },
})

const isVanillaTag = computed(() => props.tag === 'ddfsn-sidebar')

// Default classes mirroring the Blade layout view. The [:where(&)]: prefixed
// utilities carry zero specificity so consumer classes win.
const classes = computed(() => [
    props.fixed ? null : '[grid-area:sidebar]',
    'flex flex-col gap-4 z-20',
    'bg-[var(--sidebar)] [:where(&)]:w-[var(--sidebar-width,16rem)] [:where(&)]:p-4',
    '[:where(&)]:border-e [:where(&)]:border-[var(--border)]',
    { 'max-h-dvh overflow-x-hidden overscroll-contain': props.sticky || props.fixed },
    { 'min-h-dvh fixed start-0 inset-y-0': props.fixed },
    'data-ddfsn-sidebar-breakpoint-down:data-ddfsn-sidebar-collapsed:-translate-x-full',
    'data-ddfsn-sidebar-breakpoint-down:start-0!',
    'data-ddfsn-sidebar-breakpoint-down:fixed!',
    'data-ddfsn-sidebar-breakpoint-down:top-0!',
    'data-ddfsn-sidebar-breakpoint-down:min-h-dvh!',
    'data-ddfsn-sidebar-breakpoint-down:max-h-dvh!',
    'not-data-ddfsn-sidebar-cloak:transition-transform',
    'max-lg:data-ddfsn-sidebar-cloak:hidden',
])

if (props.tag.includes('-') && ! isVanillaTag.value) {
    console.warn('[ddfsn] Sidebar tag "' + props.tag + '" contains a dash and will be resolved as a component, not an element. Pass a native tag such as "aside".')
}

const emit = defineEmits(["breakpoint-up", "breakpoint-down", "expanded", "collapsed"])

const root = ref(null)

const collapsed = ref(false)

const breakpointUp = ref(true)
const breakpointDown = ref(false)

let disconnectViewport = null

const applyStateAttributes = () => {
    applySidebarDataAttributes(root.value, {
        collapsed: collapsed.value,
        breakpointUp: breakpointUp.value,
    })
}

const dispatchStateEvent = (type) => {
    root.value?.dispatchEvent(new CustomEvent(type, { bubbles: true }))
}

const collapse = () => {
    collapsed.value = true

    applyStateAttributes()

    emit("collapsed")
    dispatchStateEvent(SIDEBAR_EVENTS.COLLAPSED)
}

const expand = () => {
    collapsed.value = false

    applyStateAttributes()

    emit("expanded")
    dispatchStateEvent(SIDEBAR_EVENTS.EXPANDED)
}

const toggle = () => {
    collapsed.value ? expand() : collapse()
}

const onViewportChange = (matches) => {
    suppressSidebarTransitions(root.value)

    if (matches) {
        collapsed.value = false
        breakpointUp.value = true
        breakpointDown.value = false

        applyStateAttributes()

        emit("breakpoint-up")
        emit("expanded")
        dispatchStateEvent(SIDEBAR_EVENTS.EXPANDED)
    } else {
        collapsed.value = true
        breakpointUp.value = false
        breakpointDown.value = true

        applyStateAttributes()

        emit("breakpoint-down")
        emit("collapsed")
        dispatchStateEvent(SIDEBAR_EVENTS.COLLAPSED)
    }
}

const onDocumentToggle = () => {
    toggle()
}

onMounted(() => {
    const el = root.value

    if (! el) {
        return
    }

    if (props.sticky) {
        applySidebarStickyPosition(el)
    }

    // Mirror the Alpine init: reveal the sidebar once the state attributes
    // are applied (the cloak classes hide it pre-hydration below lg).
    applyStateAttributes()
    el.removeAttribute("data-ddfsn-sidebar-cloak")

    // Coerce numeric strings ("1024") so the media query stays valid.
    disconnectViewport = watchSidebarBreakpoint(Number(props.breakpoint) || props.breakpoint, onViewportChange)

    document.addEventListener(SIDEBAR_EVENTS.TOGGLE, onDocumentToggle)
})

onBeforeUnmount(() => {
    disconnectViewport?.()
    document.removeEventListener(SIDEBAR_EVENTS.TOGGLE, onDocumentToggle)
})

defineExpose({ collapse, expand, toggle, collapsed, breakpointUp, breakpointDown })
</script>
