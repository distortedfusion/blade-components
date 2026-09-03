<template>
    <span>
        {{ formattedData }}

        <span v-if="unit !== null">{{ unit }}</span>
    </span>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
    value: { type: Number, required: true },

    precision: { type: Number, default: 0 },

    unit: { type: String, default: null },
})

// Mirrors LocalizesFormattedNumbers::getDecimalNumberFormatter() +
// Number::formattedData(): decimal style with
// NumberFormatter::MAX_FRACTION_DIGITS = precision. The runtime default
// locale stands in for App::getLocale().
const formattedData = computed(() => {
    return new Intl.NumberFormat(undefined, {
        maximumFractionDigits: props.precision,
    }).format(props.value)
})
</script>
