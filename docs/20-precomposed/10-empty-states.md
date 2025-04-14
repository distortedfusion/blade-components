---
title: Empty States
description: Default state when no content is available.
---

```blade-component-preview
<div class="flex justify-center items-center min-h-60">
    <x-layout.empty-state title="Title" :as-heading="false">
        <x-paragraph style="muted">The Evil Rabbit Jumped over the Fence.</x-paragraph>
        <x-slot:action>
            <x-btn size="sm" style="secondary">Primary Action</x-btn>
            <x-btn size="sm" style="ghost">
                Learn More
            </x-btn>
        </x-slot:action>
    </x-layout.empty-state>
</div>
```

## Basic

```blade-component-code
<x-layout.empty-state title="Title" :as-heading="false">
    <x-paragraph style="muted">The Evil Rabbit Jumped over the Fence.</x-paragraph>
    <x-slot:action>
        <x-btn size="sm" style="secondary">Primary Action</x-btn>
        <x-btn size="sm" style="ghost">
            Learn More
        </x-btn>
    </x-slot:action>
</x-layout.empty-state>
```

## Informational

```blade-component-code
<x-layout.empty-state title="Title" :as-heading="false">
    <x-paragraph style="muted">The Evil Rabbit Jumped over the Fence.</x-paragraph>

    <x-list-group>
        <x-list-group.item>
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <x-layout.icon icon="fal-brush" style="secondary" />
                </div>

                <div class="flex-grow text-left">
                    <x-heading class="text-sm" size="flex" :as-heading="false">TailwindCSS</x-heading>
                    <div class="text-xs text-gray-600">
                        <x-paragraph style="muted" size="xs">CSS Framework</x-paragraph>
                    </div>
                </div>

                <div class="flex-shrink-0">
                    <x-btn size="sm" style="secondary">Action</x-btn>
                </div>
            </div>
        </x-list-group.item>
        <x-list-group.item>
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <x-layout.icon icon="fal-code" style="secondary" />
                </div>

                <div class="flex-grow text-left">
                    <x-heading class="text-sm" size="flex" :as-heading="false">Laravel</x-heading>
                    <div class="text-xs text-gray-600">
                        <x-paragraph style="muted" size="xs">Application Framework</x-paragraph>
                    </div>
                </div>

                <div class="flex-shrink-0">
                    <x-btn size="sm" style="secondary">Action</x-btn>
                </div>
            </div>
        </x-list-group.item>
        <x-list-group.item>
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <x-layout.icon icon="fal-database" style="secondary" />
                </div>

                <div class="flex-grow text-left">
                    <x-heading class="text-sm" size="flex" :as-heading="false">MySQL</x-heading>
                    <div class="text-xs text-gray-600">
                        <x-paragraph style="muted" size="xs">Database</x-paragraph>
                    </div>
                </div>

                <div class="flex-shrink-0">
                    <x-btn size="sm" style="secondary">Action</x-btn>
                </div>
            </div>
        </x-list-group.item>
    </x-list-group>
    <x-slot:action>
        <x-btn size="sm" style="secondary">Primary Action</x-btn>
        <x-btn size="sm" style="ghost">
            Learn More
        </x-btn>
    </x-slot:action>
</x-layout.empty-state>
```
