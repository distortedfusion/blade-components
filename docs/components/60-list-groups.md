---
title: List Groups
description:
---

List information in an organized manner or refer to a different source.

```blade-component-code
<x-list-group>
    <x-list-group.item>
        <x-slot:title>
            Last Activity
        </x-slot:title>
        2 months ago
    </x-list-group.item>
    <x-list-group.item>
        <x-slot:title>
            Availability
        </x-slot:title>
        Available
    </x-list-group.item>
</x-list-group>
```

```blade-component-code
<x-list-group flush>
    <x-list-group.item>
        <x-slot:title>
            Last Activity
        </x-slot:title>
        2 months ago
    </x-list-group.item>
    <x-list-group.item>
        <x-slot:title>
            Availability
        </x-slot:title>
        Available
    </x-list-group.item>
</x-list-group>
```

## Link items

```blade-component-code
<x-list-group>
    <x-list-group.item-link href="#">
        <x-slot:title>
            Distorted Fusion
        </x-slot:title>
        https://distortedfusion.com
    </x-list-group.item-link>
    <x-list-group.item-link href="#">
        <x-slot:title>
            DevNomads
        </x-slot:title>
        https://devnomads.nl
    </x-list-group.item-link>
</x-list-group>
```

## Button items

```blade-component-code
<x-list-group>
    <x-list-group.item-button>
        <x-slot:title>
            Distorted Fusion
        </x-slot:title>
        https://distortedfusion.com
    </x-list-group.item-button>
    <x-list-group.item-button>
        <x-slot:title>
            DevNomads
        </x-slot:title>
        https://devnomads.nl
    </x-list-group.item>
</x-list-group>
```
