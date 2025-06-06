---
title: Breadcrumb
description: Displays the path to the current resource using a hierarchy of links.
---

```blade-component-preview
<div class="mx-auto">
    <x-breadcrumb>
        <x-breadcrumb.item>
            DDFSN
        </x-breadcrumb.item>

        <x-breadcrumb.separator />
        <x-breadcrumb.ellipsis />
        <x-breadcrumb.separator />

        <x-breadcrumb.item active>
            Blade Components
        </x-breadcrumb.item>
    </x-breadcrumb>
</div>
```

## Usage

```html
<x-breadcrumb>
    <x-breadcrumb.item>
        DDFSN
    </x-breadcrumb.item>

    <x-breadcrumb.separator />
    <x-breadcrumb.ellipsis />
    <x-breadcrumb.separator />

    <x-breadcrumb.item active>
        Blade Components
    </x-breadcrumb.item>
</x-breadcrumb>
```
