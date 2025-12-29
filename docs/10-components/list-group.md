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

## Item Title

The `x-list-group.item` component has a dedicated `x-slot:title` slot which can be used to add additional information about an entry.

```blade-component-code
<x-list-group>
    <x-list-group.item>
        <x-slot:title>
            Address
        </x-slot:title>
        <address class="text-sm not-italic">
            <x-heading :heading-level="4" size="sm">DDFSN</x-heading>
            <x-paragraph size="sm" style="muted">Hoogstraat 12</x-paragraph>
            <x-paragraph size="sm" style="muted">4331 KR, Middelburg</x-paragraph>
            <x-paragraph size="sm" style="muted">The Netherlands</x-paragraph>
        </address>
    </x-list-group.item>
    <x-list-group.item>
        <x-slot:title>
            VAT ID
        </x-slot:title>
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
