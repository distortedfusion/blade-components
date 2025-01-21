---
title: Button
description: Primary control for any action, supporting both anchors and buttons.
---

```blade-component-preview
<div class="flex items-center justify-center h-32">
    <x-btn>Button</x-btn>
</div>
```

## Usage

```html
<x-btn>Button</x-btn>
```

### Component API

| Tables   |      Are      |  Cool |
|----------|:-------------:|------:|
| col 1 is |  left-aligned | $1600 |
| col 2 is |    centered   |   $12 |
| col 3 is | right-aligned |    $1 |

## Variants

```blade-component-code
<div class="grid grid-cols-3 gap-4">
    <x-btn style="primary">Button</x-btn>
    <x-btn style="secondary">Button</x-btn>
    <x-btn style="tertiary">Button</x-btn>
    <x-btn style="info">Button</x-btn>
    <x-btn style="warning">Button</x-btn>
    <x-btn style="danger">Button</x-btn>
</div>
```

## Sizes

```blade-component-code
<div class="grid grid-cols-3 gap-4 items-center">
    <x-btn size="lg">Button</x-btn>
    <x-btn>Button</x-btn>
    <x-btn size="sm">Button</x-btn>
</div>
```

## Links

Buttons can be used as links by supplying a `href=""` attribute.

```blade-component-code
<div class="grid grid-cols-3 gap-4">
    <x-btn href="#">Button</x-btn>
</div>
```

## Disabled State

Both linked buttons and traditional buttons can be set to a disabled state by supplying the `disabled` boolean attribute.

```blade-component-code
<div class="grid grid-cols-3 gap-4">
    <x-btn disabled href="#">Button</x-btn>
    <x-btn disabled>Button</x-btn>
</div>
```

## Prefix and Suffix

Buttons can be prefixed or suffixed with simple text elements for additional clarity.

```blade-component-code
<div class="grid grid-cols-3 gap-4 items-center">
    <x-btn>
        <x-slot:prefix>
            <span class="text-gray-400">1.</span>
        </x-slot:prefix>
        Button
    </x-btn>
    <x-btn>
        Button
        <x-slot:suffix>
            <span class="text-gray-400">1.</span>
        </x-slot:suffix>
    </x-btn>
    <x-btn>
        <x-slot:prefix>
            <span class="text-gray-400">1.</span>
        </x-slot:prefix>
        Button
        <x-slot:suffix>
            <span class="text-gray-400">2.</span>
        </x-slot:suffix>
    </x-btn>
</div>
```

## With Icons

Optionally the `x-btn.icon` component can be used to add icons.

```blade-component-code
<x-btn.icon icon="fal-arrow-up" />
```

```blade-component-code
<div class="grid grid-cols-3 gap-4 items-center">
    <x-btn>
        <x-slot:prefix>
            <x-btn.icon icon="fal-arrow-up" />
        </x-slot:prefix>
        Button
    </x-btn>
    <x-btn>
        Button
        <x-slot:suffix>
            <x-btn.icon icon="fal-arrow-up" />
        </x-slot:suffix>
    </x-btn>
    <x-btn>
        <x-slot:prefix>
            <x-btn.icon icon="fal-arrow-up" />
        </x-slot:prefix>
        Button
        <x-slot:suffix>
            <x-btn.icon icon="fal-arrow-up" />
        </x-slot:suffix>
    </x-btn>
</div>
```
