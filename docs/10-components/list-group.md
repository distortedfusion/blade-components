---
title: List Group
description: List information in an organized manner or refer to a different source.
short-description: Organize and display a list of items.
icon: fasl-table-list
---

```blade-component-preview
<x-list-group class="w-full max-w-96">
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

## Usage

```html
<x-list-group>
    <x-list-group.item>
        The Evil Rabbit Jumped over the Fence.
    </x-list-group.item>
</x-list-group>
```

### Component API

#### x-list-group

| Attribute | Default   | Description                                        |
| --------- | --------- | -------------------------------------------------- |
| `style`   | `default` | `string`<br>Possible values `default`, or `pills`. |

### Default Icons

Get or set the default icons used trough the `BladeComponents` service or via the component directly.

```php
<?php

use DistortedFusion\BladeComponents\BladeComponents;
use DistortedFusion\BladeComponents\Components\ListGroup\Item;

BladeComponents::defaultListGroupItemIndicatorIcon();
BladeComponents::setDefaultListGroupItemIndicatorIcon(icon: 'heroicon-o-chevron-right');

Item::defaultIndicatorIcon();
Item::setDefaultIndicatorIcon(icon: 'heroicon-o-chevron-right');
```

## Style

Control the list group style by supplying the style="" attribute.

```blade-component-code
<x-list-group style="pills">
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
```

## Item Title

The `x-list-group.item` component has a dedicated `x-slot:title` slot which can be used to add additional information about an entry, alternatively the same can be achieved by supplying the `title=""` attribute.

```blade-component-code
<x-list-group>
    <x-list-group.item title="Address">
        <address class="not-italic">
            <x-heading :heading-level="4" size="sm">DDFSN</x-heading>
            <x-paragraph size="sm" style="muted">Hoogstraat 12</x-paragraph>
            <x-paragraph size="sm" style="muted">4331 KR, Middelburg</x-paragraph>
            <x-paragraph size="sm" style="muted">The Netherlands</x-paragraph>
        </address>
    </x-list-group.item>

    <x-list-group.item title="VAT ID">
        <span class="font-mono">NL000099998B57</span>
    </x-list-group.item>

    <x-list-group.item>
        <x-paragraph size="sm" style="muted">Your next invoice will include 21% VAT based on your location.</x-paragraph>
    </x-list-group.item>
</x-list-group>
```

## Links

Use list group items as links by supplying the `href=""` attribute. Optionally, as with native [anchor elements](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a), a `target=""` attribute can be provided to control the behavior of the anchor.

```blade-component-code
<x-list-group>
    <x-list-group.item-link href="https://distortedfusion.com" target="_blank" title="Distorted Fusion">
        https://distortedfusion.com
    </x-list-group.item-link>

    <x-list-group.item-link href="https://devnomads.nl" target="_blank" title="DevNomads">
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
