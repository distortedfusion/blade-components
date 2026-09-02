<template>
    <time
        v-if="human"
        :datetime="formattedDate"
    >{{ humanDate }}</time>

    <span
        v-else
        :title="humanDate"
    >{{ formattedDate }}</span>
</template>

<script setup>
import { computed } from 'vue'

// The PHP component accepted a DateTimeInterface and a PHP date format string
// (default 'M j, Y \&\m\d\a\s\h\; H:i', rendered as "M j, Y &mdash; H:i").
// The Vue variant accepts a Date (or any value accepted by new Date) and
// Intl.DateTimeFormat options instead of a PHP format string.
const props = defineProps({
    date: { type: [Date, String, Number], required: true },

    // Intl.DateTimeFormat options; null falls back to the default below.
    format: { type: Object, default: null },

    human: { type: Boolean, default: false },
})

// Mirrors DateTime::$defaultFormat = 'M j, Y &mdash; H:i'.
const defaultFormat = {
    month: 'short',
    day: 'numeric',
    year: 'numeric',
    hour: '2-digit',
    minute: '2-digit',
    hour12: false,
}

const date = computed(() => {
    return props.date instanceof Date ? props.date : new Date(props.date)
})

const formatter = computed(() => {
    return new Intl.DateTimeFormat(undefined, props.format || defaultFormat)
})

const formattedDate = computed(() => {
    return formatter.value.format(date.value)
})

// Mirrors Carbon's diffForHumans() using Intl.RelativeTimeFormat.
const humanDate = computed(() => {
    return diffForHumans(date.value)
})

function diffForHumans(value) {
    const diffSeconds = (value.getTime() - Date.now()) / 1000
    const seconds = Math.abs(diffSeconds)

    const units = [
        ['year', 31536000],
        ['month', 2592000],
        ['week', 604800],
        ['day', 86400],
        ['hour', 3600],
        ['minute', 60],
    ]

    let unit = 'second'
    let size = 1

    for (const [candidate, threshold] of units) {
        if (seconds >= threshold) {
            unit = candidate
            size = threshold
            break
        }
    }

    const relative = Math.max(1, Math.round(seconds / size))

    return new Intl.RelativeTimeFormat(undefined, { numeric: 'always' })
        .format(diffSeconds < 0 ? -relative : relative, unit)
}
</script>
