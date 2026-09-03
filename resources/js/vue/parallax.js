import { computed, onBeforeUnmount, onMounted, ref } from 'vue'

/**
 * Scroll-driven parallax for a template-ref target element. The element's
 * traversal through the viewport is exposed as `progress` (0 when it
 * enters at the bottom, 1 when it leaves at the top) and as a ready-to-bind
 * parallax `style` that drifts the element by `speed` of the viewport
 * height. Updates are rAF-throttled and `prefers-reduced-motion` keeps the
 * offset at zero.
 */
export function useParallax(options = {}) {
    const speed = typeof options.speed === 'number' ? options.speed : 0.2

    const target = ref(null)

    const progress = ref(0)
    const viewport = ref(0)
    const reduced = ref(false)

    const offset = computed(() => {
        // Element centered in the viewport => no offset; it drifts by
        // `speed` of the viewport height in either direction.
        return Math.round((progress.value - 0.5) * speed * viewport.value)
    })

    const style = computed(() => {
        if (reduced.value) {
            return {};
        }

        return {
            transform: `translate3d(0, ${offset.value}px, 0)`,
            willChange: 'transform',
        };
    })

    let motion = null
    let frame = null

    const update = () => {
        frame = null

        const el = target.value

        if (! el) {
            return
        }

        motion ||= window.matchMedia('(prefers-reduced-motion: reduce)')

        const rect = el.getBoundingClientRect()
        const height = window.innerHeight || 1

        viewport.value = height
        reduced.value = motion.matches
        progress.value = Math.min(1, Math.max(0, (height - rect.top) / (height + rect.height)))
    }

    const scheduleUpdate = () => {
        frame ??= requestAnimationFrame(update)
    }

    onMounted(() => {
        window.addEventListener('scroll', scheduleUpdate, { passive: true })
        window.addEventListener('resize', scheduleUpdate, { passive: true })

        update()
    })

    onBeforeUnmount(() => {
        window.removeEventListener('scroll', scheduleUpdate)
        window.removeEventListener('resize', scheduleUpdate)

        if (frame) {
            cancelAnimationFrame(frame)

            frame = null
        }
    })

    return { target, progress, offset, style }
}
