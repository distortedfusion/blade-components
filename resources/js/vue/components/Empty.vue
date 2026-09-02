<template>
    <div
        data-slot="empty"
        :class="classes"
    >
        <div
            data-slot="empty-header"
            class="flex max-w-md flex-col items-center gap-2 text-center [&>[data-slot=heading]:not(:first-child)]:mt-2"
        >
            <!-- Blade rendered a heroicon NAME string through `layout.icon`
                 (variant="secondary"); the Vue variant expects an icon
                 component and keeps the same wrapper. -->
            <div
                v-if="icon"
                class="inline-flex items-center justify-center border rounded-md aspect-square [&>[data-slot=icon]]:size-4 w-10 bg-[var(--secondary)] border-transparent text-[var(--secondary-foreground)]"
            >
                <component
                    :is="icon"
                    data-slot="icon"
                />
            </div>

            <!-- Blade rendered the `heading` component with
                 :as-heading="false" (no attributes, so font-semibold and
                 the default size class always apply). -->
            <div
                data-slot="heading"
                class="text-[var(--foreground)] font-sans-heading hyphens-auto font-semibold [:where(&)]:text-base"
            >{{ title }}</div>

            <!-- Blade rendered the `paragraph` component (no attributes). -->
            <p
                v-if="description"
                data-slot="paragraph"
                class="text-[var(--foreground)] text-base"
            >{{ description }}</p>
        </div>

        <div
            v-if="$slots.default"
            data-slot="empty-content"
            class="min-w-0 w-full max-w-md flex flex-col items-center gap-4 text-balance"
        >
            <slot />
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    title: { type: String, default: null },

    description: { type: String, default: null },

    // Blade accepted a heroicon NAME string; the Vue variant expects an
    // icon component.
    icon: { type: [Object, Function, String], default: null },
})

const classes = [
    'min-w-0 flex flex-1 flex-col items-center justify-center gap-6 p-6 md:p-12 rounded-[var(--radius)]',
    'border border-[var(--border)] border-dashed',

    'text-center text-balance',

    '[&_p]:text-[var(--muted-foreground)] [&_p]:text-sm',
    '[&_a:hover:not([data-slot=button])]:text-[var(--primary)] [&_a:not([data-slot=button])]:underline [&_a:not([data-slot=button])]:underline-offset-4',
]
</script>
