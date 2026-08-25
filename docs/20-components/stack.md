---
title: Stack
description: Visually combine components into a stack in ascending or descending order.
short-description: Visually combine components into a stack.
icon: fasl-layer-group
---

```blade-component-preview
<div class="w-full max-w-96">
    <x-stack reverse>
        <x-card>
            <x-list-group>
                <x-list-group.item>
                    <div class="flex items-center gap-3">
                        <x-avatar icon="fasl-face-monocle" />
                        <div class="flex-grow">
                            <x-heading size="sm" :heading-level="4">Kevin Dierkx</x-heading>
                            <x-paragraph size="sm" style="muted">
                                kevin@example.com
                            </x-paragraph>
                        </div>
                        <x-badge style="secondary">Owner</x-badge>
                    </div>
                </x-list-group.item>

                <x-list-group.item>
                    <div class="flex items-center gap-3">
                        <x-avatar icon="fasl-face-smile-wink" />
                        <div class="flex-grow">
                            <x-heading size="sm" :heading-level="4">Isabella Duffey</x-heading>
                            <x-paragraph size="sm" style="muted">
                                isabella@example.com
                            </x-paragraph>
                        </div>
                        <x-badge style="secondary">Financial</x-badge>
                    </div>
                </x-list-group.item>

                <x-list-group.item>
                    <div class="flex items-center gap-3">
                        <x-avatar icon="fasl-face-sunglasses" />
                        <div class="flex-grow">
                            <x-heading size="sm" :heading-level="4">James Black</x-heading>
                            <x-paragraph size="sm" style="muted">
                                james@example.com
                            </x-paragraph>
                        </div>
                        <x-badge style="secondary">Technical</x-badge>
                    </div>
                </x-list-group.item>
            </x-list-group>
        </x-card>

        <x-alert style="warning" title="Member limit reached">
            Upgrade your plan to invite additional members.
        </x-alert>

        <x-card>
            <x-card.header>
                <x-card.title>Active team members</x-card.title>
                <x-slot:action>
                    <x-btn size="sm" style="outline" disabled>Invite</x-btn>
                </x-slot:action>
            </x-card.header>
        </x-card>
    </x-stack>
</div>
```

## Usage

```html
<x-stack>
    <x-card>...</x-card>
    <x-alert>...</x-alert>
    <x-card>...</x-card>
</x-stack>
```

## Reversing the stacking order

Components within a stack overlap based on the DOM order. By default, the second element overlaps the first, the third overlaps the second, and so on.

```blade-component-code
<x-stack>
    <x-alert style="success">First child in DOM</x-alert>
    <x-alert style="info">Second child in DOM</x-alert>
    <x-alert style="danger">Third child in DOM</x-alert>
</x-stack>
```

To visually reverse this, where each element is overlapped by the previous one, add the `reverse` attribute.

> [!NOTE]
> The `reverse` attribute doesn't alter the DOM order; it only reverses the displayed order of child elements.


```blade-component-code
<x-stack reverse>
    <x-alert style="success">First child in DOM</x-alert>
    <x-alert style="info">Second child in DOM</x-alert>
    <x-alert style="danger">Third child in DOM</x-alert>
</x-stack>
```

## Supported components

The `x-stack` component is intended to be used with the `x-card` and `x-alert` components, but it's not limited to just those components.

When elements are added to the `x-stack` component, overlap is automatically accounted for by adding a spacer element using the `::before` and `::after` [pseudo elements](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Selectors/::before). Depending on the element, this might conflict with existing [flexbox styling](https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/CSS_layout/Flexbox). To resolve this, wrap the element and move the flexbox styling one layer deeper.

## Component API

| Attribute | Default | Description                          |
| --------- | ------- | ------------------------------------ |
| `reverse` | `false` | `bool`<br>Reverse the display order. |
