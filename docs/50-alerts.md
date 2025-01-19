---
title: Alerts
description:
---

Display text that requires attention or provides additional information.

```blade-component-code
<x-alert>This alert details some information.</x-alert>
```

## Title

```blade-component-code
<x-alert title="Important">
    This alert details some information.
</x-alert>
```

## Variants

```blade-component-code
<div class="space-y-2">
    <x-alert type="default">
        This alert details some information.
    </x-alert>
    <x-alert type="success">
        This alert details a success.
    </x-alert>
    <x-alert type="info">
        This alert details some information.
    </x-alert>
    <x-alert type="warning">
        This alert details a warning.
    </x-alert>
    <x-alert type="danger">
        This alert details an error.
    </x-alert>
</div>
```
