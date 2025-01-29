---
title: List Group
description: List information in an organized manner or refer to a different source.
---

```blade-component-preview
<div class="flex justify-center items-center min-h-40">
    <x-list-group class="max-w-96">
        <x-list-group.item>
            <x-slot:title>
                Status
            </x-slot:title>
            <x-badge style="success">Active</x-badge>
        </x-list-group.item>
        <x-list-group.item>
            <x-slot:title>
                Last Activity
            </x-slot:title>
            2 months ago
        </x-list-group.item>
    </x-list-group>
</div>
```

## Usage

```html
<x-list-group>
    <x-list-group.item>
        The Evil Rabbit Jumped over the Fence.
    </x-list-group.item>
</x-list-group>
```

### Component API

| Attribute  | Default | Description                                      |
| ---------- | ------- | ------------------------------------------------ |
| `disabled` | `false` | `bool`<br>Whether the outside borders are shown. |

## Flush

The outside borders can be removed per `x-list-group` instance by supplying the `disabled` boolean attribute.

```blade-component-code
<x-list-group flush>
    <x-list-group.item>
        <x-slot:title>
            Status
        </x-slot:title>
        <x-badge style="success">Active</x-badge>
    </x-list-group.item>
    <x-list-group.item>
        <x-slot:title>
            Last Activity
        </x-slot:title>
        2 months ago
    </x-list-group.item>
</x-list-group>
```

## Item Title

The `x-list-group.item` component has a dedicated `x-slot:title` slot which can be used to add additional information about an entry.

```blade-component-code
<x-list-group>
    <x-list-group.item>
        <x-slot:title>
            Placeholder
        </x-slot:title>
        The Evil Rabbit Jumped over the Fence.
    </x-list-group.item>
    <x-list-group.item>
        The Evil Rabbit Jumped over the Fence.
    </x-list-group.item>
</x-list-group>
```

## Links

Use list group items as links by supplying the `href=""` attribute. Optionally, as with native [anchor elements](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a), a `target=""` attribute can be provided to control the behavior of the anchor.

```blade-component-code
<x-list-group>
    <x-list-group.item-link href="https://distortedfusion.com" target="_blank">
        <x-slot:title>
            Distorted Fusion
        </x-slot:title>
        https://distortedfusion.com
    </x-list-group.item-link>
    <x-list-group.item-link href="https://devnomads.nl" target="_blank">
        <x-slot:title>
            DevNomads
        </x-slot:title>
        https://devnomads.nl
    </x-list-group.item-link>
</x-list-group>
```

## Buttons

A list group items can be used as a `<button>` by supplying the `boolean` boolean attribute or by using the `x-list-group.item-btn` component alias.

```blade-component-code
<x-list-group>
    <x-list-group.item button onclick="alert('Hello World!')">
        <span>BENNY BENASSI - Satisfaction</span> <x-badge size="sm" style="success">Radio Edit</x-badge>
    </x-list-group.item>
    <x-list-group.item-btn onclick="alert('Hello World!')">
        <span>BENNY BENASSI - Satisfaction</span> <x-badge size="sm" style="warning">Remix</x-badge>
    </x-list-group.item>
</x-list-group>
```
