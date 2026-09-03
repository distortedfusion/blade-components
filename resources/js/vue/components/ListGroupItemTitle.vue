<template>
    <div class="flex flex-wrap flex-col md:flex-row items-baseline">
        <div class="md:w-32 md:flex-shrink-0 md:mr-2">
            <p
                data-slot="paragraph"
                class="text-[var(--muted-foreground)] text-sm"
            >{{ title }}<slot v-if="!title" name="title" /></p>
        </div>

        <slot />
    </div>
</template>

<script setup>
defineProps({
    // Blade view: `@props(['title' => null])` rendered via {!! $title !!}.
    title: { type: String, default: '' },
})

// Mirrors the view-only `list-group.precomposed.title` Blade component.
// That view composes the `paragraph` component (aliased to
// `components.text.paragraph`) with `variant="muted"` and `size="sm"`;
// its resolved markup (`<p data-slot="paragraph">` with the
// `text-[var(--muted-foreground)]` and `text-sm` classes) is inlined
// above because the Vue variant has no standalone Paragraph component
// to reference yet.
</script>
