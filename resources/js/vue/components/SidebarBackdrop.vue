<template>
    <!-- Blade used the raw "ddfsn-sidebar-toggle" element here (not the toggle
         button): a fixed overlay that mirrors the sidebar state attributes and
         toggles the sidebar when clicked. The literal dash tag compiles to a
         native custom element (isCustomElement in the package build). -->
    <ddfsn-sidebar-toggle
        ref="root"
        data-slot="sidebar-backdrop"
        :class="classes"
        @click="onToggleClick"
    ></ddfsn-sidebar-toggle>
</template>

<script setup>
import { onBeforeUnmount, onMounted, ref } from 'vue'
import { SIDEBAR_EVENTS, syncSidebarStateAttributes } from '../sidebar-core.js'

const classes = [
    'z-20 fixed inset-0 bg-[var(--backdrop)] hidden',
    'data-ddfsn-sidebar-breakpoint-down:not-data-ddfsn-sidebar-collapsed:block',
]

const root = ref(null)

const onToggleClick = () => {
    root.value?.dispatchEvent(new CustomEvent(SIDEBAR_EVENTS.TOGGLE, { bubbles: true }))
}

const onSidebarStateChanged = (event) => {
    syncSidebarStateAttributes(event.target, root.value)
}

onMounted(() => {
    const el = root.value

    if (! el) {
        return
    }

    document.addEventListener(SIDEBAR_EVENTS.COLLAPSED, onSidebarStateChanged)
    document.addEventListener(SIDEBAR_EVENTS.EXPANDED, onSidebarStateChanged)

    queueMicrotask(() => {
        syncSidebarStateAttributes(document.querySelector("ddfsn-sidebar"), el)
    })
})

onBeforeUnmount(() => {
    document.removeEventListener(SIDEBAR_EVENTS.COLLAPSED, onSidebarStateChanged)
    document.removeEventListener(SIDEBAR_EVENTS.EXPANDED, onSidebarStateChanged)
})
</script>
