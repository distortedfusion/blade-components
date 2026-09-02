<template>
    <span>{{ formattedData }}</span>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    value: { type: Number, required: true },

    // The PHP formatter hardcoded the EUR currency code and ignored this
    // prop; the Vue variant honours it.
    currency: { type: String, default: 'EUR' },
})

// Mirrors LocalizesFormattedNumbers::getCurrencyFormatter() +
// Currency::formattedData(): currency style, NumberFormatter::MAX_FRACTION_DIGITS
// = 2 with the ICU currency minimum staying at 2. The runtime default locale
// stands in for App::getLocale().
const formattedData = computed(() => {
    return new Intl.NumberFormat(undefined, {
        style: 'currency',
        currency: props.currency,
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
    }).format(props.value)
})
</script>
