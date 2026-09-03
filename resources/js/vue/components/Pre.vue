<template>
    <div :class="rootClasses">
        <div :class="wrapperClasses">
            <pre
                ref="pre"
                :class="preClasses"
            ><slot /></pre>
        </div>

        <div
            v-if="withCopy"
            class="flex-shrink-0 pr-1 relative pt-1"
        >
            <!-- Blade rendered the package copy button (a "btn" component with
                 style="ghost" size="sm") wired up through Alpine.js; the Vue
                 variant composes the Btn component with a click handler
                 (variant="ghost": Vue reserves `style` for CSS). -->
            <Btn
                variant="ghost"
                size="sm"
                @click="copyToClipboard"
            >{{ copied ? copiedLabel : copyLabel }}</Btn>
        </div>
    </div>
</template>

<script setup>
import { computed, ref, useAttrs } from 'vue'
import Btn from './Btn.vue'

const props = defineProps({
    scrollbar: { type: Boolean, default: true },

    withCopy: { type: Boolean, default: false },

    copyLabel: { type: String, default: 'Copy' },

    copiedLabel: { type: String, default: 'Copied!' },
})

const attrs = useAttrs()

const pre = ref(null)

const copied = ref(false)

let resetTimeout = null

// Mirrors ! Str::contains($attributes->get('class'), 'bg-').
const rootClasses = computed(() => [
    'flex items-start gap-x-2 rounded-[var(--radius)]',

    { 'bg-[var(--accent)]': ! String(attrs.class || '').includes('bg-') },
])

const wrapperClasses = computed(() => [
    'flex-grow relative min-w-0',
    "before:content-[''] before:block before:w-4 before:absolute before:inset-y-0 before:right-0 before:pointer-events-none",
    'before:bg-gradient-to-r before:from-transparent before:to-[var(--accent)]',

    { 'before:rounded-r-[var(--radius-inner)]': ! props.withCopy },
])

const preClasses = computed(() => [
    'w-full px-4 py-2',
    'text-sm leading-6 font-mono',

    props.scrollbar
        ? 'overflow-scroll [scrollbar-width:_thin] [scrollbar-color:_var(--border)_transparent]'
        : 'overflow-scroll [&::-webkit-scrollbar]:hidden [-ms-overflow-style:_none] [scrollbar-width:_none]',
])

// Replaces the Alpine x-data / x-on:click snippet: copy the pre text to the
// clipboard and swap the button label for two seconds. Blade derived the
// Alpine ref id from crc32 of the slot; Vue uses a template ref instead.
function copyToClipboard() {
    const text = pre.value ? pre.value.innerText : ''

    if (navigator.clipboard) {
        navigator.clipboard.writeText(text)
    }

    copied.value = true

    clearTimeout(resetTimeout)
    resetTimeout = setTimeout(() => {
        copied.value = false
    }, 2000)
}
</script>
