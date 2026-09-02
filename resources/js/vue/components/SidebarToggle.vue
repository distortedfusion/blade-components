<template>
    <!-- Blade rendered this as a ghost icon Btn (layout/sidebar-toggle.blade.php):
         the button dispatches sidebar:toggle, which every sidebar in the
         document answers. Single root, so consumer attributes fall through. -->
    <Btn
        ref="root"
        data-slot="sidebar-toggle"
        size="icon"
        variant="ghost"
        aria-label="Toggle sidebar"
        @click="onToggleClick"
    >
        <slot />
    </Btn>
</template>

<script setup>
import { onBeforeUnmount, onMounted, ref } from 'vue'
import Btn from './Btn.vue'
import { SIDEBAR_EVENTS, syncSidebarStateAttributes } from '../sidebar-core.js'

const root = ref(null)

// The ref sits on the Btn COMPONENT, so it resolves to a component instance;
// unwrap its root element (fall back for element refs).
const rootEl = () => (root.value && root.value.$el) ? root.value.$el : root.value

const onToggleClick = () => {
    rootEl()?.dispatchEvent(new CustomEvent(SIDEBAR_EVENTS.TOGGLE, { bubbles: true }))
}

const onSidebarStateChanged = (event) => {
    syncSidebarStateAttributes(event.target, rootEl())
}

onMounted(() => {
    const el = rootEl()

    if (! el) {
        return
    }

    document.addEventListener(SIDEBAR_EVENTS.COLLAPSED, onSidebarStateChanged)
    document.addEventListener(SIDEBAR_EVENTS.EXPANDED, onSidebarStateChanged)

    // Mirror the initial state from the first sidebar in the document,
    // matching the vanilla element behaviour.
    queueMicrotask(() => {
        syncSidebarStateAttributes(document.querySelector("ddfsn-sidebar"), el)
    })
})

onBeforeUnmount(() => {
    document.removeEventListener(SIDEBAR_EVENTS.COLLAPSED, onSidebarStateChanged)
    document.removeEventListener(SIDEBAR_EVENTS.EXPANDED, onSidebarStateChanged)
})
</script>
