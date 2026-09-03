<template>
    <div
        data-slot="accordion-content"
        :aria-labelledby="itemId"
    >
        <Transition
            :css="false"
            @enter="onEnter"
            @leave="onLeave"
        >
            <div
                v-show="expanded"
                :class="innerClasses"
            >
                <slot />
            </div>
        </Transition>
    </div>
</template>

<script setup>
import { computed, inject, useAttrs } from 'vue'

const props = defineProps({
    // Fade the content in / out alongside the collapse.
    fade: { type: Boolean, default: true },
})

const attrs = useAttrs()

// Provided by <AccordionItem> (Blade: item scope `id` + `expanded`).
const item = inject('accordion-item', null)

// Blade: @aware(['transition' => true]) — falls back to true outside an
// accordion.
const accordion = inject('accordion', null)

const expanded = computed(() => (item ? item.expanded.value : false))
const itemId = computed(() => (item ? item.id : null))
const transition = computed(() => (accordion ? accordion.transition.value : true))

// Mirrors Illuminate\Support\Str::contains with an array of needles.
const containsAnyClass = (classString, needles) => needles.some((needle) => classString.includes(needle))

const innerClasses = computed(() => [
    'flex flex-col gap-y-5 transition-all duration-500',

    // Mirrors `! Str::contains($attributes->get('class'), ['p-', 'pb-', 'py-'])`.
    { 'pb-3': ! containsAnyClass(String(attrs.class || ''), ['p-', 'pb-', 'py-']) },

    { 'opacity-100': ! props.fade || ! transition.value },
    { 'opacity-0': ! expanded.value && transition.value },
])

// Re-implements Alpine's x-collapse (x-collapse.duration.0ms when the
// accordion transition is disabled) with JS transition hooks and inline
// styles, matching the inner div's duration-500.
const DURATION_MS = 500

const onEnter = (el, done) => {
    if (! transition.value) {
        done()

        return
    }

    let finished = false
    const finish = () => {
        if (finished) {
            return
        }

        finished = true
        el.removeEventListener('transitionend', finish)
        el.style.height = ''
        el.style.overflow = ''
        el.style.transition = ''
        done()
    }

    el.style.overflow = 'hidden'
    el.style.height = '0px'
    // Flush layout so the collapsed height is committed before animating.
    void el.offsetHeight
    el.style.transition = `height ${DURATION_MS}ms ease`
    el.style.height = `${el.scrollHeight}px`
    el.addEventListener('transitionend', finish, { once: true })
    setTimeout(finish, DURATION_MS + 50)
}

const onLeave = (el, done) => {
    if (! transition.value) {
        done()

        return
    }

    let finished = false
    const finish = () => {
        if (finished) {
            return
        }

        finished = true
        el.removeEventListener('transitionend', finish)
        el.style.height = ''
        el.style.overflow = ''
        el.style.transition = ''
        done()
    }

    el.style.overflow = 'hidden'
    el.style.height = `${el.scrollHeight}px`
    // Flush layout so the expanded height is committed before animating.
    void el.offsetHeight
    el.style.transition = `height ${DURATION_MS}ms ease`
    el.style.height = '0px'
    el.addEventListener('transitionend', finish, { once: true })
    setTimeout(finish, DURATION_MS + 50)
}
</script>
